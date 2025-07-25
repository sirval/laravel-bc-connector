<?php

return [
    'connection' => env('BC_CONNECTION', 'soap'), 
    'auth' => env('BC_AUTH', 'basic'),

    'soap' => [
        'url' => env('BC_SOAP_URL'),
        'username' => env('BC_USERNAME'),
        'password' => env('BC_PASSWORD'),
        'cache' => env('BC_SOAP_CACHE', false),
        'wsdl' => env('BC_SOAP_WSDL', true), 
    ],

    'odata' => [
        'url' => env('BC_ODATA_URL'),
        'client_id' => env('BC_CLIENT_ID'),
        'client_secret' => env('BC_CLIENT_SECRET'),
        'tenant_id' => env('BC_TENANT_ID'),
    ]
];
