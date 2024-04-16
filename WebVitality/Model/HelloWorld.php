<?php

namespace Ahmed\WebVitality\Model;

use Ahmed\WebVitality\Api\HelloWorldInterface;

class HelloWorld implements HelloWorldInterface
{
    /**
     * Get hello world message
     *
     * @return string
     */
    public function getMessage()
    {
        return 'Hello World';
    }
}
