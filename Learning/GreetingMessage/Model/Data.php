<?php
 
 
namespace Learning\GreetingMessage\Model;
	 
use Magento\Framework\Model\AbstractModel;
	 
class Data extends AbstractModel
{	
    protected function _construct()
    {
        $this->_init('Learning\GreetingMessage\Model\ResourceModel\Data');
    }
}