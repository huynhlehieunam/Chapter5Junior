<?php

namespace Magenest\Rules\Model\Cache;

use Magento\Framework\App\Cache\Type\FrontendPool;
use Magento\Framework\Cache\Frontend\Decorator\TagScope;

class Rule extends TagScope
{
    const CACHE_ID = 'rule';
    const CACHE_TAG = 'RULE';

    public function __construct(FrontendPool $frontendPool)
    {
        parent::__construct($frontendPool->get(self::CACHE_ID), self::CACHE_TAG);
    }
}
