<?php
namespace Itofly;
interface IDatabase{
    public function connect($host,$user,$passwd,$dbname);
    public function query($sql);
    public function close();
}

class Database{
    private static $db;
    private function __construct(){

    }
    public static function getInstance(){
        if(!isset(self::$db)){
            self::$db = new self();
        }
        return self::$db;
    }
    public function where($where){
        return $this;
    }
    public function limit($limit){
        return $this;
    }
    public function order($order){
        return $this;
    }
}