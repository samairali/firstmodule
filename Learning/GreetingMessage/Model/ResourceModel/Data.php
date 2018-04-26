<?php
	 
namespace Learning\GreetingMessage\Model\ResourceModel;
 
 
use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
	 
class Data extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('greeting_message', 'greeting_id');
        //$this->_init('greeting_message', 'message');
    }
}