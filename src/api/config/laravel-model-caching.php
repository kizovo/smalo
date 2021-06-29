<?php

return [
    'cache-prefix' => env('APP_ENV'),

    'enabled' => env('MODEL_CACHE_ENABLED', (env('APP_ENV') == 'production')? true : false),

    'use-database-keying' => env('MODEL_CACHE_USE_DATABASE_KEYING', true),

    'store' => env('MODEL_CACHE_STORE'),
];
