<?php
namespace Learn1\Hey\controller\index;
use Magento\Framework\App\Action\Context ;
use Magento\Framework\View\Result\PageFactory;
  
class Index extends \Magento\Framework\App\Action\Action
{
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /**      * @param \Magento\Framework\App\Action\Context $context      */
    public function __construct(Context $context,
         PageFactory $pageFactory)     {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }
  
    /**
     * Blog Index, shows a list of recent blog posts.
     *
     * @return \Magento\Framework\View\Result\pageFactory
     */
    public function execute()
    {
        // echo "<h1>we have done it</h2>";
        $Page = $this->pageFactory->create();
        //$Page->getConfig()->getTitle()->prepend(__('ubold Hello World'));
        // $block = $Page->getLayout()
        //         ->createBlock('Ubold\Helloworld\Block\helloworld')
        //         ->setTemplate('Ubold_Helloworld::helloworld.phtml')
        //         ->toHtml();
        // $this->getResponse()->setBody($block);
        // $this->_view->loadLayout();
        // $this->_view->getLayout()->setTemplate('Ubold_Helloworld::helloworld.phtml');
        // $this->_view->renderLayout();
        return $Page;
    }
}