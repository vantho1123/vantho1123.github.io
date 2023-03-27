<?php
$act = "";
$sum = 0;
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
$count = 0;
if (isset($_GET['id'])) {
    $bl = new comment();
    $kh = $bl->getcomment($_GET['id']);
    $dem = $bl->getcomment($_GET['id']);
    while ($dema = $dem->fetch()) {
        $sum +=$dema['sao'];
        $count++;
    }
    $average = ($count > 0) ? ($sum / $count) : 0;
    ;
}
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
if ($act == 'comment' && isset($_GET['id']) && isset($_SESSION['makh'])) {
    $bl = new comment();
    $noidung = $_POST['comment'];
    $star = $_POST['rating'];
    $bl->addcomment($_GET['id'], $_SESSION['makh'], $noidung, $star);
    echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=hanghoa&id=' . $_GET['id'] . '"/>';
}

include "./View/chitietbanhang.php";

?>