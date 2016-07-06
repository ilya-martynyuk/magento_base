<?php

namespace Imartynyuk\HelloWorldMVVM\Block;

use Magento\Framework\View\Element\Template;

class Head extends Template
{
    public $assetRepository;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Magento\Framework\View\Asset\Repository $assetRepository
    ) {
        $this->assetRepository = $assetRepository;

        parent::__construct($context, $data);
    }
}