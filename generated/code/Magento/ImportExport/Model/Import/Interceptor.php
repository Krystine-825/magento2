<?php
namespace Magento\ImportExport\Model\Import;

/**
 * Interceptor class for @see \Magento\ImportExport\Model\Import
 */
class Interceptor extends \Magento\ImportExport\Model\Import implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem $filesystem, \Magento\ImportExport\Helper\Data $importExportData, \Magento\Framework\App\Config\ScopeConfigInterface $coreConfig, \Magento\ImportExport\Model\Import\ConfigInterface $importConfig, \Magento\ImportExport\Model\Import\Entity\Factory $entityFactory, \Magento\ImportExport\Model\ResourceModel\Import\Data $importData, \Magento\ImportExport\Model\Export\Adapter\CsvFactory $csvFactory, \Magento\Framework\HTTP\Adapter\FileTransferFactory $httpFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\ImportExport\Model\Source\Import\Behavior\Factory $behaviorFactory, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\ImportExport\Model\History $importHistoryModel, \Magento\Framework\Stdlib\DateTime\DateTime $localeDate, array $data = [], ?\Magento\Framework\Message\ManagerInterface $messageManager = null, ?\Magento\Framework\Math\Random $random = null, ?\Magento\ImportExport\Model\Source\Upload $upload = null, ?\Magento\ImportExport\Model\LocaleEmulatorInterface $localeEmulator = null)
    {
        $this->___init();
        parent::__construct($logger, $filesystem, $importExportData, $coreConfig, $importConfig, $entityFactory, $importData, $csvFactory, $httpFactory, $uploaderFactory, $behaviorFactory, $indexerRegistry, $importHistoryModel, $localeDate, $data, $messageManager, $random, $upload, $localeEmulator);
    }

    /**
     * {@inheritdoc}
     */
    public function importSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importSource');
        return $pluginInfo ? $this->___callPlugins('importSource', func_get_args(), $pluginInfo) : parent::importSource();
    }
}
