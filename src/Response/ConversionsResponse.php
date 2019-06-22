<?php

namespace Hitslab\LeadsSuSDK\Response;

use Hitslab\LeadsSuSDK\Entity\Conversion;

class ConversionsResponse extends AbstractResponse
{
    /**
     * @var Conversion[]
     */
    public $data = [];
}