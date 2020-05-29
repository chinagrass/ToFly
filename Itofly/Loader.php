<?php

namespace Itofly;
class Loader
{
    public static function autoload($class)
    {
        require BASEDIR . "/" . str_replace('\\', '/', $class) . '.php';
    }
}