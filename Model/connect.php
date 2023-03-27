<?php
class connect{
    var $db=null;
    public function __construct(){
        $dsn="mysql:host=localhost;dbname=banhang";
        $user="root";
        $pass="";
        
        try {
            $this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
         
        } catch (\Throwable $th) {
        }
    }
    public function getlist($select){
        $resul=$this->db->query($select);
        return $resul;
    }
    public function getInstance($select){
        $resul=$this->db->query($select);
        $result=$resul->fetch();
        return $result;
    }
    public function exec($ex)
    {
        return $this->db->exec($ex);
    }
}
?>
