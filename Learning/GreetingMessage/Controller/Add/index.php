<?php
namespace Learning\GreetingMessage\Controller\Add;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
 
class Index extends Action
{
    public function execute()
	{
            $name = $this->getRequest()->getPostValue("name");
            $item = $this->_objectManager->create("Learning\GreetingMessage\Model\Data");
            $item->setMessage($name);
            $item->save();
            $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $redirect->setUrl($this->_redirect->getRefererUrl());
            return $redirect;
	}
}