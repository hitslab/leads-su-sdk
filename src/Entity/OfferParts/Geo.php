<?php


namespace Hitslab\LeadsSuSDK\Entity\OfferParts;


class Geo
{
    /**
     * Включен ли Геотаргетинг
     *
     * @var bool
     */
    public $enable;

    /**
     * Список стран
     *
     * @var GeoCountry[]
     */
    public $countries = [];
}