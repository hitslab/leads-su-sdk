<?php

namespace Hitslab\LeadsSuSDK\Request;

use Hitslab\LeadsSuSDK\Response\ConversionsResponse;

/**
 * Получение списка конверсий
 *
 * Документация https://webmaster.leads.su/tools/api/conversions
 */
class ConversionsRequest extends AbstractListRequest
{
    protected $object = "conversions";

    /**
     * ID Конверсии
     *
     * @param $value
     * @return $this
     */
    public function id($value)
    {
        $this->requestData['id'] = $value;
        return $this;
    }

    /**
     * Начальная дата в формате Y-m-d
     *
     * @param $value
     * @return $this
     */
    public function startDate($value)
    {
        $this->requestData['start_date'] = $value;
        return $this;
    }

    /**
     * Конечная дата в формате Y-m-d
     *
     * @param $value
     * @return $this
     */
    public function endDate($value)
    {
        $this->requestData['end_date'] = $value;
        return $this;
    }

    /**
     * ID оффера
     *
     * @param int $value
     * @return $this
     */
    public function offerId(int $value)
    {
        $this->requestData['offer_id'] = $value;
        return $this;
    }

    /**
     * ID цели
     *
     * @param int $value
     * @return $this
     */
    public function goalId(int $value)
    {
        $this->requestData['goal_id'] = $value;
        return $this;
    }

    /**
     * ID площадки
     *
     * @param int $value
     * @return $this
     */
    public function platformId(int $value)
    {
        $this->requestData['platform_id'] = $value;
        return $this;
    }

    /**
     * Статус конверсии.
     *
     * @see \Hitslab\LeadsSuSDK\Entity\Conversion::AVAILABLE_STATUSES
     *
     * @param $value
     * @return $this
     */
    public function status($value)
    {
        $this->requestData['status'] = $value;
        return $this;
    }

    /**
     * IP конверсии
     *
     * @param $value
     * @return $this
     */
    public function ip($value)
    {
        $this->requestData['ip'] = $value;
        return $this;
    }

    /**
     * Источник. Максимальная длина: 255 символов
     *
     * @param $value
     * @return $this
     */
    public function source($value)
    {
        $this->requestData['source'] = $value;
        return $this;
    }

    /**
     * SubID 1
     *
     * @param $value
     * @return $this
     */
    public function affSub1($value)
    {
        $this->requestData['aff_sub1'] = $value;
        return $this;
    }

    /**
     * SubID 2
     *
     * @param $value
     * @return $this
     */
    public function affSub2($value)
    {
        $this->requestData['aff_sub2'] = $value;
        return $this;
    }

    /**
     * SubID 3
     *
     * @param $value
     * @return $this
     */
    public function affSub3($value)
    {
        $this->requestData['aff_sub3'] = $value;
        return $this;
    }

    /**
     * SubID 4
     *
     * @param $value
     * @return $this
     */
    public function affSub4($value)
    {
        $this->requestData['aff_sub4'] = $value;
        return $this;
    }

    /**
     * SubID 5
     *
     * @param $value
     * @return $this
     */
    public function affSub5($value)
    {
        $this->requestData['aff_sub5'] = $value;
        return $this;
    }

    public function getResponseClass()
    {
        return ConversionsResponse::class;
    }

    /**
     * @return object|\Hitslab\LeadsSuSDK\Response\ConversionsResponse
     * @throws \Hitslab\LeadsSuSDK\Exception\ApiErrorException
     * @throws \Hitslab\LeadsSuSDK\Exception\BadResponseException
     * @throws \Hitslab\LeadsSuSDK\Exception\SdkException
     */
    public function request()
    {
        return parent::request();
    }
}