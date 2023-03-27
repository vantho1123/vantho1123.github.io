<?php
$act = 'login';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'login':
        include "./view/login.php";
        break;

    case "login_action":

        if (isset($_POST['txtusername']) && isset($_POST['txtpassword'])) {
            $user = $_POST['txtusername'];
            $passw = $_POST['txtpassword'];
            $pass = md5($passw);
            $ur = new regis();
            $new = $ur->loginUser($user, $pass);
            if ($new != false) {
                $_SESSION['makh'] = $new['makh'];
                $_SESSION['tenkh'] = $new['tenkh'];
                $_SESSION['username'] = $new['username'];
                $_SESSION['admin']=$new['vaitro'];
                echo '<script>alert("login successful")</script>';
                if($_SESSION['admin']==0){
                echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';}
                else{
                    echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=adminproduct&act=home"/>';
                }
            } else {
                echo '<script>alert("login unsuccessful")</script>';
                include "./view/login.php";
            }
        }
        ;
        break;
    case ('logout'):

        unset($_SESSION['makh']);
        unset($_SESSION['tenkh']);
        unset($_SESSION['username']);
        unset($_SESSION['cart']);
        unset($_SESSION['admin']);
        echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
        break;
    case ('changepass'):
        
        $errors = array();
        if (isset($_SESSION['makh'])) {

            if (isset($_POST['oldpass'])) {
                $us = new regis();
                $tendn = $_SESSION['makh'];
                $oldpass = md5($_POST['oldpass']);
                $pass = $_POST['newpass'];
                $rpass = $_POST['rnewpass'];
                $makh = $_SESSION['makh'];
                $check = $us->getoldpass($makh);
                if (empty($pass)) {
                    $errors['oldpass'] = "Please enter old password.";
                }
                if (empty($pass)) {
                    $errors['password'] = "Please enter a password.";
                } else if (!preg_match("/^[A-Z]{1}([\w\.@!#$%^&*()]+){7}$/", $pass)) {
                    $errors['password'] = "Password must be at least 7 characters.";
                }
                if (empty($rpass)) {
                    $errors['confirm_password'] = "Please confirm your password.";
                } else if ($pass !== $rpass) {
                    $errors['confirm_password'] = "Passwords do not match.";
                }
                $pass = md5($pass);
                $rpass = md5($rpass);
                if (empty($errors)) {
                    if ($check[0] == $oldpass) {
                        $us->changepass($makh, $pass);
                        echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
                    } else {
                        $errors['confirm_passwordd'] = "Old password is wrong, check your infomation again";

                    }

                }
            }
        }
        include "./view/changepass.php";


        break;
}
?>