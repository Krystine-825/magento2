<?php

namespace ExchangeRates\ExchangeRates\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\HTTP\Client\Curl;
use Psr\Log\LoggerInterface;

class Data extends AbstractHelper
{
    const API_URL = 'https://api.exchangerate-api.com/v4/latest/USD';

    protected $curl;
    protected $logger;

    public function __construct(
        Context $context,
        Curl $curl,
        LoggerInterface $logger
    ) {
        parent::__construct($context);
        $this->curl = $curl;
        $this->logger = $logger;
    }

    public function getExchangeRates()
    {
        try {
            // Make the API request
            $this->curl->setOption(CURLOPT_RETURNTRANSFER, true);
            $this->curl->get(self::API_URL);

            $response = $this->curl->getBody();
            $this->logger->info('Exchange Rates API Response: ' . $response);

            $data = json_decode($response, true);

            if (isset($data['rates']) && isset($data['rates']['VND'])) {
                $vndRate = $data['rates']['VND'];
                $exchangeRates = $data['rates'];

                // Define the currencies you want to display
                $allowedCurrencies = [
                    'AUD', 'CAD', 'CHF', 'CNY', 'DKK', 'EUR', 'GBP', 
                    'HKD', 'INR', 'JPY', 'KRW', 'KWD', 'MYR', 'NOK', 
                    'RUB', 'SAR', 'SEK', 'SGD', 'THB', 'USD'
                ];

                $formattedRates = [];
                foreach ($allowedCurrencies as $currency) {
                    if (isset($exchangeRates[$currency])) {
                        $rateInVnd = $exchangeRates[$currency] * $vndRate;
                        $formattedRates[] = [
                            'currency' => $currency,
                            'currency_name' => $this->getCurrencyName($currency),
                            'buy_rate' => number_format($rateInVnd * 0.98, 2), // Example: Buy rate
                            'transfer_rate' => number_format($rateInVnd, 2), // Example: Transfer rate
                            'sell_rate' => number_format($rateInVnd * 1.02, 2), // Example: Sell rate
                        ];
                    }
                }

                return $formattedRates;
            }

            $this->logger->error('VND rate not found in the API response.');
            return [];
        } catch (\Exception $e) {
            $this->logger->error('Error fetching exchange rates: ' . $e->getMessage());
            return [];
        }
    }


    private function getCurrencyName($currencyCode)
    {
        $currencyNames = [
            'USD' => 'US Dollar',
            'EUR' => 'Euro',
            'GBP' => 'British Pound',
            'JPY' => 'Japanese Yen',
            'AUD' => 'Australian Dollar',
            'CAD' => 'Canadian Dollar',
            'CHF' => 'Swiss Franc',
            'CNY' => 'Chinese Yuan',
            'INR' => 'Indian Rupee',
            'VND' => 'Vietnamese Dong',
            // Add more currency names as needed
        ];

        return $currencyNames[$currencyCode] ?? 'Unknown';
    }
}
