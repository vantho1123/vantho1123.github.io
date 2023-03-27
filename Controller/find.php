<?php
$act='find';
        if(isset($_GET['act'])){
                $act=$_GET['act'];
        }
        switch ($act)
        {
        case "filter":

            if(isset($_GET['nhom'])){
                $find=$_GET['nhom'];
        }   
        $hh=new hanghoa();
        
        $resul=$hh->gethanghoanhom($find);
                include "./View/find.php";
                break;
        case "find":
            $hh = new hanghoa();
            $find=$_POST['search'];
            $resul = $hh->getHangHoaTimKiem($find);
                include "./View/find.php";
                break;
   
        }
?>