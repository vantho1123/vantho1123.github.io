<?php
class comment{
    public function __construct(){ }
    public function getcomment($mahh){
        $db=new connect();
        $select= "SELECT `mahh`,`makh`,`ngaybl`,`noidung`,`sao` FROM `binhluan1` WHERE mahh=$mahh ";
        $resul=$db->getlist($select);
        return $resul;
    }
    public function getusername($makh){
        $db=new connect();
        $select= "SELECT tenkh FROM `khachhang1` WHERE makh=$makh LIMIT 1";
        $resul=$db->getInstance($select);
        return $resul;
    }
    public function addcomment($mahh,$makh,$noidung,$star)
    {
        $db=new connect();
        $date=new DateTime("now");
        $datecreate=$date->format('Y-m-d');
        $query="insert into binhluan1(mabl,mahh,makh,ngaybl,noidung,sao)value(null,$mahh,$makh,'$datecreate','$noidung',$star)";
        $db->exec($query);
    }
    
}
?>
