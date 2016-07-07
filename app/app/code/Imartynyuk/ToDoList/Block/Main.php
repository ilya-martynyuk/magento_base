<?php

namespace Imartynyuk\ToDoList\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Imartynyuk\ToDoList\Model\ToDoItemFactory;

class Main extends Template
{
    protected $toDoFactory;

    public function __construct(Context $context, ToDoItemFactory $toDoFactory)
    {
        $this->toDoFactory = $toDoFactory;
        parent::__construct($context);
    }

    protected function _prepareLayout()
    {
        $toDoModel = $this
            ->toDoFactory
            ->create()
        ;

        $toDoCollection = $toDoModel
            ->getCollection()
        ;

        $this->setToDoList($toDoCollection);
    }
}