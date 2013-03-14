<?php
class FireGento_GermanSetup_Model_Source_Tax_DynamicType
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $helper = Mage::helper('germansetup');
        return array(
            array(
                'value' => 0,
                'label' => $helper->__('Off (Use above tax class)')
            ),
            array(
                'value' => FireGento_GermanSetup_Model_Tax_Config::USE_HIGHEST_TAX_ON_PRODUCTS,
                'label' => $helper->__('Use the highest product tax')
            ),
            array(
                'value' => FireGento_GermanSetup_Model_Tax_Config::USE_TAX_DEPENDING_ON_PRODUCT_VALUES,
                'label' => $helper->__('Use the tax rate of products that make up the biggest amount')
            ),
            array(
                'value' => FireGento_GermanSetup_Model_Tax_Config::USE_PROPORTIONALLY_MIXED_TAX,
                'label' => $helper->__('Use mixed tax rates (in proportion to product value)')
            ),
        );
    }
}
