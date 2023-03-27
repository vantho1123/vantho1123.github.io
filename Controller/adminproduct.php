<?php
if ($_GET['action'] == "adminproduct") {
  $hh = new hanghoa();
  $products = $hh->gethanghoamoi();
}
;
$act = 'addnew';
if (isset($_GET['act'])) {
  $act = $_GET['act'];
}
switch ($act) {
  case "home":
    include "./View/adminproduct.php";
    break;
  case "addnew":
    $hh = new hanghoa();
    $loai = $hh->getNSX();
    include "./View/insertproduct.php";
    break;
  case 'addnew_action':
    $tenhh = $_POST['tenhh'];
    $gia = $_POST['gia'];
    $hinh = $_FILES['image']['name'];
    $nhom = $_POST['nsx'];
    $soluotxem = $_POST['soluotxem'];
    $mota = $_POST['mota'];
    $slton = $_POST['soluongton'];
    $admin = new CRUDadmin();

    $check = $admin->addproduct($tenhh, $gia, $hinh, $nhom, $soluotxem, $mota, $slton);
    if ($check == false) {
      echo '<script>alert("insert product fail, please check your infomation again")</script>';
    } else {
      echo '<script>alert("insert successful")</script>';
      $admin->uploadimage();
      include "./View/adminproduct.php";
      echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminproduct&act=home"/>';
    }
    break;
  case "delete":
    $mahh = $_GET['id'];
    $admin = new CRUDadmin();
    $admin->deleteproduct($mahh);
    echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminproduct&act=home"/>';
    include "./View/adminproduct.php";
    break;
  case "update":
    $mahh = $_GET['id'];
    $admin = new hanghoa();
    $loai = $admin->getNSX();
    $detail=$admin->gethanghoaid($mahh);
    include "./View/updateproduct.php";
    break;
  case "update_action":
    $mahh = $_GET['id'];
    $tenhh = $_POST['tenhh'];
    $gia = $_POST['gia'];
    $hinh = $_FILES['image']['name'];
    $nhom = $_POST['nsx'];
    $soluotxem = $_POST['soluotxem'];
    $mota = $_POST['mota'];
    $slton = $_POST['soluongton'];
    $mahh = $_GET['id'];
    $admin = new CRUDadmin();
    $check = $admin->updateproduct($mahh, $tenhh, $gia, $hinh, $nhom, $nhom, $mota, $slton);
    if ($check == false) {
      echo '<script>alert("update product fail, please check your infomation again")</script>';
    } else {
      echo '<script>alert("update successful")</script>';
      $admin->uploadimage();
      echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminproduct&act=home"/>';
    }
    break;
    ;
    case "import":



        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = new CRUDadmin();
            if ($_FILES["fileproduct"]["error"] == 0) {
                $tmp_name = $_FILES["fileproduct"]["tmp_name"];
                if ($_FILES['fileproduct']['type'] == 'text/csv') {
                    file_put_contents($tmp_name, str_replace("\xBB\xEF\xBF", "", file_get_contents($tmp_name)));
                    $name = basename($_FILES["fileproduct"]["name"]);
                    $target_dir = "uploads";
                    $target_file = $target_dir . $name;
                    move_uploaded_file($tmp_name, $target_file);
                    // Mở file và đọc dữ liệu
                    $file = fopen($target_file, "r");
                    //skip line 1
                    fgetcsv($file);

                    while (($data = fgetcsv($file, 1000, ';')) !== FALSE) {
                        // Xử lý dữ liệu và lưu vào cơ sở dữ liệu
                  
                        $db->addproduct($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6]);
                    }
                    fclose($file);

                    // Xóa file tạm trên server
                    unlink($target_file);

                    // Hiển thị thông báo thành công
                    echo '<script>alert("update successful")</script>'; 
                    echo '<meta http-equiv="refresh" content="1; url=./index.php?action=adminproduct"/>';
                } else {
                    echo "<script>
                    Swal.fire(
                        'Import Không Thành Công',
                        'File không phải csv',
                        'error'
                    );
                </script>";
                }
            } else {
                // Hiển thị thông báo lỗi
                echo "<script>
                    Swal.fire(
                        'Import Không Thành Công',
                        '',
                        'error'
                    );
                </script>";
            }
        
}
      break;

}





?>