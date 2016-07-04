<?php

namespace Imartynyuk\Office\Model\ResourceModel\Department;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Imartynyuk\Office\Model\Department',
            'Imartynyuk\Office\Model\ResourceModel\Department'
        );
    }
}