<?php
$act = 'home';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
  case "home":
    $hh = new hanghoa();
    $products = $hh->gethoadon();
    include "./View/adminorder.php";
    break;
  case "update":
    $masohd = $_GET['id'];
    $admin = new CRUDadmin();
    $order=$admin->getorder($masohd);
    $user=new regis();
    $tenkh=$user->getusername($order["makh"]);
    include "./View/updateorder.php";
    break;
    case 'update_action':
    $sohd=$_GET['id'];
    $username=$_POST['username'];
    $date=$_POST['ngaydat'];
    $admin=new CRUDadmin();
    $user=new regis();
    $makh=$user->getid($username);
    $checkusername= $user->exitUser($username);
   
    if($checkusername==false){echo '<script>alert("Customer Username is not exist")</script>';
      echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminorder&act=update&id='.$sohd.'"/>';
    }
    else {
      $check=$admin->updateorder($sohd,$makh['makh'],$date);
      if($check==false){
      echo '<script>alert("update order fail, please check your infomation again")</script>';
    }else{
      echo '<script>alert("update successful")</script>';

      echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminorder&act=home"/>';
    }}
    break;
    case "delete":
      $mahh=$_GET['id'];
      $admin=new CRUDadmin();
      $admin->deleteorder($mahh);
      echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminorder&act=home"/>';

      break;
    ;

}





  ?>