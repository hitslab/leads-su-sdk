<?php

namespace Hitslab\LeadsSuSDK\Entity;

use Hitslab\LeadsSuSDK\Entity\OfferParts\DetailStats;
use Hitslab\LeadsSuSDK\Entity\OfferParts\Geo;
use Hitslab\LeadsSuSDK\Entity\OfferParts\Goal;
use Hitslab\LeadsSuSDK\Entity\OfferParts\TrackingUrls;

class Offer
{
    const PROTOCOL_HTTP = 'http';
    const PROTOCOL_HTTPS = 'https';
    const PROTOCOL_HTTP_IMG = 'http_img';
    const PROTOCOL_HTTPS_IMG = 'https_img';
    const PROTOCOL_SERVER = 'server';

    const AVAILABLE_PROTOCOLS = [
        self::PROTOCOL_HTTP,
        self::PROTOCOL_HTTPS,
        self::PROTOCOL_HTTP_IMG,
        self::PROTOCOL_HTTPS_IMG,
        self::PROTOCOL_SERVER,
    ];

    const PAYOUT_TYPE_CPA_FIX = 'cpa_fix';
    const PAYOUT_TYPE_CPA_PERCENT = 'cpa_percent';

    const AVAILABLE_PAYOUT_TYPES = [
        self::PAYOUT_TYPE_CPA_FIX,
        self::PAYOUT_TYPE_CPA_PERCENT,
    ];

    const STAT_UPDATE_TYPE_PER_DAY = 'per day';
    const STAT_UPDATE_TYPE_PER_WEEK = 'per week';
    const STAT_UPDATE_TYPE_TWICE_A_WEEK = 'twice a week';
    const STAT_UPDATE_TYPE_PER_MONTH = 'per month';
    const STAT_UPDATE_TYPE_TWICE_A_MONTH = 'twice a month';
    const STAT_UPDATE_TYPE_AUTO_APPROVE = 'autoapprove';
    const STAT_UPDATE_TYPE_SYNC = 'sync';
    const STAT_UPDATE_TYPE_UNDEFINED = 'undefined';

    const AVAILABLE_STAT_UPDATE_TYPES = [
        self::STAT_UPDATE_TYPE_PER_DAY,
        self::STAT_UPDATE_TYPE_PER_WEEK,
        self::STAT_UPDATE_TYPE_TWICE_A_WEEK,
        self::STAT_UPDATE_TYPE_PER_MONTH,
        self::STAT_UPDATE_TYPE_TWICE_A_MONTH,
        self::STAT_UPDATE_TYPE_AUTO_APPROVE,
        self::STAT_UPDATE_TYPE_SYNC,
        self::STAT_UPDATE_TYPE_UNDEFINED,
    ];

    const STAT_UPDATE_TYPE_NAMES = [
        self::STAT_UPDATE_TYPE_PER_DAY => 'каждый день',
        self::STAT_UPDATE_TYPE_PER_WEEK => 'один раз в неделю',
        self::STAT_UPDATE_TYPE_TWICE_A_WEEK => 'два раза в неделю',
        self::STAT_UPDATE_TYPE_PER_MONTH => 'один раз в месяц',
        self::STAT_UPDATE_TYPE_TWICE_A_MONTH => 'два раза в месяц',
        self::STAT_UPDATE_TYPE_AUTO_APPROVE => 'автоаппрув',
        self::STAT_UPDATE_TYPE_SYNC => 'автосинхронизация',
        self::STAT_UPDATE_TYPE_UNDEFINED => 'неопределенный тип',
    ];

    /**
     * ID Оффера
     *
     * @var int
     */
    public $id;

    /**
     * Название оффера
     *
     * @var string
     */
    public $name;

    /**
     * Список показателей эффективности оффера в зависимости от источника конверсий
     *
     * @var DetailStats
     */
    public $detailStats;

    /**
     * Условия рекламодателя
     *
     * @var string
     */
    public $siteCondition;

    /**
     * Описание оффера
     *
     * @var string
     */
    public $description;

    /**
     * Url логотипа
     *
     * @var string
     */
    public $logo;

    /**
     * Наличие API у оффера
     *
     * @var bool
     */
    public $apiExist;

    /**
     * Список категорий
     *
     * @var array
     */
    public $categories = [];

    /**
     * Список типов трафика
     *
     * @var array
     */
    public $trafficTypes = [];

    /**
     * Список целей оффера
     *
     * @var Goal[]
     */
    public $goals = [];

    /**
     * Информация по Геотаргетингу
     *
     * @var Geo
     */
    public $geo;

    /**
     * Адрес посадочной страницы оффера
     *
     * @var string
     */
    public $offerUrl;

    /**
     * Протокол оффера
     * @see \Hitslab\LeadsSuSDK\Entity\Offer::AVAILABLE_PROTOCOLS
     *
     * @var string
     */
    public $protocol;

    /**
     * Тип выплат
     * @see \Hitslab\LeadsSuSDK\Entity\Offer::AVAILABLE_PAYOUT_TYPES
     *
     * @var string
     */
    public $payoutType;

    /**
     * Доход вебмастера
     *
     * @var float
     */
    public $payout;

    /**
     * Процент от суммы сделки
     *
     * @var float
     */
    public $payoutPercent;

    /**
     * Автоматическое подтверждение конверсии
     *
     * @var int
     */
    public $approveConversions;

    /**
     * Завершение транзакции при создании конверсии
     *
     * @var int
     */
    public $isEndPoint;

    /**
     * Время жизни сессии
     *
     * @var int
     */
    public $sessionHours;

    /**
     * Дата изменения оффера
     *
     * @var string
     */
    public $modified;

    /**
     * Дата последнего обновления статистики
     *
     * @var string
     */
    public $statUpdateLast;

    /**
     * Дата следующего обновления статистики
     *
     * @var string
     */
    public $statUpdateNext;

    /**
     * Тип обновления
     * @see \Hitslab\LeadsSuSDK\Entity\Offer::AVAILABLE_STAT_UPDATE_TYPES
     *
     * @var string
     */
    public $statUpdateType;

    /**
     * Дополнительная информация
     *
     * @var array
     */
    public $extendedFields = [];

    /**
     * Партнёрские ссылки
     *
     * @var TrackingUrls[]
     */
    public $trackingUrls = [];
}