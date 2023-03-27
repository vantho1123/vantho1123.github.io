    <?php
    if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
        echo "alert('your cart is empty')";
    } else {

        ?>
<div class="row px-md-4 px-2 pt-4">

        <div class="col-lg-8">
            <p class="pb-2 fw-bold">Order</p>
            <div class="card">
                <form action="index.php?action=cart&act=update" method="post">
                    <table class="table table-borderless">

                            <?php
                            $f = 0;
                            foreach ($_SESSION['cart'] as $key => $item):
                                $f++;
                                ?>
                                <form action="index.php?action=cart&act=update&id=<?php echo $key ?>" method="post">
                            <tr class="">

                                        <td >
                                        <div class="d-flex align-items-center">
                                                <div> <img class="pic w-75"
                                                        src="./content/Img/<?php echo $item['hinh']?>"
                                                        alt=""> 
                                                </div>
                                                
                                        </div>
                                        </td>
                                        <td>
                                            <div class="ps-3 d-flex flex-column">
                                                    <p class="fw-bold"><?php echo $item['name']?></p> <small class="">
                                                </div>
                                        </td>
                                        <td>
                                            <div class="d-flex fw-bold">
                                                <p class="pe-3 "><?php echo $item["total"] ?></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">Quantity  <span
                                                    class="pe-3"><input type="text" name="newqty[<?php echo $key?>]"
                                                        value="<?php echo $item['quan'] ?>" /></span>
                                            </div>
                                        </td>
                                        <td><a href="index.php?action=cart&act=delete_item&id=<?php echo $key ?>">
                                                <button type="button" class="btn btn-danger">Xóa</button></a>
                                        </td>
                                        <td>
                                    
                                                <button type="submit" class="btn btn-secondary">Sửa</button>
                                      
                                        </td>
                            </tr>
                                    </form>
                            <?php endforeach ?>
                    </table>
                
            </div>
        </div>
  
    <?php if (isset($_SESSION['makh'])) { ?>
    <div class="col-lg-4 payment-summary">
        <div class="card px-md-3 px-2 pt-4">
            <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Địa chỉ khách hàng</small>
                <p class=""><?php echo $khDetail['diachi'] ?></p>
            </div>
            <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Tên khách hàng</small>
                <p class=""><?php echo $khDetail['tenkh'] ?></p>
            </div>
            <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Số điện thoại</small>
                <p class=""><?php echo $khDetail['sodienthoai'] ?></p>
            </div>
            <div class="m-auto">
            <a class="btn btn-primary"  href="?action=updateuser">Chỉnh sửa thông tin giao hàng</a>
            </div>
            <div class="d-flex justify-content-between b-bottom"> 
                Thông tin đơn hàng
            
            </div>
            
            <div class="d-flex flex-column b-bottom">
               
                <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Tạm tính</small>
                    <p><?php
                    $sum = 0;
                    foreach($_SESSION['cart'] as $value)
                    $sum +=$value['total'];
                    echo $sum ?></p>
                </div>
                <div class="d-flex justify-content-between"> <small class="text-muted">Ship</small>
                    <p>15000</p>
                </div>
                <div class="d-flex justify-content-between"> <small class="text-muted">Total Amount</small>
                    <p><?php echo $sum+15000 ?></p>
                </div>
            </div>
     
                    <a class="btn btn-primary" href="?action=cart&act=order">Order</a>
    </div>
    </div>
    <?php } else { ?>
        <div class="col-lg-4 payment-summary">
        <div class="card px-md-3 px-2 pt-4">
            <div class="unregistered mb-4"> <span class="py-1">You need to login to Order</span> </div>
            
     
                    <a class="btn btn-primary" href="?action=login">Login</a>
    </div>
    </div>
    <?php } ?>
</div>
<?php } ?>