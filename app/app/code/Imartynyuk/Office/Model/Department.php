<?php

namespace Imartynyuk\Office\Model;

class Department extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Imartynyuk\Office\Model\ResourceModel\Department');
    }
}