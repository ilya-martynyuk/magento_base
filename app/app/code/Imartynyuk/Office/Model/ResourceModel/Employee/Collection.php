<?php

namespace Imartynyuk\Office\Model\ResourceModel\Employee;

use Magento\Eav\Model\Entity\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Imartynyuk\Office\Model\Employee',
            'Imartynyuk\Office\Model\ResourceModel\Employee'
        );
    }
}