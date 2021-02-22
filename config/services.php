<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
     'firebase' => [
        'api_key' => "AIzaSyCy6-HY93KCxuOBBfX8PwsJMQITYHfPCjM",
        'auth_domain' => "whatsappclonemasterfive.firebaseapp.com",
        'database_url' => "https://whatsappclonemasterfive.firebaseio.com",
        'storage_bucket' => "whatsappclonemasterfive.appspot.com",
        'messagingSenderId' => "382282205006",
        'appId' => "1:382282205006:web:6668275755a811b8e6801f"
    ],

];
