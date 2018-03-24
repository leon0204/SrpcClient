<?php
/**
 * Created by PhpStorm.
 * User: leon
 * Date: 2018/3/23
 * Time: 下午5:24
 */
namespace SRpc\Services;

class UserService  extends BaseService
{

    /**
     * 获取
     */
    public  function GetUser($args)
    {
        $url = 'http://xxx' . "?" . http_build_query($args);

        $content = json_encode($args);
        $options['http'] = [
            'timeout' => 5,
            'method' => 'GET',
            'header' => 'Content-type:application/x-www-form-urlencoded',
            'content' => $content,
        ];

        $context = stream_context_create($options);
        $res = file_get_contents($url, false, $context);

        return $res;
    }

}