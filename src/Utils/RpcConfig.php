<?php
namespace Srpc\Utils;

use \Yaf_Config_Ini as Ini;

/**
 * Class ServiceConfig
 * @package Srpc\Services
 */
Trait RpcConfig
{

    private static $env;
    /**
     * @var array
     */
    private static $rpcConfig = [
        //测试环境
        "dev" => [
            "UserService" => [
                "GetUser" => "http://apiv4.5imakeup.com/Comment/api/Staffs",
            ],
            "UploadService" => [
                "GetUpload" => "http://apiv4.5imakeup.com/Upload/api/GetUpload",
            ]
        ],
        //生产环境
        "production" => [
            "UserService" => [
                "GetUser" => "https://v3.imacco.com/Comment/api/Staffs",
            ],
            "UploadService" => [
                "GetUpload" => "https://v3.imacco.com/Upload/api/GetUpload",
            ]
        ],
        //本地环境
        "localhost" => [
            "UserService" => [
                "GetUser" => "http://lll.user/Comment/api/Staffs",
            ],
            "UploadService" => [
                "GetUpload" => "http://lll.upload/Upload/api/GetUpload",
            ]
        ]
    ];

    function __construct()
    {
    }

    /**
     * @return array
     * filter array by AppConfig
     */
    public static function getConfig()
    {
        $appConfig = \Config::get('AppConfig');
        $domain = $appConfig['DomainName'];
        if ($domain == 'lll.user') {
            self::$env = 'localhost';
        } elseif ($domain == 'v3.imacco.com') {
            self::$env = 'production';
        } elseif ($domain == 'apiv4.5imakeup.com') {
            self::$env = 'dev';
        } else {
            trigger_error('please set RpcConfig env path !');
        }

        //return env rpcConfigSet
        return self::$rpcConfig[self::$env];
    }


}