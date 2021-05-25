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

    public function setName($name)
    {
        return $this->setData(Seller::NAME,$name);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(Seller::NAME);
    }

    public function setCPF($cpf)
    {
        return $this->setData(Seller::CPF,$cpf);
    }
    /**
     * @return string
     */
    public function getCPF()
    {
        return $this->getData(Seller::CPF);
    }

    public function setStreet($street)
    {
        return $this->setData(Seller::STREET,$street);
    }
    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->getData(Seller::STREET);
    }

    public function setNeighborhood($neighborhood)
    {
        return $this->setData(Seller::NEIGHBORHOOD,$neighborhood);
    }
    /**
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->getData(Seller::NEIGHBORHOOD);
    }

    public function setCity($city)
    {
        return $this->setData(Seller::CITY,$city);
    }
    /**
     * @return string
     */
    public function getCity()
    {
        return $this->getData(Seller::CITY);
    }

    public function setState($state)
    {
        return $this->setData(Seller::STATE,$state);
    }
    /**
     * @return string
     */
    public function getState()
    {
        return $this->getData(Seller::STATE);
    }

    public function setPhone($phone)
    {
        return $this->setData(Seller::PHONE,$phone);
    }
    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->getData(Seller::PHONE);
    }
}
