<?php

namespace Imartynyuk\ToDoList\Model\ResourceModel\ToDoItem;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Imartynyuk\ToDoList\Model\ToDoItem', 'Imartynyuk\ToDoList\Model\ResourceModel\ToDoItem');
    }
}