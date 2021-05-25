<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace DevGabriel\Individual\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for Seller search results.
 * @api
 * @since 100.0.2
 */
interface SellerSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get pages list.
     *
     * @return \DevGabriel\Individual\Api\Data\SellerInterface[]
     */
    public function getItems();

    /**
     * Set pages list.
     *
     * @param \DevGabriel\Individual\Api\Data\SellerInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
