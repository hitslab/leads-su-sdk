<?php


namespace Hitslab\LeadsSuSDK\Entity;


class Conversion
{
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';
    const STATUS_PENDING = 'pending';

    const AVAILABLE_STATUSES = [
        self::STATUS_APPROVED,
        self::STATUS_REJECTED,
        self::STATUS_PENDING
    ];

    const STATUS_NAMES = [
        self::STATUS_APPROVED => "одобрена",
        self::STATUS_REJECTED => "отклонена",
        self::STATUS_PENDING => "в ожидании"
    ];

    /**
     * ID конверсии
     *
     * @var int
     */
    public $id;

    /**
     * ID оффера
     *
     * @var int
     */
    public $offerId;

    /**
     * ID цели
     *
     * @var int
     */
    public $goalId;

    /**
     * ID площадки
     *
     * @var int
     */
    public $platformId;

    /**
     * ID анкеты, связанной с конверсией
     *
     * @var int
     */
    public $leadId;

    /**
     * Статус конверсии
     *
     * @see \Hitslab\LeadsSuSDK\Entity\Conversion::AVAILABLE_STATUSES
     *
     * @var string
     */
    public $status;

    /**
     * Дата создания конверсии в формате Y-m-d H:i:s
     *
     * @var string
     */
    public $created;

    /**
     * Заработок вебмастера
     *
     * @var string
     */
    public $payout;

    /**
     * IP конверсии
     *
     * @var string
     */
    public $ip;

    /**
     * Источник
     *
     * @var string
     */
    public $source;

    /**
     * SubID 1
     *
     * @var string
     */
    public $affSub1;

    /**
     * SubID 2
     *
     * @var string
     */
    public $affSub2;

    /**
     * SubID 3
     *
     * @var string
     */
    public $affSub3;

    /**
     * SubID 4
     *
     * @var string
     */
    public $affSub4;

    /**
     * SubID 5
     *
     * @var string
     */
    public $affSub5;

    /**
     * SubID Рекламодателя
     *
     * @var string
     */
    public $advSub;
}