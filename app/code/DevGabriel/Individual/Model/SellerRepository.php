<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DevGabriel\Individual\Model;


use DevGabriel\Individual\Api\Data\SellerInterface;
use DevGabriel\Individual\Api\Data\SellerInterfaceFactory;
use DevGabriel\Individual\Api\Data\SellerSearchResultsInterface;
use DevGabriel\Individual\Api\Data\SellerSearchResultsInterfaceFactory;
use DevGabriel\Individual\Api\SellerRepositoryInterface;
use DevGabriel\Individual\Model\Seller;
use DevGabriel\Individual\Model\SellerSearchResults;
use DevGabriel\Individual\Model\ResourceModel\Seller as SellerResourceModel;
use DevGabriel\Individual\Model\ResourceModel\Seller\CollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;
use Magento\Framework\Exception\AbstractAggregateException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\EntityManager\HydratorInterface;

class SellerRepository implements \DevGabriel\Individual\Api\SellerRepositoryInterface
{
    private $collectionFactory;

    private $sellerInterfaceFactory;

    private $resourceModel;

    private $collectionProcessor;

    private $hydrator;

    private $sellerSearchResultsInterfaceFactory;

    public function __construct(
        CollectionFactory $collectionFactory,
        SellerInterfaceFactory $sellerInterfaceFactory,
        SellerResourceModel $resourceModel,
        CollectionProcessor $collectionProcessor,
        HydratorInterface $hydrator,
        SellerSearchResultsInterfaceFactory $sellerSearchResultsInterfaceFactory
    ){
        $this->collectionFactory = $collectionFactory;
        $this->sellerInterfaceFactory = $sellerInterfaceFactory;
        $this->resourceModel = $resourceModel;
        $this->collectionProcessor = $collectionProcessor;
        $this->hydrator = $hydrator;
        $this->sellerSearchResultsInterfaceFactory = $sellerSearchResultsInterfaceFactory;
    }
    public function save(\DevGabriel\Individual\Api\Data\SellerInterface $seller)
    {
        if ($seller->getId() && $seller instanceof Seller) {
            $seller = $this->hydrator->hydrate($this->getById($seller->getId()), $this->hydrator->extract($seller));
        }
        try{
            $this->resourceModel->save($seller);
        }catch(\Exception $exception){
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $seller;
    }

    public function getById($sellerId)
    {
        $seller = $this->sellerInterfaceFactory->create();
        $this->resourceModel->load($seller,$sellerId);
        if(!$seller->getId()){
            throw new NoSuchEntityException(__('Não foi encontrado vendedores com este ID "%1".',$sellerId));
        }
        return $seller;
    }

    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();
        $this->collectionProcessor->process($searchCriteria,$collection);
        $searchResults = $this->sellerSearchResultsInterfaceFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }
    public function delete(\DevGabriel\Individual\Api\Data\SellerInterface $seller)
    {
        try{
            $this->resourceModel->delete($seller);
        }catch(\Exception $exception){
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    public function deleteById($sellerId)
    {
        return $this->delete($this->getById($sellerId));
    }
}

