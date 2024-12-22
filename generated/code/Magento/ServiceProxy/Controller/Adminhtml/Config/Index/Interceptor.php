<?php
namespace Magento\ServiceProxy\Controller\Adminhtml\Config\Index;

/**
 * Interceptor class for @see \Magento\ServiceProxy\Controller\Adminhtml\Config\Index
 */
class Interceptor extends \Magento\ServiceProxy\Controller\Adminhtml\Config\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Config\Storage\WriterInterface $configWriter, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Serialize\Serializer\Json $serializer, \Magento\Framework\App\Cache\TypeListInterface $typeList, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\CacheInterface $cache, array $configPaths = [], array $cacheInvalidationPatterns = [])
    {
        $this->___init();
        parent::__construct($context, $configWriter, $jsonFactory, $scopeConfig, $serializer, $typeList, $storeManager, $cache, $configPaths, $cacheInvalidationPatterns);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function createCsrfValidationException(\Magento\Framework\App\RequestInterface $request) : ?\Magento\Framework\App\Request\InvalidRequestException
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createCsrfValidationException');
        return $pluginInfo ? $this->___callPlugins('createCsrfValidationException', func_get_args(), $pluginInfo) : parent::createCsrfValidationException($request);
    }

    /**
     * {@inheritdoc}
     */
    public function validateForCsrf(\Magento\Framework\App\RequestInterface $request) : ?bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateForCsrf');
        return $pluginInfo ? $this->___callPlugins('validateForCsrf', func_get_args(), $pluginInfo) : parent::validateForCsrf($request);
    }

    /**
     * {@inheritdoc}
     */
    public function _processUrlKeys()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_processUrlKeys');
        return $pluginInfo ? $this->___callPlugins('_processUrlKeys', func_get_args(), $pluginInfo) : parent::_processUrlKeys();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($route, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        return $pluginInfo ? $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo) : parent::getActionFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }
}
