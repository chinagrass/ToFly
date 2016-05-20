<?php
namespace Itofly\Database;
use Itofly\IDatabase;

class MySQL implements IDatabase{
    protected $conn;
    public function connect($host,$user,$passwd,$dbname){
        $conn = mysql_connect($host,$user,$passwd);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }
    public function query($sql){
        $result = mysql_query($sql,$this->conn);
        return $result;
    }
    public function close(){
        mysql_close($this->conn);
    }
}