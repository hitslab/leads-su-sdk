<?php

namespace Hitslab\LeadsSuSDK\Exception;

class SdkException extends LeadsSuException
{
    public function __construct(string $message = "", \Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}