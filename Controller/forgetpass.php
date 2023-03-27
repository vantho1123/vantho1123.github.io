<?php



$act = 'fgpass';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case "fgpass":
        include "./View/fgpass.php";
        break;
    case "fgpass_action":
        $errors = array();
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $_SESSION['email'] = array();
            $us = new regis();
            $checkemail = $us->getemailold($email);
            if ($checkemail == false) {
                echo '<script>alert("Email is not exist")</script>';
            } else {
                $code = random_int(10000, 100000);
                $item = array(
                    'code' => $code,
                    'email' => $email
                );
                $_SESSION['email'][] = $item;
                $mail = new PHPMailer(true);
                $mail->IsSMTP(); //Sets Mailer to send message using SMTP
                $mail->Host = 'smtp.gmail.com'; //Sets the SMTP hosts of your Email hosting, this for Godaddy
                $mail->Port = 587; //Sets the default SMTP server port
                $mail->SMTPAuth = true; //Sets SMTP authentication. Utilizes the Username and Password variables
                $mail->Username = 'vantho1198@gmail.com'; //Sets SMTP username
                $mail->Password = 'umjidrotxtphefhg'; //Phplytest20@php					//Sets SMTP password
                $mail->SMTPSecure = 'tls'; //Sets connection prefix. Options are "", "ssl" or "tls"
                $mail->From = 'phanvantho1710@gmail.com'; //Sets the From email address for the message
                $mail->FromName = 'Tho'; //Sets the From name of the message
                $mail->AddAddress($email, "user"); //Adds a "To" address
                //$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
                $mail->WordWrap = 50; //Sets word wrapping on the body of the message to a given number of characters
                $mail->IsHTML(true); //Sets message type to HTML				
                $mail->Subject = "Reset Password"; //Sets the Subject of the message
                $mail->Body = "Your code: " . $code; //An HTML or plain text message body
                if ($mail->Send()) //Send an Email. Return true on success or false on error
                {
                    include "./View/renewuser.php";
                    echo '<script>alert("Send email successful")</script>';
                } else {
                    echo '<script>alert("Fail to send code")</script>';
                }

            }
        }
        break;
    case "renew":
        $errors = array();
        if (isset($_POST['code'])) {
            $us = new regis();
            $errors = array();
            $tendn = $_POST['username'];
            $pass = $_POST['pass'];
            $rpass =$_POST['repeatpass'];
            $code=$_POST['code'];
            $email='';
            $sendedcode="";
            foreach ($_SESSION['email'] as $key => $item) {
                $email= $item['email'];
                $sendedcode= $item['code'];
            }
            if($code==$sendedcode){
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
            if (empty($errors)) {
                $us->changeuser($email,$tendn,$pass);
                echo '<script>alert("Send email successful")</script>';
                echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=login"/>';

            }
        }
        else{
            $errors['clearcode']="please enter your code";
        }
        }
        else{
            $errors['code']="your code is not right";
        }
        include "./View/renewuser.php";
        break;
}

?>