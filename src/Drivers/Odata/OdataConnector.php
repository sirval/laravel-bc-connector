<?php

namespace BcConnector\LaravelBcConnector\Drivers\Odata;


class OdataConnector
{
    protected $client;

    public function __construct(array $config)
    {
        // $this->client = (new OdataClientBuilder($config))->build();
    }

    public function call($function, array $params = [])
    {
        // Assuming the OData client has a method to handle calls
        // return $this->client->call($function, $params);
    }
}