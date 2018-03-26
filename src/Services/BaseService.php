<?php
namespace Srpc\Services;

use Srpc\Utils\RpcConfig;

class BaseService
{
    protected static $instances;

    protected function __construct(){
        $this->config  = RpcConfig::getConfig();
    }

    public static function getInstance($virtualModel = '')
    {
        if (empty(static::$instances[$virtualModel])) {
            static::$instances[$virtualModel] = new static();
        }
        return static::$instances[$virtualModel];
    }

    /**
     * @param $func string
     * @param $args array
     * @return string
     */
    public function func($class,$func,$args){

        if (! array_key_exists($func, $this->config[$class])) {
            trigger_error("Get Error Method.Please Check Method ", E_USER_ERROR);
        }
        $url = $this->config[$class][$func]. "?" . http_build_query($args);


        $content = json_encode($args);
        $options['http'] = [
            'timeout' => 5,
            'method' => 'GET',
            'header' => 'Content-type:application/x-www-form-urlencoded',
            'content' => $content,
        ];

        $context = stream_context_create($options);
        $res = json_decode(file_get_contents($url, false, $context));
        return $res;
    }
}
