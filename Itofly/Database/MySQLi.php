<?php
namespace Itofly\Database;
use Itofly\IDatabase;

class MySQLi implements IDatabase{
    protected $conn;
    public function connect($host,$user,$passwd,$dbname){
        $conn = mysqli_connect($host,$user,$passwd,$dbname);
        $this->conn = $conn;
    }
    public function query($sql){
        return mysqli_query($this->conn,$sql);
    }
    public function close(){
        mysqli_close($this->conn);
    }
}