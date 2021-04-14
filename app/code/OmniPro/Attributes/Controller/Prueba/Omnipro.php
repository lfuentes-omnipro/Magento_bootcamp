<?php
namespace OmniPro\Atributo\Controller\Prueba;

use \Magento\Framework\App\Action\HttpGetActionInterface;

class Omnipro implements HttpGetActionInterface
{
    protected $_pageFactory;
    /**
     * Omnipro constructor
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */

    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        //return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->_pageFactory->create();
    }
}