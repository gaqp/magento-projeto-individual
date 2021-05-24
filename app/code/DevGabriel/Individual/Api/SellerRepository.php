<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Api;
interface SellerRepository
{
    /**
     * Save page.
     *
     * @param \DevGabriel\Individual\Api\Data\SellerInterface $seller
     * @return \DevGabriel\Individual\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\DevGabriel\Individual\Api\Data\SellerInterface $seller);

    /**
     * Retrieve page.
     *
     * @param int $sellerId
     * @return \DevGabriel\Individual\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($sellerId);

    /**
     * Retrieve pages matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \DevGabriel\Individual\Api\Data\SellerSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete page.
     *
     * @param \DevGabriel\Individual\Api\Data\SellerInterface $seller
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\DevGabriel\Individual\Api\Data\SellerInterface $seller);

    /**
     * Delete page by ID.
     *
     * @param int $sellerId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($sellerId);}

