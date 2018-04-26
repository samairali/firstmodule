<?php
namespace Excellence\Hello\Model\ResourceModel\Test;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Excellence\Hello\Model\Test','Excellence\Hello\Model\ResourceModel\Test');
    }
    public function loadByTitle($title){
        $table = $this->getMainTable();
        $where = $this->getConnection()->quoteInto("title = ?", $title);
        $sql = $this->getConnection()->select()->from($table,array('excellence_hello_test_id'))->where($where);
        $id = $this->getConnection()->fetchOne($sql);
        return $id;
    }
}