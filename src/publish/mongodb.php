<?php

return [
    'default' => [
        'username' => env('MONGODB_USERNAME', ''),
        'password' => env('MONGODB_PASSWORD', ''),
        'host' => [
            sprintf('%s:%d',env('MONGODB_HOST', '127.0.0.1'), env('MONGODB_PORT', 27017))
        ],
        'db' => env('MONGODB_DB', 'test'),
        'options'  => [
            'database' => 'admin',
            // 需要配置 username
            'authMechanism' => 'SCRAM-SHA-256',
            //设置复制集,没有不设置
            //'replica' => env('MONGODB_Replica', 'rs0'),
            //'readPreference' => env('MONGODB_ReadPreference', 'primary')
        ],
        'pool' => [
            'min_connections' => 10,
            'max_connections' => 100,
            'connect_timeout' => 10.0,
            'wait_timeout' => 3.0,
            'heartbeat' => -1,
            'max_idle_time' => (float)env('MONGODB_MAX_IDLE_TIME', 60),
        ],
    ],
];
