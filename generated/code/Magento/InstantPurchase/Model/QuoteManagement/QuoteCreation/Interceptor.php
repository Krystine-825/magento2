<?php
namespace Magento\InstantPurchase\Model\QuoteManagement\QuoteCreation;

/**
 * Interceptor class for @see \Magento\InstantPurchase\Model\QuoteManagement\QuoteCreation
 */
class Interceptor extends \Magento\InstantPurchase\Model\QuoteManagement\QuoteCreation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\QuoteFactory $quoteFactory)
    {
        $this->___init();
        parent::__construct($quoteFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function createQuote(\Magento\Store\Model\Store $store, \Magento\Customer\Model\Customer $customer, \Magento\Customer\Model\Address $shippingAddress, \Magento\Customer\Model\Address $billingAddress) : \Magento\Quote\Model\Quote
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createQuote');
        return $pluginInfo ? $this->___callPlugins('createQuote', func_get_args(), $pluginInfo) : parent::createQuote($store, $customer, $shippingAddress, $billingAddress);
    }
}
