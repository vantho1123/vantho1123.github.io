<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">


        <form class="collapse navbar-collapse" id="navbarSupportedContent" action="index.php?action=find&act=find"
            method="post">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="navbar-brand"
                        href="<?php if (!isset($_SESSION['admin'])||$_SESSION['admin']==0) {
                            echo 'index.php';
                        } else {
                            echo "index.php?action=adminproduct&act=home";
                        } ?>"><img
                            src="./content/img/logo.jpg" style="width:150px"></a></li>
            </ul>

            <?php if (!isset($_SESSION['admin'])||$_SESSION['admin']==0) { ?>
                <div class="dropdown">
                    <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown">
                        Filter
                    </button>
                    <ul class="dropdown-menu">
                        <?php
                        $hh = new hanghoa();
                        $resul = $hh->getNSX();
                        foreach ($resul as $key => $value) {

                            ?>
                            <li><a class="dropdown-item"
                                    href="index.php?action=find&act=filter&nhom=<?php echo $value['masp']; ?>"><?php echo $value['tennsx']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="dropdown">
                    <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown">
                        Sort
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?action=home&act=sort&sort=ASC">Giá tăng dần</a></li>
                        <li><a class="dropdown-item" href="index.php?action=home&act=sort&sort=DESC">Giá giảm dần</a></li>

                    </ul>
                </div>

                <ul class="navbar-nav me-auto">
                    <li class="h-75">
                        <input type="text" name="search" class="form-control" placeholder="Search...." />
                    </li>
                    <button type="submit" class="btn btn-primary w-25 h-50">
                        <i class="fas fa-search"></i>
                    </button>
                    </li>
                </ul>
                <div class="d-flex">

                    <a class="btn btn-outline-dark p-3 m-2" href="index.php?action=cart">
                        <i class="bi-cart-fill me-2"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">
                            <?php if (isset($_SESSION['cart'])) {

                                echo count($_SESSION['cart']);
                            } else {
                                echo "0";
                            }
                            ; ?>
                        </span>
                    </a>
                <?php } else { ?>

                    <div class="dropdown">


                        <a class="p-3 m-2 btn btn-info" href="index.php?action=adminproduct&act=home">Product</a>
                        <a class="p-3 m-2 btn btn-info" href="index.php?action=adminorder&act=home">Order</a>
                        <a class="p-3 m-2 btn btn-info" href="index.php?action=adminorderdetail&act=home">Oder Detail</a>
                        <a class="p-3 m-2 btn btn-info" href="index.php?action=adminproductdetail&act=home">Product Detail</a>


                    </div>
                    <div class="d-flex">
                    <?php } ?>

                    <?php
                    if (!isset($_SESSION['makh'])) {
                        echo '<a href="index.php?action=login"/><input type="button" class="p-3 m-2 btn btn-primary" value="Login"></a>
                            <a href="index.php?action=regis"/><input type="button" class="p-3 m-2 btn btn-primary" value="Register"></a>

                            ';
                    }
                    if (isset($_SESSION['makh'])) {
                        echo '<a href="index.php?action=login&act=logout"/><input type="button" class="p-3 m-2 btn btn-primary" value="Logout"></a>';
                        echo '<a href="index.php?action=login&act=changepass"/><input type="button" class="p-3 m-2 btn btn-primary" value="change password"></a>'
                        ;
                    }
                    ?>



                </div>
        </form>
    </div>
</nav>
<!-- Header-->
<header class=""
    style="background-image: url('./content/img/mainbanner.jpg');background-size: cover;background-size: 100% 100%;height:300px">

</header>