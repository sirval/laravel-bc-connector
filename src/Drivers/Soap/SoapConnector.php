<?php

namespace BcConnector\LaravelBcConnector\Drivers\Soap;

class SoapConnector
{
    protected $client;

    public function __construct(array $config)
    {
        $this->client = (new SoapClientBuilder($config))->build();
    }

    public function call($function, array $params = [])
    {
        return $this->client->__soapCall($function, [$params]);
    }
}   