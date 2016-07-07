<?php

namespace Imartynyuk\ToDoList\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ToDoItem extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('imartynyuk_todolist_item', 'id');
    }
}