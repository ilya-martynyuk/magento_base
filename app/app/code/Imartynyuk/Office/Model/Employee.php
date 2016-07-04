<?php

namespace Imartynyuk\Office\Model;

class Employee extends \Magento\Framework\Model\AbstractModel
{
    const ENTITY = 'imartynyuk_office_employee';

    protected function _construct()
    {
        $this->_init('Imartynyuk\Office\Model\ResourceModel\Employee');
    }
}