<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", { "packages": ["corechart"] });
    <?php
    ?>
    google.charts.setOnLoadCallback(function () { drawChart("<?php echo $year ?>", <?php echo $json_data[$year] ?>); });
    function drawChart(year, data) {
        var options = {
            title: "Monthly Data for " + year,
            width: 600,
            height: 400
        }
        var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
        chart.draw(google.visualization.arrayToDataTable(data), options);
    }
</script>



<div id="chart_div"></div>
<form method="post" action="index.php?action=chart&act=year">
    <select name="year">
        <?php foreach ($json_data as $year => $data){
                echo "<option value=".$year.">".$year."</option>";}
?>
    </select>
    <input type="submit" value="Submit">
</form>