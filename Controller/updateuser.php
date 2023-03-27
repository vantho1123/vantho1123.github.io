<?php

$act = '';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}else{
    include "./view/updateuser.php";
}

if (isset($_SESSION['makh'])) {
    $or = new hoadon();
    $makh=$_SESSION['makh'];
    $khDetail = $or->getcustomer($makh);
}
switch ($act) {
    case "update":
        if (isset($_SESSION['makh'])) {
            $tenkh = $_POST['txttenkh'];
            $diachi = $_POST['txtdiachi'];
            $sodt = $_POST['txtsodt'];
            $makh = $_SESSION['makh'];
            $ur = new regis();
            $check = $ur->updateUser($makh, $tenkh, $sodt, $diachi);
            
        }
        if ($check == false) {
            echo '<script>alert("update fail, please check your infomation again")</script>';
            include "./view/updateuser.php";

        } else {
            echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=cart"/>';
            echo '<script>alert("update successful")</script>';
            include "./view/cart.php";

        }
}
?>