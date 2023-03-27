<?php


  

  ?>
  
<section class="py-5">


    <div class="container px-4 px-lg-5 ">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            
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
                                    href="index.php?action=hanghoa&id=<?php echo $set['MASP'] ?>">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="w-25 text-center   m-auto">
<nav>
  <ul class="pagination">
  <?php

if ($current_page > 1 && $page > 1) {
    
    echo '<li class="page-item"><a class="page-link" href="index.php?action=home&page='.($current_page - 1) . '">Prev</a></li>';
}
for ($i = 1; $i <= $page; $i++) {
    ?>
    <li  class="page-item"><a  class="page-link" href="index.php?action=home&page=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php }
            if ($current_page < $page && $page > 1) {
                echo '<li class="page-item"><a class="page-link" href="index.php?action=home&page=' . ($current_page + 1) . '">Next</a></li>';
            } ?>
  </ul>
</nav>
          
           
</section>