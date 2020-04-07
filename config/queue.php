<?php

return [
    'connections' => [
        'multi-database' => [
            'driver' => 'multi-database',
            'table' => 'jobs',
            'queue' => env('OFFICEGURU_MULTI_QUEUE', 'api'),
            'retry_after' => 90,
        ],
    ],
];
