<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Api\Data;

/**
 * Represents physical storage, i.e. brick and mortar store or warehouse
 *
 * Used fully qualified namespaces in annotations for proper work of WebApi request parser
 *
 * @api
 */
interface SellerInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID = 'tps_seller_id';
    const NAME = 'tps_seller_name';
    const CPF = 'tps_seller_cpf';
    const STREET = 'tps_seller_street';
    const NEIGHBORHOOD = 'tps_seller_neighborhood';
    const CITY = 'tps_seller_city';
    const STATE = 'tps_seller_state';
    const PHONE = 'tps_seller_phone';


    /**
     * @return int | null
     */
    public function getId();

    /**
     * @param $name
     * @return null
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param $cpf
     * @return null
     */
    public function setCpf($cpf);

    /**
     * @return string
     */
    public function getCpf();

    /**
     * @param $street
     * @return null
     */
    public function setStreet($street);

    /**
     * @return string
     */
    public function getStreet();

    /**
     * @param $neighborhood
     * @return null
     */
    public function setNeighborhood($neighborhood);

    /**
     * @return string
     */
    public function getNeighborhood();

    /**
     * @param $city
     * @return null
     */
    public function setCity($city);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param $state
     * @return null
     */
    public function setState($state);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param $phone
     * @return null
     */
    public function setPhone($phone);

    /**
     * @return string
     */
    public function getPhone();

}
