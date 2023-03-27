<?php

class hanghoa{
    public function __construct(){

    }
    public function gethanghoamoi(){
        $db=new connect();
        $select="select * from hanghoa";
        $result=$db->getlist($select);
        return $result;
    }
    public function getnhom(){
        $db=new connect();
        $select="select distinct nhom from hanghoa";
        $result=$db->getlist($select);
        return $result;
    }
    public function gethanghoanhom($nhom){
        $db=new connect();
        $select="select * from hanghoa where nhom='$nhom'";
        $result=$db->getlist($select);
        return $result;
    }
    public function gethanghoaid($id){
        $db=new connect();
        $select="select * from hanghoa WHERE masp='$id'";
        $result=$db->getInstance($select);
        return $result;
    }
    
    function getCountHH(){
        $db = new connect();
        $select = "select count(*) from hanghoa";
        $resul = $db->getInstance($select);
        return $resul[0];
    }
    function  getListpageHH($start,$limit){
        $db = new connect();
        $select="select * from hanghoa limit ".$start.",".$limit;
        $resul = $db->getlist($select);
        return $resul;
    }
    function  getListSort($start,$limit,$sort){
        $db = new connect();
        $select="select * from hanghoa ORDER BY GIA ".$sort." limit ".$start.",".$limit;
        $resul = $db->getlist($select);
        return $resul;
    }
    function getHangHoaTimKiem($tenhh){
        $db=new connect();
        $select="SELECT * FROM hanghoa WHERE TENSP LIKE '%$tenhh%'";
        $resul=$db->getlist($select);
        return $resul;
    }
    public function gethoadon()
    {
        $db=new connect();
        $select="SELECT * FROM hoadon1";
        $resul=$db->getlist($select);
        return $resul;
    }
    public function getNSX()
    {
        $db=new connect();
        $select="SELECT * FROM ctsp";
        $resul=$db->getlist($select);
        return $resul;
    }
    public function gettennsx($id)
    {
        $db=new connect();
        $select="SELECT * FROM ctsp where masp=$id";
        $resul=$db->getInstance($select);
        return $resul;
    }
    
}

?>