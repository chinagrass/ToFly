<?php


namespace Itofly;


class Application
{
    public $base_dir;
    protected static $instance;

    public $config;

    protected function __construct($base_dir)
    {
        $this->base_dir = $base_dir;
        $this->config = new Config($base_dir . '/configs');
    }

    static function getInstance($base_dir = '')
    {
        if (empty(self::$instance)) {
            self::$instance = new self($base_dir);
        }
        return self::$instance;
    }

    function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];
        strstr($uri, '?', true) && $uri = strstr($uri, '?', true);
        if ($uri) {
            list($c, $v) = explode('/', trim($uri, '/'));
        } else {
            list($c, $v) = ["index", "index"];
        }
        $c_low = strtolower($c);
        $c = ucwords($c);
        $class = '\\App\\Controller\\' . $c;
        if (!class_exists($class)) {
            die("page not found");
        }
        $obj = new $class($c, $v);
        $controller_config = $this->config['controller'];
        $decorators = array();
        if (isset($controller_config[$c_low]['decorator'])) {
            $conf_decorator = $controller_config[$c_low]['decorator'];
            foreach ($conf_decorator as $class) {
                $decorators[] = new $class;
            }
        }
        foreach ($decorators as $decorator) {
            $decorator->beforeRequest($obj);
        }
        $return_value = $obj->$v();
        foreach ($decorators as $decorator) {
            $decorator->afterRequest($return_value);
        }
    }
}