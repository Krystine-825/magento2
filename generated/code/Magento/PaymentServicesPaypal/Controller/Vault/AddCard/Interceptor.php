<?php
namespace Magento\PaymentServicesPaypal\Controller\Vault\AddCard;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\Vault\AddCard
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\Vault\AddCard implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\PaymentServicesPaypal\Model\Config $config, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($pageFactory, $resultFactory, $customerSession, $messageManager, $config, $storeManager);
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
