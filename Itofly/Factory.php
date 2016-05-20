<?php
namespace Itofly;
class Factory{
    public static function createDatabase(){
        $db = Database::getInstance();
        Register::set('db',$db);
        return $db;
    }
}