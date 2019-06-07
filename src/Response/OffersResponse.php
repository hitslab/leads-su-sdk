<?php

namespace Hitslab\LeadsSuSDK\Response;

use Hitslab\LeadsSuSDK\Entity\Offer;

class OffersResponse extends AbstractSuccessResponse
{
    /**
     * @var Offer[]
     */
    public $data = [];
}