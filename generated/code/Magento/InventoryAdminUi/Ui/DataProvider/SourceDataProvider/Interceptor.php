<?php
namespace Magento\InventoryAdminUi\Ui\DataProvider\SourceDataProvider;

/**
 * Interceptor class for @see \Magento\InventoryAdminUi\Ui\DataProvider\SourceDataProvider
 */
class Interceptor extends \Magento\InventoryAdminUi\Ui\DataProvider\SourceDataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Framework\Api\Search\ReportingInterface $reporting, \Magento\Framework\Api\Search\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\InventoryApi\Api\SourceRepositoryInterface $sourceRepository, \Magento\Ui\DataProvider\SearchResultFactory $searchResultFactory, \Magento\Backend\Model\Session $session, array $meta = [], array $data = [], ?\Magento\Ui\DataProvider\Modifier\PoolInterface $pool = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $reporting, $searchCriteriaBuilder, $request, $filterBuilder, $sourceRepository, $searchResultFactory, $session, $meta, $data, $pool);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchResult()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSearchResult');
        return $pluginInfo ? $this->___callPlugins('getSearchResult', func_get_args(), $pluginInfo) : parent::getSearchResult();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName();
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryFieldName');
        return $pluginInfo ? $this->___callPlugins('getPrimaryFieldName', func_get_args(), $pluginInfo) : parent::getPrimaryFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequestFieldName');
        return $pluginInfo ? $this->___callPlugins('getRequestFieldName', func_get_args(), $pluginInfo) : parent::getRequestFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMeta');
        return $pluginInfo ? $this->___callPlugins('getMeta', func_get_args(), $pluginInfo) : parent::getMeta();
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldSetMetaInfo($fieldSetName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldSetMetaInfo');
        return $pluginInfo ? $this->___callPlugins('getFieldSetMetaInfo', func_get_args(), $pluginInfo) : parent::getFieldSetMetaInfo($fieldSetName);
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldsMetaInfo($fieldSetName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldsMetaInfo');
        return $pluginInfo ? $this->___callPlugins('getFieldsMetaInfo', func_get_args(), $pluginInfo) : parent::getFieldsMetaInfo($fieldSetName);
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldMetaInfo($fieldSetName, $fieldName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldMetaInfo');
        return $pluginInfo ? $this->___callPlugins('getFieldMetaInfo', func_get_args(), $pluginInfo) : parent::getFieldMetaInfo($fieldSetName, $fieldName);
    }

    /**
     * {@inheritdoc}
     */
    public function addFilter(\Magento\Framework\Api\Filter $filter)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFilter');
        return $pluginInfo ? $this->___callPlugins('addFilter', func_get_args(), $pluginInfo) : parent::addFilter($filter);
    }

    /**
     * {@inheritdoc}
     */
    public function addOrder($field, $direction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrder');
        return $pluginInfo ? $this->___callPlugins('addOrder', func_get_args(), $pluginInfo) : parent::addOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function setLimit($offset, $size)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLimit');
        return $pluginInfo ? $this->___callPlugins('setLimit', func_get_args(), $pluginInfo) : parent::setLimit($offset, $size);
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchCriteria()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSearchCriteria');
        return $pluginInfo ? $this->___callPlugins('getSearchCriteria', func_get_args(), $pluginInfo) : parent::getSearchCriteria();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigData');
        return $pluginInfo ? $this->___callPlugins('getConfigData', func_get_args(), $pluginInfo) : parent::getConfigData();
    }

    /**
     * {@inheritdoc}
     */
    public function setConfigData($config)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConfigData');
        return $pluginInfo ? $this->___callPlugins('setConfigData', func_get_args(), $pluginInfo) : parent::setConfigData($config);
    }
}
