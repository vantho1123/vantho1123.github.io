<?php
class regis
{
    function Insert($tenkh, $user, $pass, $email, $diachi, $sdt)
    {
        $db = new connect();
        $query = "insert into khachhang1(makh,tenkh,username,matkhau,email,diachi,sodienthoai)
        value(NULL,'$tenkh','$user','$pass','$email','$diachi','$sdt')
        ";
        $db->exec($query);
        return $query;
    }
    function loginUser($username, $password)
    {
        $db = new connect();
        $select = "select * from khachhang1 where username='$username' and matkhau='$password'";
        $result = $db->getlist($select);
        $result = $result->fetch();
        return $result;
    }
    function exitUser($tendn)
    {
        $db = new connect();
        $select = "select * from khachhang1 where username='$tendn'";
        $result = $db->getInstance($select);
        return $result;
    }
    function updateUser($makh, $tenkh, $sodt, $diachi)
    {
        $db = new connect();
        $select = "UPDATE khachhang1
        SET tenkh = '$tenkh', diachi= '$diachi',sodienthoai='$sodt'
        WHERE makh = $makh";
        $resul = $db->exec($select);
        return $resul;
    }
    public function changepass($id, $password)
    {
        $db = new connect();
        $select = "UPDATE khachhang1
        SET matkhau='$password'
        WHERE makh = $id";
        $resul = $db->exec($select);
        return $resul;
    }
    public function getoldpass($id)
    {
        $db = new connect();
        $select = "SELECT matkhau FROM `khachhang1` WHERE makh=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    public function getemailold($email)
    {
        $db = new connect();
        $select = "SELECT email FROM `khachhang1` WHERE email='$email'";
        $result = $db->getInstance($select);
        return $result;
    }
    function sendEmail($mail, $receiver, $message)
    {
        //Server settings
        $mail->SMTPDebug = 0; // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'vantho1198@gmail.com'; // SMTP username
        $mail->Password = 'umjidrotxtphefhg'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to

        //Recipients
        $mail->setFrom('vantho1710@gmail.com', 'Mailer');
        $mail->addAddress($receiver);
        // Add a recipient
        // $mail->addAttachment('404.jpg', 'img');
        $mail->isHTML(true);
        $mail->Subject = 'Notification';
        $mail->Body = $message;
        $mail->send();
    }
    public function changeuser($email,$username,$password)
    {
        $db= new connect();
        $select="UPDATE khachhang1
        SET username='$username', matkhau='$password'
        WHERE email = '$email'";
        $resul=$db->exec($select);
        return $resul;
    }
    public function getid($username)
    {
        $db = new connect();
        $select = "SELECT makh FROM `khachhang1` WHERE username='$username'";
        $result = $db->getInstance($select);
        return $result;
    }
    public function getusername($id)
    {
        $db = new connect();
        $select = "SELECT username FROM `khachhang1` WHERE makh=$id";
        $result = $db->getInstance($select);
        return $result;
    }

}
?>