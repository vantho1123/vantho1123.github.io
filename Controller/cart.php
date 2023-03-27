<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$act = "cart";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

if (isset($_SESSION['makh'])) {
    $or = new hoadon();
    $makh=$_SESSION['makh'];
    $khDetail = $or->getcustomer($makh);
}
switch ($act) {

    case "cart":
        if (isset($_POST['mahh'])) {
            $add=1;
            foreach($_SESSION['cart'] as $key=>$item){
                if($_POST['mahh']==$item['masp']){
                    $add=0;
                }
            }
            if($add==1){
            $mahh = $_POST['mahh'];
            $soluong = $_POST['soluong'];
            $gh = new cart();
            $gh->add_items($mahh, $soluong);
            
            echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=cart"/>';
            }
            else{
                $gh = new cart();
                foreach ($_SESSION['cart'] as $key => $item) {
                    if($_POST['mahh']==$item['masp']){
                        $newquan=$item['quan']+1;
                        $gh->update($key, $newquan);
                        
                    }
                }
            }
           
        }
        
        
        include "./View/cart.php";
        break;
    case "delete_item": {
            if (isset($_GET['id'])) {
                $index = $_GET['id'];
                $gh = new cart();
                $gh->delete_item($index);
            }
            include "./View/cart.php";
            break;
        }
    case 'update': {
            if (isset($_POST['newqty'])) {

                $list = $_POST['newqty'];
                foreach ($list as $vitri => $qty) {
                    if ($_SESSION['cart'][$vitri]['quan'] != $qty) {
                        $gh = new cart();
                        $gh->update($vitri, $qty);
                    }
                }
            }

            include "./View/cart.php";
            break;
        }
    case 'order': {
        if (isset($_SESSION['makh'])&& isset($_SESSION['cart'])) {
            $check=true;
            $makh = $_SESSION['makh'];
            $or = new hoadon();
            $asd = $or->InsertOrder($makh);
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $item) {
                $check=$or->insertOrderDetail($asd, $item['masp'], $item['quan'], $item['total']);
                $total += $item["total"];
         
            }
            $or->updateOrderTotal($asd, $total);
            $khDetail = $or->getOrder($asd);
            
            }
    
            
        unset($_SESSION['cart']);
        if($check==true){
        echo '<script>alert("Order successful")</script>';}
        echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
            include "./View/home.php";
            break;
        }
}

?>