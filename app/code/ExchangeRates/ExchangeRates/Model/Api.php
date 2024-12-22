<?php
namespace ExchangeRates\ExchangeRates\Model;

use Magento\Framework\HTTP\Client\Curl;

class Api
{
    protected $curl;

    public function __construct(Curl $curl)
    {
        $this->curl = $curl;
    }

    public function getExchangeRates()
    {
        $apiUrl = 'https://api.exchangerate-api.com/v4/latest/USD'; // API URL
        $this->curl->get($apiUrl);

        if ($this->curl->getStatus() === 200) {
            $response = json_decode($this->curl->getBody(), true);

            // Check if rates are available
            if (isset($response['rates']) && is_array($response['rates'])) {
                $rates = [];
                foreach ($response['rates'] as $currency => $rate) {
                    $rates[] = [
                        'currency' => $currency,
                        'currency_name' => $this->getCurrencyName($currency), // Optional: add currency names
                        'buy_rate' => $rate,
                        'transfer_rate' => $rate * 1.01, // Example markup for transfer
                        'sell_rate' => $rate * 0.99  // Example markup for sell
                    ];
                }
                return $rates;
            }
        }

        return [];
    }

    // Helper function to get currency names (optional)
    private function getCurrencyName($currencyCode)
    {
        $currencyNames = [
            'USD' => 'US Dollar',
            'AED' => 'United Arab Emirates Dirham',
            'AFN' => 'Afghan Afghani',
            'ALL' => 'Albanian Lek',
            'AMD' => 'Armenian Dram',
            'ANG' => 'Netherlands Antillean Guilder',
            'AOA' => 'Angolan Kwanza'
        ];

        return $currencyNames[$currencyCode] ?? 'Unknown Currency';
    }
}
