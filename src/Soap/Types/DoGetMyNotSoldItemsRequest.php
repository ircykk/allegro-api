<?php

namespace Ircykk\AllegroApi;

class DoGetMyNotSoldItemsRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var SortOptionsStruct $sortOptions
     */
    protected $sortOptions = null;

    /**
     * @var NotSoldFilterOptionsStruct $filterOptions
     */
    protected $filterOptions = null;

    /**
     * @var string $searchValue
     */
    protected $searchValue = null;

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @var ArrayOfLong $itemIds
     */
    protected $itemIds = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @var int $pageNumber
     */
    protected $pageNumber = null;

    /**
     * @param string $sessionId
     * @param SortOptionsStruct $sortOptions
     * @param NotSoldFilterOptionsStruct $filterOptions
     * @param string $searchValue
     * @param int $categoryId
     * @param ArrayOfLong $itemIds
     * @param int $pageSize
     * @param int $pageNumber
     */
    public function __construct($sessionId = null, $sortOptions = null, $filterOptions = null, $searchValue = null, $categoryId = null, $itemIds = null, $pageSize = null, $pageNumber = null)
    {
      $this->sessionId = $sessionId;
      $this->sortOptions = $sortOptions;
      $this->filterOptions = $filterOptions;
      $this->searchValue = $searchValue;
      $this->categoryId = $categoryId;
      $this->itemIds = $itemIds;
      $this->pageSize = $pageSize;
      $this->pageNumber = $pageNumber;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Ircykk\AllegroApi\DoGetMyNotSoldItemsRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return SortOptionsStruct
     */
    public function getSortOptions()
    {
      return $this->sortOptions;
    }

    /**
     * @param SortOptionsStruct $sortOptions
     * @return \Ircykk\AllegroApi\DoGetMyNotSoldItemsRequest
     */
    public function setSortOptions($sortOptions)
    {
      $this->sortOptions = $sortOptions;
      return $this;
    }

    /**
     * @return NotSoldFilterOptionsStruct
     */
    public function getFilterOptions()
    {
      return $this->filterOptions;
    }

    /**
     * @param NotSoldFilterOptionsStruct $filterOptions
     * @return \Ircykk\AllegroApi\DoGetMyNotSoldItemsRequest
     */
    public function setFilterOptions($filterOptions)
    {
      $this->filterOptions = $filterOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param string $searchValue
     * @return \Ircykk\AllegroApi\DoGetMyNotSoldItemsRequest
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return \Ircykk\AllegroApi\DoGetMyNotSoldItemsRequest
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemIds()
    {
      return $this->itemIds;
    }

    /**
     * @param ArrayOfLong $itemIds
     * @return \Ircykk\AllegroApi\DoGetMyNotSoldItemsRequest
     */
    public function setItemIds($itemIds)
    {
      $this->itemIds = $itemIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return \Ircykk\AllegroApi\DoGetMyNotSoldItemsRequest
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return \Ircykk\AllegroApi\DoGetMyNotSoldItemsRequest
     */
    public function setPageNumber($pageNumber)
    {
      $this->pageNumber = $pageNumber;
      return $this;
    }

}
