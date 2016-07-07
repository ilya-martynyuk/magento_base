<?php

namespace Imartynyuk\ToDoList\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        
        return parent::__construct($context);
    }
    
    public function execute()
    {
        $pageObject = $this->pageFactory->create();

        return $pageObject;
    }
}