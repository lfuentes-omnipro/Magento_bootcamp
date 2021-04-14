<?php
namespace OmniPro\DataPatchTest\Setup\Patch\Data;

use Dotdigitalgroup\Email\Block\Adminhtml\Config\Report\Catalog;
use Magento\BundleGraphQl\Model\Resolver\Options\Label;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\View\Design\FileResolution\Fallback\Resolver\Alternative;
use Magento\SalesRule\Block\Adminhtml\Promo\Quote\Edit\Tab\Coupons\Grid\Column\Renderer\Used;

class AddTextAttribute implements DataPatchInterface{

    /**
     * @param \Magento\Framework\Setup\ModuleDataSetupInterface
     */
    private $moduleDataSetup;
    /**
     * @param \Magento\Eav\Setup\EavSetupFactory
     */

     private $eavSetupFactory;

     public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup,
        \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory
     ){
        $this->moduleDataSetup =$moduleDataSetup;
        $this->eavSetupFactory =$eavSetupFactory;    
     }

     public function apply(){
         $eavSetup = $this ->eavSetupFactory->create(['setup' =>$this->moduleDataSetup]);

         $eavSetup->addAttribute('catalog_product','alternative_capacity', [
            'type'  => 'text',
            'Label' =>'Alternative capacity',
            'input' => 'text',
            'used_in_product_listing' => true,
            'user_defined' => true
         ]);

         $eavSetup-> addAttributeToGroup('Catalog_product' ,$eavSetup->getAttributeSetId('Catalog_product','bag'), 'Design', 'alternative_capacity', 5);
     }
     public function getAliases()
     {
         return [];

     }
     public static function getDependencies(){
         return [];
     }
}
