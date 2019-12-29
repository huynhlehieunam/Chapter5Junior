<?php
namespace Magenest\CustomEav\Ui\DataProvider\Product;
class AddDumpTextToCollection implements \Magento\Ui\DataProvider\AddFieldToCollectionInterface
{
    public function addField(\Magento\Framework\Data\Collection $collection, $field, $alias = null)
    {
        $collection->joinField('dump_text', 'cataloginventory_stock_item', 'manage_stock', 'product_id=entity_id', null, 'left');
    }
}