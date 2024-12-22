<?php
namespace Magento\PaymentServicesBase\Controller\Adminhtml\System\Config\ResetPaymentsMerchantId;

/**
 * Interceptor class for @see \Magento\PaymentServicesBase\Controller\Adminhtml\System\Config\ResetPaymentsMerchantId
 */
class Interceptor extends \Magento\PaymentServicesBase\Controller\Adminhtml\System\Config\ResetPaymentsMerchantId implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\PaymentServicesBase\Model\MerchantService $merchantService, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($merchantService, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
