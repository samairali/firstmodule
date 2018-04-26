<?php
namespace Learning\GreetingMessage\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'mageplaza_helloworld_post';

	protected $_cacheTag = 'mageplaza_helloworld_post';

	protected $_eventPrefix = 'mageplaza_helloworld_post';

	protected function _construct()
	{
		$this->_init('Learning\GreetingMessage\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];


		return $values;
	}
	public function loadByTitle($title){
        if(!$title){
            $title = $this->getTitle();
            //random data logic. can be much more complex.
            //this is just example
        }
        $id = $this->getResource()->loadByTitle($title);
        return $this->load($id);
    }
}