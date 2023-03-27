<?php
$act = 'regis';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

$errors = array();
switch ($act) {
    case 'regis':
        $tenkh = '';
            $diachi = '';
            $sodt = '';
            $tendn = '';
            $pass = '';
            $email = '';
            $rpass = '';
        include "./view/regis.php";
        break;

    case "insert":
       
        
            $tenkh = trim($_POST['txttenkh']);
            $diachi = trim($_POST['txtdiachi']);
            $sodt = trim($_POST['txtsodt']);
            $tendn = trim($_POST['txtusername']);
            $pass = $_POST['txtpass'];
            $email = trim($_POST['txtemail']);
            $rpass = trim($_POST['retypepassword']);
            if (empty($tenkh)) {
                $errors['username'] = "Please enter a username.";
            } else if (!preg_match("/^[a-z\s]+$/", $tenkh)) {
                $errors['username'] = "Your name can only contain letters.";
            }
            if (empty($tenkh)) {
                $errors['username'] = "Please enter a username.";
            } else if (!preg_match("/^[a-zA-Z0-9_\-]+$/", $tendn)) {
                $errors['username'] = "Username can only contain letters, numbers, hyphens, and underscores.";
            }
            if (empty($email)) {
                $errors['email'] = "Please enter an email address.";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Please enter a valid email address.";
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

            $mhpass = md5($pass);
            $ur = new regis();
            $cehc = $ur->exitUser($tendn);


            if ($cehc != false) {
                echo '<script>alert("Your usernname is already exist, choose another username to regis")</script>';
                include "./view/regis.php";
            
                
            }else{
                if (empty($errors)) {
                    $ur->Insert($tenkh, $tendn, $mhpass, $email, $diachi, $sodt);
                    echo '<script>alert("regis successful")</script>';
                    include "./view/login.php";

                }else{
                    echo '<script>alert("regis fail, please check your infomation again")</script>';
                include "./view/regis.php";
                }

            }
        ;
        break;
}

?>