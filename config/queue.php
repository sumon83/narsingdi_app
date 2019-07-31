<?php

return [

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Default Queue Connection Name
=======
    | Default Queue Driver
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
    |--------------------------------------------------------------------------
    |
    | Laravel's queue API supports an assortment of back-ends via a single
    | API, giving you convenient access to each back-end using the same
<<<<<<< HEAD
    | syntax for every one. Here you may define a default connection.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'sync'),
=======
    | syntax for each one. Here you may set the default queue driver.
    |
    | Supported: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'default' => env('QUEUE_DRIVER', 'sync'),
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
<<<<<<< HEAD
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
=======
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
<<<<<<< HEAD
            'block_for' => 0,
=======
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
        ],

        'sqs' => [
            'driver' => 'sqs',
<<<<<<< HEAD
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
=======
            'key' => env('SQS_KEY', 'your-public-key'),
            'secret' => env('SQS_SECRET', 'your-secret-key'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'region' => env('SQS_REGION', 'us-east-1'),
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
<<<<<<< HEAD
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => null,
=======
            'queue' => 'default',
            'retry_after' => 90,
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];