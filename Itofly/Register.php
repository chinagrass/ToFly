<?php
namespace Itofly;
//注册树模式
class Register{
    protected static $objects;
    public static function set($alias,$object){
        self::$objects[$alias] = $object;
    }
    public static function get($name){
        return self::$objects[$name];
    }
    public function _unset($alias){
        unset(self::$objects[$alias]);
    }
}