<?php
 
 
namespace Learning\GreetingMessage\Model\ResourceModel\Data;
 
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
 
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
	    'Learning\GreetingMessage\Model\Data',
	    'Learning\GreetingMessage\Model\ResourceModel\Data'
	);
    }
}