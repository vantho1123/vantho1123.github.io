<?php
$act = 'home';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
  case "home":
    $hh = new hoadon();
    $products = $hh->getallorderdetail();
    include "./View/adminorderdetail.php";
    break;
  case "update":
    $masohd = $_GET['id'];
    $admin = new CRUDadmin();
    $order=$admin->getctsp($masohd);
    $hh=new hanghoa();
    $name=$hh->gethanghoamoi();
    include "./View/updateorderdetail.php";
    break;
    case 'update_action':
      $total=0; 
    $sohd=$_GET['id'];
    $quan=$_POST['quan'];
    $id=$_POST['sp'];
    $mshd=$_POST['masohd'];
    $admin=new CRUDadmin();
    $user=new hanghoa();
    $gia=$user->gethanghoaid($id);
    $tt=$gia['GIA']*$quan;
    $hd=new hoadon();
    $check=$admin->updateorderdetail($sohd,$id,$quan,$tt);

    if($check==false){
      echo '<script>alert("update order fail, please check your infomation again")</script>';
    }else{
      echo '<script>alert("update successful")</script>';
      $ctsp=$admin->getttctsp($mshd);
    while ($price = $ctsp->fetch()) {$total+=$price['thanhtien'];}
    $hd->updateOrderTotal($mshd,$total);
      echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminorderdetail&act=home"/>';
    }
    break;
    case "delete":
      $mahh=$_GET['id'];
      $admin=new CRUDadmin();
      $admin->deleteorder($mahh);
      echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminorderdetail&act=home"/>';

      break;
    ;

}





  ?>