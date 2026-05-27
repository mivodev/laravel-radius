<?php

return [
    'default' => env('RADIUS_CONNECTION', 'default'),

    'connections' => [
        'default' => [
            'server' => env('RADIUS_HOST', '127.0.0.1'),
            'secret' => env('RADIUS_SECRET', 'testing123'),
            'port' => env('RADIUS_PORT', 3799),
            'timeout' => env('RADIUS_TIMEOUT', 5),
        ],
    ],
];
