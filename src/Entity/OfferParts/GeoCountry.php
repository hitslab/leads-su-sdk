<?php


namespace Hitslab\LeadsSuSDK\Entity\OfferParts;


class GeoCountry
{
    /**
     * ID страны
     *
     * @var string
     */
    public $id;

    /**
     * Название страны
     *
     * @var string
     */
    public $name;

    /**
     * Код страны стандарта ISO 3166-1 alpha-3
     *
     * @var string
     */
    public $iso;

    /**
     * Список регионов
     *
     * @var GeoRegion[]
     */
    public $regions = [];
}