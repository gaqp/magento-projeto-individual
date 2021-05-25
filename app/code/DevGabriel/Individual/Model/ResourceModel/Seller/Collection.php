<?php


namespace DevGabriel\Individual\Model\ResourceModel\Seller;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function __construct(){
        $this->_init(\DevGabriel\Individual\Model\Seller::class,
        \DevGabriel\Individual\Model\ResourceModel\Seller::class);
    }
}
