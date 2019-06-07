<?php

namespace Hitslab\LeadsSuSDK\Response;

use Hitslab\LeadsSuSDK\Entity\Conversion;

class ConversionsResponse extends AbstractSuccessResponse
{
    /**
     * @var Conversion[]
     */
    public $data = [];
}