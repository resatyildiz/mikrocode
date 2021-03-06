<?php

namespace Iyzipay\Model;

use Iyzipay\Model\Mapper\ConnectBKMAuthMapper;
use Iyzipay\Options;
use Iyzipay\Request\RetrieveBKMAuthRequest;

class ConnectBKMAuth extends ConnectPayment
{
    private $token;
    private $callbackUrl;
    private $paymentStatus;

    public static function retrieve(RetrieveBKMAuthRequest $request, Options $options)
    {
        $rawResult = parent::httpClient()->post($options->getBaseUrl() . "/payment/iyziconnect/bkm/auth/detail", parent::getHttpHeaders($request, $options), $request->toJsonString());
        return ConnectBKMAuthMapper::create($rawResult)->jsonDecode()->mapConnectBKMAuth(new ConnectBKMAuth());
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
    }

    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
    }
}