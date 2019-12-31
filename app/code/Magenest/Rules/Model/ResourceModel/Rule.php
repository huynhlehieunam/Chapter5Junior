<?php

namespace Magenest\Rules\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

/**
 * Class Rule
 * @package Magenest\Rules\Model\ResourceModel
 */
class Rule extends AbstractDb
{
    /**
     *
     */
    const   TABLE_NAME = 'magenest_rules';
    /**
     *
     */
    const   INDEX_NAME = 'id';

    /**
     * Rule constructor.
     * @param Context $context
     */
    public function __construct(
        Context $context
    )
    {
        parent::__construct($context);
    }

    /**
     *
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::INDEX_NAME);
    }
}
