<?php


namespace DevGabriel\Individual\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Seller extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('third_party_seller','tps_seller_id');
    }
}
