<?php
namespace Srpc\Services;

class UserService  extends BaseService
{
    private $class ;

    /**
     * UploadService constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $class = explode('\\',get_class());
        $this->class = end($class);
    }

    function __call($name, $arguments)
    {
        return    $this->func($this->class,$name,...$arguments);
    }
}