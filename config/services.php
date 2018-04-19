<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
        'client_id' => '583275220286-0q2n4gi1scnd24ciea6q4o5d023scgvq.apps.googleusercontent.com',         // Your GitHub Client ID
        'client_secret' => 'I58kytUn_as7_HggQ7bodHbx', // Your GitHub Client Secret
        'redirect' => 'http://weblyhous.com/laravelweb/login/google/callbacklogin',
    ],

    'twitter' => [
        'client_id' => 'paF8PRxQLcwaU9hf6f9oAl1zh',         // Your GitHub Client ID
        'client_secret' => 'Wv7auBuQtPmaiGfzjvr5Cdw18yf69PShRxxDCFnYy2EInTRjCz', // Your GitHub Client Secret
        'redirect' => 'http://weblyhous.com/laravelweb/login/twitter/callbacklogin',
    ],
    
    'facebook' => [
        'client_id' => '1743904385914776',         // Your GitHub Client ID
        'client_secret' => '224ed10cb0702929c6df4dd80a438a58', // Your GitHub Client Secret
        'redirect' => 'http://weblyhous.com/laravelweb/login/facebook/callbacklogin',
    ],
];
