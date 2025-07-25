<?php

namespace BcConnector\LaravelBcConnector\Drivers\Soap\Auth;

use SoapHeader;

class OAuth2
{
    protected string $token;

    public function __construct(array $config)
    {
        $this->token = $this->fetchAccessToken($config);
    }

    protected function fetchAccessToken(array $config): string
    {
        // Fetch token from Azure AD or BC using Guzzle
        // For now, return a dummy token
        return 'dummy-oauth-token';
    }

    public function getSoapOptions(): array
    {
        return []; // No login/pass
    }

    public function getSoapHeaders(): array
    {
        return [
            new SoapHeader('http://schemas.xmlsoap.org/ws/2005/05/identity/claims', 'Authorization', 'Bearer '.$this->token),
        ];
    }
}
