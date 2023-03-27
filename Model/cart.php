<?php
class cart{
    public function __construct(){

    }
    function add_items($key,$quantity){
        $hii=new hanghoa();
        $hi=$hii->gethanghoaid($key);
        $hinh=$hi['hinh'];
        $cost=$hi['GIA'];
        $ten=$hi['TENSP'];
        $total=$cost*$quantity;
        $item=array(
            'masp'=>$key,
            'hinh'=>$hinh,
            'name'=>$ten,
            "cost"=>$cost,
            "quan"=>$quantity,
            'total'=>$total
        );
        $_SESSION['cart'][]=$item;
    }
    function getotal(){
        $tota=0;
        foreach($_SESSION['cart']as $items){
            $tota += $items['total'];
        }
        return $tota;
    }
    function delete_item($vt){
        unset($_SESSION['cart'][$vt]);
    }
    function update($vt,$sl){
        if ($sl<=0){
            $this->delete_item($vt);
        }
        else{
            $_SESSION['cart']["$vt"]['quan']=$sl;
            $newtotal= $_SESSION['cart']["$vt"]['quan']* $_SESSION['cart']["$vt"]['cost'];
            $_SESSION['cart']["$vt"]['total']=$newtotal;
        }
    }
}
?>