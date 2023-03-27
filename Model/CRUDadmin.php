<?php
class CRUDadmin{
    public function __construct(){ }
    public function addproduct($tensp,$gia,$hinh,$nhom,$soluotxem,$mota,$soluongton){
        $db=new connect();
        $select= "INSERT INTO `hanghoa` (`MASP`, `TENSP`, `GIA`, `hinh`, `nhom`, `soluotxem`, `mota`, `soluongton`) VALUES 
        (NULL, '$tensp', $gia, '$hinh', $nhom, $soluotxem, '$mota', $soluongton);";
        $resul=$db->exec($select);
        return $resul;
    }
    public function updateproduct($masp,$tensp,$gia,$hinh,$nhom,$soluotxem,$mota,$soluongton){
        $db=new connect();
        $select= "UPDATE `hanghoa` SET `TENSP` = '$tensp', `GIA` = $gia, `hinh` = '$hinh', `nhom` = '$nhom', `soluotxem` = $soluotxem, `mota` = '$mota', `soluongton` = $soluongton WHERE `hanghoa`.`MASP` = $masp";
        $resul=$db->exec($select);
        return $resul;
    }
    public function deleteproduct($masp)
    {
        $db=new connect();
        $query="DELETE  FROM hanghoa WHERE `hanghoa`.`MASP` = $masp";
        $db->exec($query);
    }
    function uploadimage()
    {
        // b1: tạo thư mục lấy hình về
        $target_dir="Content/img/";
        //b2: lấy tên hình về gắn vô trong đường dẫn
        //Content/imagetourdien/giaythethao.jpg
        $target_file=$target_dir.basename($_FILES['image']['name']);
        // b3: lấy phần mở rộng về, và đổi về cùng 1 định dạng chữ hoa hoặc thường
        $targetFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // b4: kiểm tra xem hình đó có thật sự được đưa lên server ko?
        $uploadhinh=1;
        if(isset($_POST['submit']))
        {
            // lấy hình từ server về getimagesize
            $check=getimagesize($_FILES['image']['tmp_name']);
            if($check!==false)
            {
                $uploadhinh=1;
            }
            else
            {
                $uploadhinh=0;
                echo '<script> alert("hình ko có");</script>';
            }
        }
        // kiêm tra hình có tồn tại trong thư mục rồi thì báo lỗi
        if(file_exists($target_file))
        {
            $uploadhinh=0;
            echo '<script> alert("hình đã tồn tại");</script>';
        }
        // kiểm tra dung lượng hình up lên ko đc vượt quá 500kb
        if($_FILES['image']['size']>500000)
        {
            $uploadhinh=0;
            echo '<script> alert("hình vượt quá kích thước");</script>';
        }
        // kiểm tra có phải là hình hay không
        if($targetFileType !='jpg' && $targetFileType!='jpeg'
         && $targetFileType !='png' && $targetFileType!='gif')
        {
            $uploadhinh=0;
            echo '<script> alert("Ko là hình");</script>';
        }
        // khi ko còn lỗi thì lấy hình từ server về thư mục
        if($uploadhinh==1)
        {
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
            {
                echo '<script> alert("Upload hình thành công");</script>';
            }
            else
            {
                echo '<script> alert("Upload hình ko thành công");</script>';
            }
        }
    }
    public function updateorder($masohd,$makh,$ngaydat){
        $db=new connect();
        $select= "UPDATE `hoadon1` SET `makh` = $makh, `ngaydat` = '$ngaydat' WHERE `hoadon1`.`masohd` = $masohd";
        $resul=$db->exec($select);
        return $resul;
    }
    public function deleteorder($masp)
    {
        $db=new connect();
        $query="DELETE  FROM hoadon1 WHERE `hoadon1`.`masohd` = $masp";
        $db->exec($query);
    }
    public function getorder($masohd)
    {
        $db=new connect();
        $select="select * from hoadon1 where masohd=$masohd";
        $result=$db->getInstance($select);
        return $result;
    }
    public function getctsp($masohd)
    {
        $db=new connect();
        $select="select * from cthoadon1 where mactsp=$masohd";
        $result=$db->getInstance($select);
        return $result;
    }
    public function updateorderdetail($mactsp,$mahh,$soluongmua,$thanhtien){
        $db=new connect();
        $select= "UPDATE `cthoadon1` SET `mahh` = $mahh, `soluongmua` = $soluongmua, `thanhtien` = $thanhtien WHERE `cthoadon1`.`mactsp` = $mactsp";
        $resul=$db->exec($select);
        return $resul;
    }
    public function getttctsp($masohd)
    {
        $db=new connect();
        $select="select * from cthoadon1 where masohd=$masohd";
        $result=$db->getlist($select);
        return $result;
    }
    public function updateproductdetail($masp,$tensp)
    {
        $db=new connect();
        $select= "UPDATE `ctsp` SET `tennsx` = '$tensp' WHERE `ctsp`.`masp` = $masp";
        $resul=$db->exec($select);
        return $resul;
    }
    public function deleteproductdetail($id)
    {
        $db=new connect();
        $query="DELETE  FROM ctsp WHERE `ctsp`.`masp` = $id";
        $resul=$db->exec($query);
        return $resul;
    }
    public function insertproductdetail($name)
    {
        $db=new connect();
        $query="INSERT INTO `ctsp` (`masp`, `tennsx`) VALUES (NULL, '$name')";
        $resul=$db->exec($query);
        return $resul;
    }
}
?>
