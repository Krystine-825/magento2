<?php

namespace ExchangeRates\ExchangeRates\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use ExchangeRates\ExchangeRates\Helper\Data as ExchangeRatesHelper;
use Psr\Log\LoggerInterface;

class Index extends Action
{
    protected $resultPageFactory;
    protected $helper;
    protected $logger;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ExchangeRatesHelper $helper,
        LoggerInterface $logger
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->helper = $helper;
        $this->logger = $logger; // Inject logger
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            // Get exchange rates from the helper
            $exchangeRates = $this->helper->getExchangeRates();

            // Log data for debugging
            $this->logger->info('Exchange Rates in Controller: ' . print_r($exchangeRates, true));

            // Pass data to the block
            $resultPage = $this->resultPageFactory->create();
            $resultPage->getLayout()->getBlock('exchange.rates.block')->setData('exchangeRates', $exchangeRates);

            return $resultPage;
        } catch (\Exception $e) {
            $this->logger->error('Error in ExchangeRates Index Controller: ' . $e->getMessage());
            throw $e; // Re-throw the exception
        }
    }
}
