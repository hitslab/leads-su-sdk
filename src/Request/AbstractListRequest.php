<?php


namespace Hitslab\LeadsSuSDK\Request;


abstract class AbstractListRequest extends AbstractRequest
{
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
}