<?php


namespace Hitslab\LeadsSuSDK\Entity\OfferParts;


class GeoRegion
{
    /**
     * ID региона
     *
     * @var string
     */
    public $id;

    /**
     * Название региона
     *
     * @var string
     */
    public $name;

    /**
     * Код региона стандарта ISO 3166
     *
     * @var string
     */
    public $iso;

    /**
     * Статус региона
     *
     * @var string
     */
    public $status;

    /**
     * Код региона по КЛАДР
     *
     * @var string
     */
    public $kladrCode;

    /**
     * Список населенных пунктов
     *
     * @var GeoCities[]
     */
    public $cities = [];
}