<?php 
class chart{
    public function __construct(){

    }
    public function getordermonthly()
    {
        $db=new connect();
        $select="
        SELECT DATE_FORMAT(ngaydat, '%Y') AS year, DATE_FORMAT(ngaydat, '%Y-%m') AS month, sum(tongtien) AS total FROM hoadon1 GROUP BY year, month ORDER BY year, month";
        $result=$db->getlist($select);
        return $result;
    }
}
?>