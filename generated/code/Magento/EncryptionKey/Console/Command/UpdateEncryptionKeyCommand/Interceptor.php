<?php
namespace Magento\EncryptionKey\Console\Command\UpdateEncryptionKeyCommand;

/**
 * Interceptor class for @see \Magento\EncryptionKey\Console\Command\UpdateEncryptionKeyCommand
 */
class Interceptor extends \Magento\EncryptionKey\Console\Command\UpdateEncryptionKeyCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Framework\App\CacheInterface $cache, \Magento\Framework\App\DeploymentConfig\Writer $writer, \Magento\Framework\Math\Random $random)
    {
        $this->___init();
        parent::__construct($encryptor, $cache, $writer, $random);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
