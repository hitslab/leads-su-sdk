<?php

namespace Hitslab\LeadsSuSDK\Request;

use Hitslab\LeadsSuSDK\Response\AbstractResponse;
use Hitslab\LeadsSuSDK\Response\IterableResponse;

abstract class AbstractCollectionRequest extends AbstractRequest
{
    public $iterable = false;

    public $requestData = [
        'offset' => 0,
        'limit' => 50
    ];

    /**
     * Смещение по записям
     *
     * @param $value
     * @return $this
     */
    public function offset($value)
    {
        $this->requestData['offset'] = $value;
        return $this;
    }

    /**
     * Максимальное количество записей на одной странице, в диапазоне от 1 до 500
     *
     * @param $value
     * @return $this
     */
    public function limit($value)
    {
        $this->requestData['limit'] = $value;
        return $this;
    }

    /**
     * Возвращать итератор
     *
     * @return $this
     */
    public function iterable()
    {
        $this->iterable = true;
        return $this;
    }

    /**
     * Не возвращать итератор
     *
     * @return $this
     */
    public function notIterable()
    {
        $this->iterable = false;
        return $this;
    }

    /**
     * Количество записей
     *
     * @return int
     */
    public function getLimit() {
        return $this->requestData['limit'];
    }

    /**
     * @return AbstractResponse|IterableResponse
     * @throws \Hitslab\LeadsSuSDK\Exception\ApiErrorException
     * @throws \Hitslab\LeadsSuSDK\Exception\BadResponseException
     * @throws \Hitslab\LeadsSuSDK\Exception\SdkException
     */
    public function request()
    {
        if ($this->iterable) {
            return new IterableResponse($this);
        }

        return parent::request();
    }
}