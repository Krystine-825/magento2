<?php
namespace Magento\PaymentServicesPaypal\Controller\SmartButtons\SetQuoteAsInactive;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\SmartButtons\SetQuoteAsInactive
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\SmartButtons\SetQuoteAsInactive implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Framework\Session\Generic $paypalSession, \Magento\Checkout\Model\Session $checkoutSession)
    {
        $this->___init();
        parent::__construct($resultFactory, $quoteRepository, $paypalSession, $checkoutSession);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
