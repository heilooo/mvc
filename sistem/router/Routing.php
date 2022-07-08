<?php

namespace System\router;
use ReflectionMethod;
class Routing
{
    private $current_rout;

    public function __construct()
    {
        global $current_rout;
        $this->current_rout = explode('/', $current_rout);
    }

    public function run()
    {
        $path = realpath(dirname(__FILE__) . "/../../application/controllers/" . $this->current_rout[0] . "php");
        if (!file_exists($path)) {
            echo "404 - file not exist!!";
        }
        sizeof($this->current_rout) == 1 ? $method = 'index' : $method = $this->current_rout[1];
        $class = "Application\Controller\\" . $this->current_rout[0];
        $object = new $class();
        if (method_exists($object, $method)) {
            $reflection = new ReflectionMethod($class, $method);
        }
    }
}