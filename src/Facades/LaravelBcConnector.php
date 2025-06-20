<?php

namespace BcConnector\LaravelBcConnector\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BcConnector\LaravelBcConnector\LaravelBcConnector
 */
class LaravelBcConnector extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \BcConnector\LaravelBcConnector\LaravelBcConnector::class;
    }
}
