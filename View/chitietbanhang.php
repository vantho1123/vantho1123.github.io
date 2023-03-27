<form class="py-5" action="index.php?action=cart" method="post">
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $hh = new hanghoa();
        $resul = $hh->gethanghoaid($id);
        $ma = $resul['MASP'];
        $hinh = $resul['hinh'];
        $tenhh = $resul['TENSP'];
        $dongia = $resul['GIA'];
        $mota = $resul['mota'];
        $soluongton = $resul['soluongton'];
        $cmt = new comment();

    }
    ?>
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="./content/Img/<?php echo $hinh ?>"
                    alt="..." /></div>
            <div class="col-md-6">
                <input type="hidden" name="mahh" value="<?php echo $id; ?>" />
                <div class="small mb-1" name="mahh">
                    <?php echo $id ?>
                </div>
                <h1 class="display-5 fw-bolder" name="tenhh">
                    <?php echo $tenhh ?>
                </h1>
                <div class="fs-5 mb-5">
                    <h2 class="text-danger">
                        <?php


                        echo $dongia


                            ?>Đ
                        <?php
                        for ($i = 1; $i <= floor($average); $i++) {
                            echo '<i class="bi bi-star-fill text-warning"></i>';
                        }
                        ?>
                    </h2>
                </div>
                <p class="lead">
                    <?php echo $mota ?>
                </p>
                <?php if($soluongton>0) { ?>
                <div class="d-flex">
                    <span> Số Lượng:</span>
                    <input class="form-control text-center me-3" id="soluong" type="number" value="1" name="soluong"
                        style="width:90px" /><br>
                    <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div><?php }else{
                    echo "this product is out of stock";
                } ?>
            </div>
        </div>
    </div>
</form>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="d-flex flex-column col-md-8">
            <div class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-4">


                <div class="d-flex flex-column ml-3">
                    <div class="d-flex flex-row post-title">
                        <h5>Tổng số bình luận:
                            <?php echo $count ?>
                        </h5>
                    </div>

                </div>
            </div>
            <form class="coment-bottom bg-white p-2 px-4"
                action="index.php?action=hanghoa&act=comment&id=<?php echo $_GET['id'] ?>" method="post">
                <?php if (isset($_SESSION['makh'])) { ?>
                    <div class="d-flex flex-row add-comment-section mt-4 mb-4">

                        <label for="rating" class="m-2">Rate: </label>
                        <select name="rating" id="rating">
                            <option value=1>1 star</option>
                            <option value=2>2 stars</option>
                            <option value=3>3 stars</option>
                            <option value=4>4 stars</option>
                            <option value=5>5 stars</option>
                        </select>


                        <input type="text" class="form-control mr-3" placeholder="Add comment" name="comment"><button
                            class="btn btn-primary" type="submit">Comment</button>
                    </div>
                <?php } else { ?>
                    <div class="d-flex flex-row add-comment-section mt-4 mb-4"><button class="btn btn-primary p-2"
                            type="button">Login to write a comment</button></div>
                <?php } ?>
                <?php
                while ($set = $kh->fetch()) {
                    ?>
                    <div class="commented-section mt-2 mb-5">
                        <div class="d-flex flex-row align-items-center commented-user">
                            <h5 class="mr-2">
                                <?php $name = $cmt->getusername($set['makh']);
                                echo $name[0]; ?>
                            </h5><span class="dot mb-1"></span><span class="mb-1 ml-2">&nbsp
                                <?php echo $set['ngaybl'] ?>
                            </span>
                            <span class="me-2">
                                <?php
                                // Output the full star icons
                                for ($i = 1; $i <= floor($set['sao']); $i++) {
                                    echo '<i class="bi bi-star-fill text-warning"></i>';
                                }
                                ?>
                            </span>
                        </div>
                        <div class="comment-text-sm">
                            <?php echo $set['noidung'] ?>
                        </div>

                    </div>
                <?php } ?>


            </form>
        </div>
    </div>
</div>