<?php

namespace Srpc;

use Srpc\Utils\Config as SConfig;

/**
 * Class SRpc
 * @package SRpc
 */
class Srpc
{
    /**
     * @var
     * 存储服务实例
     */
    private $service;

    private static $instances;


    public static function __callStatic($method, $arguments)
    {
        self::get($arguments);
    }

    /**
     * @param  array  $configs
     * @return void
     */
    public static function setConfig($configs = [])
    {
        SConfig::import($configs);
    }


    private static function getInstance($modelAlias)
    {
        if (empty(self::$instances[$modelAlias])) {
            self::$instances[$modelAlias] = new self();
            self::$instances[$modelAlias]->service = self::getBindingModel($modelAlias);
        }

        return self::$instances[$modelAlias];
    }

    /**
     * Set model.
     */
    public static function get($modelAlias)
    {
        return self::getInstance($modelAlias);
    }

    /**
     * Get binding model by model mapping
     *
     * @return object
     */
    private static function getBindingModel($modelAlias)
    {
        $models = SConfig::get('Services');
        if (array_key_exists($modelAlias, $models)) {
            $model = $models[$modelAlias];
        }else{
            trigger_error("Get Model unexcept, This action will be report to admin.", E_USER_ERROR);
        }
        $model = $model::getInstance($modelAlias);
        return $model;
    }

    /**
     * @param  string  $method
     * @param  array  $params
     * @return boolean | array
     */
    public function __call($method, $params)
    {
        $model = $this->service;
        if (empty($model) || !is_callable([$model, $method])) {
            return false;
        }
        $data = $model->$method(...$params);
        return $data;
    }
}
