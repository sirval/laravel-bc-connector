<?php

namespace BcConnector\LaravelBcConnector\Drivers\Soap;

class SoapClientBuilder
{
    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function build()
    {
        $options = [
            'cache_wsdl' => $this->config['soap']['cache'] ? WSDL_CACHE_MEMORY : WSDL_CACHE_NONE,
            'trace' => true,
            'exceptions' => true,
        ];

        if ($this->config['soap']['wsdl']) {
            $wsdl = $this->config['soap']['url'];
        } else {
            $wsdl = null; // Use a specific WSDL file if needed
        }

        return new \SoapClient($wsdl, $options);
    }
}
