<?php


namespace Hitslab\LeadsSuSDK\Exception;


class ApiErrorException extends LeadsSuException
{
    private $type;
    private $params;

    public function __construct(string $message = "", string $type = null, $params = [], int $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->type = $type;
        $this->params = $params;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getParams()
    {
        return $this->params;
    }
}