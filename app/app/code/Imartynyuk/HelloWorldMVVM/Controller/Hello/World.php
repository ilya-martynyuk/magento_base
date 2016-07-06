<?php

namespace Imartynyuk\HelloWorldMVVM\Controller\Hello;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;

class World extends Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;

        return parent::__construct($context);
    }

    public function execute()
    {
        //var_dump(__METHOD__);

        $pageObject = $this->pageFactory->create();

        return $pageObject;
    }
}