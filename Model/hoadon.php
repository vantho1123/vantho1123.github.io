<?php
class hoadon{ 
    function __construct(){}
    function InsertOrder($makh){
        $db=new connect();
        $date=new DateTime("now");
        $datecreate=$date->format('Y-m-d');
        $query="insert into hoadon1(masohd,makh,ngaydat,tongtien)value(null,$makh,'$datecreate',0)";
        $db->exec($query);
        $select="select masohd from hoadon1 order by masohd desc limit 1";
        $int=$db-> getInstance($select);
        return $int[0];
    }
    function insertOrderDetail($mshd,$a,$d,$e){
        $db=new connect();
        $query2 ="select soluongton from hanghoa where MASP =$a";
        $results = $db-> getInstance($query2);
        if($results['soluongton']>$d){
        $bien = $results['soluongton']-$d;
        $query1 = "UPDATE `hanghoa` SET `soluongton` = $bien WHERE `hanghoa`.`MASP` = $a ";
        $query="insert into cthoadon1(masohd,mahh,soluongmua,thanhtien) 
        values($mshd,$a,$d,$e)";
        $db->exec($query1);
        $db->exec($query);}
        else{
            echo '<script>alert("out of quantity")</script>';
            return false;
        }
    }
    function updateOrderTotal($id,$total){
        $db= new connect();
        $query="update hoadon1 set tongtien=$total where masohd=$id";
        $db->exec($query);
    }
    function getOrder($sohd){
        $db = new connect();
        $select = "select b.masohd, a.tenkh, a.diachi,a.sodienthoai,b.ngaydat from khachhang1 a INNER join hoadon1 b on a.makh=b.makh where b.makh=$sohd";
        $resul = $db->getInstance($select);
        return $resul;
    }
    function getcustomer($makh){
        $db=new connect();
        $select="select makh,tenkh,diachi,sodienthoai from khachhang1 where makh=$makh";
        $int=$db-> getInstance($select);
        return $int;
    }
    public function getallorderdetail()
    {
        $db = new connect();
        $select = "select * from  cthoadon1 ";
        $resul = $db->getlist($select);
        return $resul;
    }
}
    ?>