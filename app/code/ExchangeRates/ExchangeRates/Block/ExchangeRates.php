<?php

namespace ExchangeRates\ExchangeRates\Block;

use Magento\Framework\View\Element\Template;

class ExchangeRates extends Template
{
    public function getExchangeRates()
    {
        $exchangeRates = $this->getData('exchangeRates');
        $this->_logger->info('Exchange Rates in Block: ' . print_r($exchangeRates, true));
        return $exchangeRates;
    }
}
