<?php

namespace BcConnector\LaravelBcConnector\Drivers\Soap\Auth;

class BasicAuth
{
    protected $username;
    protected $password;

    public function __construct(array $config)
    {
        $this->username = $config['username'];
        $this->password = $config['password'];
    }

    public function getSoapOptions(): array
    {
        return [
            'login' => $this->username,
            'password' => $this->password,
        ];
    }

    public function getSoapHeaders(): array
    {
        return []; // No headers needed for basic auth
    }
}