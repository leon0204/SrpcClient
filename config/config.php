<?php
return [
    'class_url' => '',
    'info_url' => '',

    // Cache lifetime.
    'cache_minutes' => 2,
    // 是否刷新缓存.
    'refresh_cache' => 0,

    // Api service host.
    'api_base_url' => '',

    // Models alias map to class.
    'Services' => [
        'UploadService' => SRpc\Services\UploadService::class,
        'UserService' => SRpc\Services\UserService::class,
    ]
];

