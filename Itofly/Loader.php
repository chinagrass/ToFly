<?php
namespace Itofly;
class Loader{
    public static function autoload($class){
        //var_dump($class);
        require BASEDIR."/".str_replace('\\','/',$class).'.php';
    }
}