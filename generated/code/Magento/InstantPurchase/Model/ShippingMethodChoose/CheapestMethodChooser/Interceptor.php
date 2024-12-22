<?php
namespace Magento\InstantPurchase\Model\ShippingMethodChoose\CheapestMethodChooser;

/**
 * Interceptor class for @see \Magento\InstantPurchase\Model\ShippingMethodChoose\CheapestMethodChooser
 */
class Interceptor extends \Magento\InstantPurchase\Model\ShippingMethodChoose\CheapestMethodChooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\Data\ShippingMethodInterfaceFactory $shippingMethodFactory, \Magento\InstantPurchase\Model\ShippingMethodChoose\CarrierFinder $carrierFinder)
    {
        $this->___init();
        parent::__construct($shippingMethodFactory, $carrierFinder);
    }

    /**
     * {@inheritdoc}
     */
    public function choose(\Magento\Customer\Model\Address $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'choose');
        return $pluginInfo ? $this->___callPlugins('choose', func_get_args(), $pluginInfo) : parent::choose($address);
    }
}
