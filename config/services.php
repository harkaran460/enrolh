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

    'google' => [
        'client_id' => '214512203384-r8s7o99uhsm41etj0jrjic6vlu8ga90u.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => '/callback/google',
    ],

    'facebook' => [
        'client_id' => '537890111389096',
        'client_secret' => '5031865080d948b96cac9b5f751e570a',
        'redirect' => '/callback/facebook',
    ],

];
