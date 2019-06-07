<?php

namespace Hitslab\LeadsSuSDK\Response;

class AbstractSuccessResponse
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $code;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var array|object
     */
    public $data;
}