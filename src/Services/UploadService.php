<?php
/**
 * Created by PhpStorm.
 * User: leon
 * Date: 2018/3/23
 * Time: 下午4:35
 */
namespace Srpc\Services;

class UploadService  extends BaseService
{

    /**
     * 获取信息详情.
     */
    public  function GetUpload($args)
    {
        $url = 'http://xxxx' . "?" . http_build_query($args);

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
