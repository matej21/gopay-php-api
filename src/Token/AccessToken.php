<?php

namespace GoPay\Token;

class AccessToken
{
    /** @var \DateTime */
    public $expirationDate;
    /** @var string */
    public $token = '';

    public function isExpired()
    {
        return $this->token == '' || $this->expirationDate < (new \DateTime);
    }
}
