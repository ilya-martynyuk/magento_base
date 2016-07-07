<?php

namespace Imartynyuk\ToDoList\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

use Imartynyuk\ToDoList\Api\ToDoItemInterface;

class ToDoItem extends AbstractModel implements IdentityInterface, ToDoItemInterface
{
    const CACHE_TAG = 'imartynyuk_todolist_item';

    protected function _construct()
    {
        $this->_init('Imartynyuk\ToDoList\Model\ResourceModel\ToDoItem');
    }

    public function getIdentities()
    {
        return [self::CAHE_TAG . '_' . $this->getId()];
    }
}