<?php
if ($_GET['action'] == "adminproductdetail") {
  $hh = new hanghoa();
  $products = $hh->getNSX();
}
;
$act = 'addnew';
if (isset($_GET['act'])) {
  $act = $_GET['act'];
}
switch ($act) {
  case "home":
    include "./View/adminproductdetail.php";
    break;
  case "addnew":
    $hh = new hanghoa();
    $loai = $hh->getNSX();
    include "./View/insertproductdetail.php";
    break;
  case 'addnew_action':
    $tennsx = $_POST['tennsx'];
   
    $admin = new CRUDadmin();

    $check = $admin->insertproductdetail($tennsx);
    if ($check == false) {
      echo '<script>alert("insert product fail, please check your infomation again")</script>';
    } else {
      echo '<script>alert("insert successful")</script>';

      echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminproductdetail&act=home"/>';
    }
    break;
  case "delete":
    $mahh = $_GET['id'];
    $admin = new CRUDadmin();
    $admin->deleteproductdetail($mahh);
    echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminproductdetail&act=home"/>';

    break;
  case "update":
    $mahh = $_GET['id'];
    $admin = new hanghoa();
    
    $loai=$admin->gettennsx($mahh);
    include "./View/updateproductdetail.php";
    break;
  case "update_action":
    $maloai = $_GET['id'];
    $tenhh = $_POST['name'];
    $admin = new CRUDadmin();
    $check = $admin->updateproductdetail($maloai, $tenhh);
    if ($check == false) {
      echo '<script>alert("update product fail, please check your infomation again")</script>';
    } else {
      echo '<script>alert("update successful")</script>';

      echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminproductdetail&act=home"/>';
    }
    break;
    ;


}





?>