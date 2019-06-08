<?php


namespace Hitslab\LeadsSuSDK\Request;

use Hitslab\LeadsSuSDK\Response\OffersResponse;

/**
 * Получение списка офферов, подключенных к моим площадкам
 *
 * Документация https://webmaster.leads.su/tools/api/offers#actionConnectedPlatforms-detail
 */
class ConnectedOffersRequest extends AbstractListRequest
{
    protected $object = "offers";
    protected $method = "connectedPlatforms";

    /**
     * ID Оффера
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
     * Добавить в отчет информацию по Геотаргетингу
     *
     * @param bool $value
     * @return $this
     */
    public function addGeo(bool $value = true)
    {
        $this->requestData['geo'] = (int)$value;
        return $this;
    }

    /**
     * Добавить в отчет информацию по дополнительной информации оффера
     *
     * @param bool $value
     * @return $this
     */
    public function addExtendedFields(bool $value = true)
    {
        $this->requestData['extendedFields'] = (int)$value;
        return $this;
    }

    /**
     * Массив ID Категорий. Получить ID категории можно из справочников.
     *
     * @param array $values
     * @return $this
     */
    public function categories(array $values)
    {
        $this->requestData['categories'] = $values;
        return $this;
    }

    /**
     * Массив ID Трафиков. Получить ID типа трафика можно из справочников.
     *
     * @param array $values
     * @return $this
     */
    public function trafficTypes(array $values)
    {
        $this->requestData['traffic_types'] = $values;
        return $this;
    }

    /**
     * ID Платформы. Получить ID платформы можно в личном кабинете в списке площадок
     *
     * @param $values
     * @return $this
     */
    public function platformId($values)
    {
        $this->requestData['platform_id'] = $values;
        return $this;
    }

    public function getResponseClass()
    {
        return OffersResponse::class;
    }

    /**
     * @return object|\Hitslab\LeadsSuSDK\Response\OffersResponse
     * @throws \Hitslab\LeadsSuSDK\Exception\ApiErrorException
     * @throws \Hitslab\LeadsSuSDK\Exception\BadResponseException
     * @throws \Hitslab\LeadsSuSDK\Exception\SdkException
     */
    public function request()
    {
        return parent::request();
    }
}