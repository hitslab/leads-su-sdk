<?php


namespace Hitslab\LeadsSuSDK\Entity\OfferParts;


class DetailStatsData
{
    /**
     * Click-Through-Ratio. Источник конверсии - лендинг, трекер.
     *
     * @var float
     */
    public $otherCtr;

    /**
     * Conversion Rate. Источник конверсии - лендинг, трекер.
     *
     * @var float
     */
    public $otherCr;

    /**
     * Approval Rate (процент одобрения конверсий, полученных с лендинга, трекера).
     *
     * @var float
     */
    public $otherAr;

    /**
     * Earning Per Click (средний заработок в пересчете на один уникальный клик, источник конверсии - лендинг, трекер).
     *
     * @var float
     */
    public $otherEpc;

    /**
     * Earning Per Lead (средний заработок в пересчете на одну уникальную поставленную конверсию, источник конверсии - лендинг, трекер).
     *
     * @var float
     */
    public $otherEpl;

    /**
     * Application Approval Rate (процент одобрения анкет загруженных через файл).
     *
     * @var float
     */
    public $leadFileAar;

    /**
     * Earning Per Action (средний заработок в пересчёте на одну заполненную анкету, источник конверсии - загрузка через файл).
     *
     * @var float
     */
    public $leadFileEpa;

    /**
     * Distribution Rate (среднее количество созданных конверсий на анкету, источник конверсии - загрузка через файл).
     *
     * @var float
     */
    public $leadFileDr;

    /**
     *  Application Approval Rate (процент одобрения анкет загруженных через API).
     *
     * @var float
     */
    public $leadApiAar;

    /**
     * Earning Per Action (средний заработок в пересчёте на одну заполненную анкету, источник конверсии - API).
     *
     * @var float
     */
    public $leadApiEpa;

    /**
     * Distribution Rate (среднее количество созданных конверсий на анкету, источник конверсии - API).
     *
     * @var float
     */
    public $leadApiDr;

    /**
     * Application Approval Rate (процент одобрения анкет отправленных через JS-форму).
     *
     * @var float
     */
    public $leadFormAar;

    /**
     * Earning Per Action (средний заработок в пересчёте на одну отправленную анкету, заполненную через JS-форму).
     *
     * @var float
     */
    public $leadFormEpa;

    /**
     * Distribution Rate (среднее количество созданных конверсий на анкету, заполненную через JS-форму).
     *
     * @var float
     */
    public $leadFormDr;

    /**
     * Click-Through-Ratio Application (кликабельность JS-формы).
     *
     * @var float
     */
    public $leadFormCtra;

    /**
     * Conversion Rate Application (заполняемость JS-формы).
     *
     * @var float
     */
    public $leadFormCra;

    /**
     * Earning Per Impression Application (средний заработок с клиента, увидевшего JS-форму).
     *
     * @var float
     */
    public $leadFormEpia;

    /**
     * Earning Per Click Application (средний заработок с клиента, который начал заполнять JS-форму).
     *
     * @var float
     */
    public $leadFormEpca;
}