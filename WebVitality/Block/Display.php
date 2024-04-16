<?php

namespace Ahmed\WebVitality\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Display extends Template
{
    public function __construct(
        Context $context,
        array                                            $data = []
    )
    {
        parent::__construct($context, $data);
    }

    public function getTestData()
    {
        return "Hello World";
    }
}
