<?php
namespace Learn\HelloWorld\Block;
use Magento\Framework\View\Element\Template;

class Main extends Template
{    
    public function getHelloWorldTxt()
    {
    	return parent::_prepareLayout();
    }
}