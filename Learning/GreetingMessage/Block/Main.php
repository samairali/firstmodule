<?php
namespace Learning\GreetingMessage\Block;
  
class Main extends \Magento\Framework\View\Element\Template
{   
    protected $_testFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory
    )
    {
        $this->_testFactory = $testFactory;
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
        $test = $this->_testFactory->create();
        $test->loadByTitle('Test Title');
        $this->setTestModel($test);
         
    }
}