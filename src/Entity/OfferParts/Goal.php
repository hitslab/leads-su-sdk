<?php


namespace Hitslab\LeadsSuSDK\Entity\OfferParts;


class Goal
{
    /**
     * ID цели
     *
     * @var string
     */
    public $id;

    /**
     * Название цели
     *
     * @var string
     */
    public $name;

    /**
     * Описание цели
     *
     * @var string
     */
    public $description;

    /**
     * Тип выплат по цели
     * @see \Hitslab\LeadsSuSDK\Entity\Offer::AVAILABLE_PAYOUT_TYPES
     *
     * @var string
     */
    public $payoutType;

    /**
     * Выплата по цели
     *
     * @var string
     */
    public $payout;

    /**
     * Процент выплат от суммы сделки цели
     *
     * @var string
     */
    public $payoutPercent;

    /**
     * Протокол цели
     * @see \Hitslab\LeadsSuSDK\Entity\Offer::AVAILABLE_PROTOCOLS
     *
     * @var string
     */
    public $protocol;

    /**
     * Автоматическое подтверждение конверсии
     *
     * @var string
     */
    public $approveConversions;

    /**
     * Завершение транзакции при создании конверсии
     *
     * @var string
     */
    public $isEndPoint;
}