<?php


namespace Hitslab\LeadsSuSDK\Response;


use Hitslab\LeadsSuSDK\Request\AbstractCollectionRequest;

class IterableResponse implements \Iterator
{
    /**
     * @var AbstractCollectionRequest
     */
    private $request;

    /**
     * @var int
     */
    private $key;

    private $itemsOnPageCount;
    private $itemsTotalCount;
    private $loadedPageNumber;
    private $loadedPageData;
    private $loadedPageDataCurrent = 0;

    public function __construct(AbstractCollectionRequest $request)
    {
        $this->request = $request;
    }

    /**
     * @return mixed
     * @throws \Hitslab\LeadsSuSDK\Exception\ApiErrorException
     * @throws \Hitslab\LeadsSuSDK\Exception\BadResponseException
     * @throws \Hitslab\LeadsSuSDK\Exception\SdkException
     */
    public function current()
    {
        $keyOnPageNumber = (int)ceil(($this->key + 1) / $this->itemsOnPageCount);
        $this->loadPage($keyOnPageNumber);

        return $this->loadedPageData[$this->loadedPageDataCurrent];
    }

    public function next()
    {
        $this->key++;
        $this->loadedPageDataCurrent++;
    }

    public function key()
    {
        return $this->key;
    }

    public function valid()
    {
        return $this->key < $this->itemsTotalCount;
    }

    /**
     * @throws \Hitslab\LeadsSuSDK\Exception\ApiErrorException
     * @throws \Hitslab\LeadsSuSDK\Exception\BadResponseException
     * @throws \Hitslab\LeadsSuSDK\Exception\SdkException
     */
    public function rewind()
    {
        $this->key = 0;
        $this->loadPage(1);
    }

    /**
     * @param $pageNumber
     * @throws \Hitslab\LeadsSuSDK\Exception\ApiErrorException
     * @throws \Hitslab\LeadsSuSDK\Exception\BadResponseException
     * @throws \Hitslab\LeadsSuSDK\Exception\SdkException
     */
    private function loadPage($pageNumber)
    {
        if ($pageNumber === $this->loadedPageNumber) {
            return;
        }

        $this->itemsOnPageCount = $this->request->getLimit();

        $offset = ($pageNumber-1) * $this->itemsOnPageCount;
        $response = $this->request
            ->offset($offset)
            ->notIterable()
            ->request();

        $this->loadedPageNumber = $pageNumber;
        $this->loadedPageData = $response->data;
        $this->itemsTotalCount = $response->count;

        $this->loadedPageDataCurrent = 0;
    }
}