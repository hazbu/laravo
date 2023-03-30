<?php

return [

    /*
     * If enabled for voyager-duplicate package.
     */
    'enabled' => env('VOYAGER_DUPLICATE_ENABLED', true),

    /*
    | Here you can specify for which data type slugs duplicate is enabled
    | 
    | Supported: "*", or data type slugs "users", "roles"
    |
    */

    'allowed_slugs' => array_filter(explode(',', env('VOYAGER_DUPLICATE_ALLOWED_SLUGS', '*'))),

    /*
    | Here you can specify for which data type slugs duplicate is not allowed
    | 
    | Supported: "*", or data type slugs "users", "roles"
    |
    */

    'not_allowed_slugs' => array_filter(explode(',', env('VOYAGER_DUPLICATE_NOT_ALLOWED_SLUGS', ''))),

    /*
     * The config_key for voyager-duplicate package.
     */
    'config_key' => env('VOYAGER_DUPLICATE_CONFIG_KEY', 'joy-voyager-duplicate'),

    /*
     * The route_prefix for voyager-duplicate package.
     */
    'route_prefix' => env('VOYAGER_DUPLICATE_ROUTE_PREFIX', 'joy-voyager-duplicate'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerDuplicate\\Http\\Controllers',
    ],
];
