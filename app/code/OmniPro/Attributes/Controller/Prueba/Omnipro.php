<?
namespace OmniPro\Attributes\Controller\Prueba;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;
use Magento\Framework\View\PageFactory;


class OmniPro implements HttpGetActionInterface
{

/**
 *  @var \Magento\Framework\View\Result\PageFactory

 */
protected $_pageFactory;
/**
 * @param \Magento\Framework\Action\Context $context
 */
public function __constructor (
    \Magento\Framework\app\Action\Context $context,
    \Magento\Framework\View\Result\PageFaactory $pageFactory
)
{
    $this-> pageFactory = $pageFactory;
    //return parent::__construct($contest);

}
}
