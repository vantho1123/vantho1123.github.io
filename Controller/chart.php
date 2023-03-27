<?php 
$chart = new chart();
$resul=$chart->getordermonthly();
$yearly_data = array();
while ($row = $resul->fetch()) {
    $year = $row['year'];
    $month = $row['month'];
    $count = (int) $row['total'];
    if (!isset($yearly_data[$year])) {
        $yearly_data[$year] = array(
            array('Month', 'Total')
        );
    }
    $yearly_data[$year][] = array($month, $count);
}
foreach ($yearly_data as $year => $data) {
    $json_data[$year] = json_encode($data);

}
if(isset($_GET['act'])){
    $year=$_POST['year'];
}
include "./View/chart.php";
?>