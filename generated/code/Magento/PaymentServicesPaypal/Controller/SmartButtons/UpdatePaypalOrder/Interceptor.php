<?php
namespace Magento\PaymentServicesPaypal\Controller\SmartButtons\UpdatePaypalOrder;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\SmartButtons\UpdatePaypalOrder
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\SmartButtons\UpdatePaypalOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\PaymentServicesPaypal\Model\OrderService $orderService, \Magento\PaymentServicesPaypal\Helper\OrderHelper $orderHelper, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Framework\Session\Generic $paypalSession, \Magento\Checkout\Model\Session $checkoutSession)
    {
        $this->___init();
        parent::__construct($resultFactory, $orderService, $orderHelper, $quoteRepository, $paypalSession, $checkoutSession);
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
