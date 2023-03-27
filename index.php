<?php

session_start();
set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Online wallet shop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="Content/CSS/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/dd8a2a2103.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
    <?php

    include_once "view/header.php";
    ?>
    <?php
              $ctrl='home';
              if(isset($_GET['action'])){
                $ctrl=$_GET['action'];
              }
              include 'Controller/'.$ctrl.'.php';
              

              ?>
    <?php
    include_once "View/footer.php";
    ?>
      

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
