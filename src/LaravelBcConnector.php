<?php

namespace BcConnector\LaravelBcConnector;

use BcConnector\LaravelBcConnector\Drivers\Odata\OdataConnector;
use BcConnector\LaravelBcConnector\Drivers\Soap\SoapConnector;

class LaravelBcConnector
{
    protected $driver;

    public function __construct(array $config)
    {
        switch ($config['connection']) {
            case 'soap':
                $this->driver = new SoapConnector($config);
                break;
            case 'odata':
                $this->driver = new OdataConnector($config);
                break;
            default:
                throw new \InvalidArgumentException('Unsupported BC connection type.');
        }
    }

    public function getDriver()
    {
        return $this->driver;
    }

    public function __call($method, $args)
    {
        return $this->driver->{$method}(...$args);
    }
}
