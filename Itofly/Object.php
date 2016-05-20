<?php
namespace Itofly;
class Object{
    private $array=array();
    //调用一个不存在的属性
    public function __set($key,$value){
        $this->array[$key] = $value;
    }
    public function __get($key){
        return $this->array[$key];
    }
    //调用一个不存在的函数
    public function __call($func,$param){
        //var_dump($func,$param);
        return "magic function \n";
    }
    //调用一个不存在的静态函数
    public static function __callStatic($func,$param){
        //var_dump($func,$param);
        return "magic function \n";
    }
    //直接echo一个对象的时候回调用这个方法；
    public function __toString(){
        return __CLASS__;
    }
    //对象当做函数用时会调用这个函数
    public function __invoke($param=''){
        //var_dump($param);
        return "magic function \n";
    }

}