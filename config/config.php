<?php
return [
    'class_url' => '',
    'info_url' => '',

    // Cache lifetime.
    'cache_minutes' => 3,
    // 是否刷新缓存.
    'refresh_cache' => 0,

    // Api service host.
    'api_base_url' => '',

    // Models alias map to class.
    'Services' => [
        'UploadService' => Srpc\Services\UploadService::class,
        'UserService' => Srpc\Services\UserService::class,
    ]
];

