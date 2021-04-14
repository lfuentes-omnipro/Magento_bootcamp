<?php
namespace OmniPro\Prueba\viewModel;

class AttributeViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @param \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**@param \Magento\Framework\App\Config\ScopeConfigInterface
    private $scopeConfig;  */

    /**
     * @param OmniPro\Attributes\Helper\Data
     */
    private $helperData;


    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \OmniPro\Attributes\Helper\Data $helperData
        

    /**
     * \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */    

    )
    {
        $this->storeManager = $storeManager;
        $this->helperData = $helperData;
    /**
     *$this->scopeConfig = $scopeConfig
     */    
    }

    public function getConfig(){
        $id = $this->storeManager->getStore()->getId();
        $config  =$this->helperData->getOmniproField($id);

       /**
        * $config = $this->scopeConfig->getValue("omniprosection/omniprogroup/omniprofield",
        *\Magento\Store\Model\ScopeInterface::SCOPE_STORE, 
        *$id);
        */ 
        return $config;
    }
}