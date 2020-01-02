<?php

namespace Magenest\Rules\Model\ResourceModel\Rule;

use Magenest\Rules\Model\Rule;

/**
 * Class Collection
 * @package Magenest\Rules\Model\ResourceModel\Rule
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{


    protected function _construct()
    {
        $this->_init(Rule::class, \Magenest\Rules\Model\ResourceModel\Rule::class);
    }

}
