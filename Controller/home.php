<?php
    
  $hh = new hanghoa();
  $resul = $hh->gethanghoamoi();
  $count = $resul->rowCount();
  $limit = 8;
  $p = new page();
  $page = $p->findpage($count, $limit);
  $start=$p->findstart($limit);
  $current_page = isset($_GET['page'])?$_GET['page']:1;
$hh = new hanghoa();
$resul = $hh->getListpageHH($start,$limit);
if(isset($_GET['act'])&&$_GET['act']=="sort"){
    $sort=$_GET['sort'];
    $resul = $hh->getListSort($start,$limit,$sort);
}
include "./View/home.php"
?>