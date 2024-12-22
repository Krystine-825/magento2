<?php

namespace ExchangeRates\ExchangeRates\Cron;

use Psr\Log\LoggerInterface;
use ExchangeRates\ExchangeRates\Model\Api;
use Magento\Framework\App\Config\Storage\WriterInterface;

class UpdateRates
{
    protected $logger;
    protected $api;
    protected $configWriter;

    public function __construct(
        LoggerInterface $logger,
        Api $api,
        WriterInterface $configWriter
    ) {
        $this->logger = $logger;
        $this->api = $api;
        $this->configWriter = $configWriter;
    }

    public function execute()
    {
        try {
            // Fetch exchange rates from the API
            $exchangeRates = $this->api->getExchangeRates();

            if (!empty($exchangeRates)) {
                // Convert exchange rates to JSON and store them in config
                $this->configWriter->save('exchange_rates/general/rates', json_encode($exchangeRates));
                $this->logger->info('Exchange rates updated successfully.');
            } else {
                $this->logger->warning('Exchange rates API returned no data.');
            }
        } catch (\Exception $e) {
            $this->logger->error('Error updating exchange rates: ' . $e->getMessage());
        }
    }
}
