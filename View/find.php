
<section class="py-5">


    <div class="container px-4 px-lg-5 ">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            if($find!=""){
            
            while ($set = $resul->fetch()) {
                ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="./content/Img/<?php echo $set['hinh'] ?>" alt="" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">
                                    <?php echo $set['TENSP'] . "-" . $set['nhom'] ?>
                                </h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through"></span>
                                $
                                <?php echo $set["GIA"] ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="index.php?action=hanghoa&act=chitietbanhang&id=<?php echo $set['MASP'] ?>">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            <?php }}else{ ?>
                <div>
                <h2>Không có sản phẩm nào phù hợp với tìm kiêm của bạn</h1>
                </div>
            <?php
            
                
            }
            ?>
        </div>
    </div>
   

          
           
</section>