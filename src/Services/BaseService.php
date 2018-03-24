<?php
/**
 * Created by PhpStorm.
 * User: leon
 * Date: 2018/3/23
 * Time: 下午4:44
 */

namespace SRpc\Services;

class BaseService
{
    protected static $instances;

    private function __construct()
    {

    }

    public static function getInstance($virtualModel = '')
    {
        // 每一个$virtualModel对应一个独立的实例
        if (empty(static::$instances[$virtualModel])) {
            static::$instances[$virtualModel] = new static();
//            static::$instances[$virtualModel]->setVirtualModel($virtualModel);
        }

        return static::$instances[$virtualModel];
    }
}
