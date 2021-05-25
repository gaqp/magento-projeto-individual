<?php


namespace DevGabriel\Individual\Model;


use Magento\Framework\Model\AbstractModel;

class Seller extends AbstractModel implements \DevGabriel\Individual\Api\Data\SellerInterface
{
    protected function _construct(){
        $this->_init(\DevGabriel\Individual\Model\ResourceModel\Seller::class);
    }

    public function getId()
    {
        return $this->getData(Seller::ID);
    }

    public function setName($NAME)
    {
        return $this->setData(Seller::NAME);
    }

    /**
     * @return string | null
     */
    public function getName()
    {
        return $this->getData(Seller::NAME);
    }

    public function setCPF($CPF)
    {
        return $this->setData(Seller::CPF);
    }
    /**
     * @return string | null
     */
    public function getCPF()
    {
        return $this->getData(Seller::CPF);
    }

    public function setStreet($STREET)
    {
        return $this->setData(Seller::STREET);
    }
    /**
     * @return string | null
     */
    public function getStreet()
    {
        return $this->getData(Seller::STREET);
    }

    public function setNeighborhood($NEIGHBORHOOD)
    {
        return $this->setData(Seller::NEIGHBORHOOD);
    }
    /**
     * @return string | null
     */
    public function getNeighborhood()
    {
        return $this->getData(Seller::NEIGHBORHOOD);
    }

    public function setCity($CITY)
    {
        return $this->setData(Seller::CITY);
    }
    /**
     * @return string | null
     */
    public function getCity()
    {
        return $this->getData(Seller::CITY);
    }

    public function setState($STATE)
    {
        return $this->setData(Seller::STATE);
    }
    /**
     * @return string | null
     */
    public function getState()
    {
        return $this->getData(Seller::STATE);
    }

    public function setPhone($PHONE)
    {
        return $this->setData(Seller::PHONE);
    }
    /**
     * @return string | null
     */
    public function getPhone()
    {
        return $this->getData(Seller::PHONE);
    }
}
