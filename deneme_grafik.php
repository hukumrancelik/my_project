<?php 
include("dataBase.php");

$query = $db->query("SELECT COUNT(users.id)as kadin_sayisi
FROM users WHERE users.cinsiyet='Kadın' ", PDO::FETCH_ASSOC);
if ( $query->rowCount() )

 
{
     

     foreach( $query as $row ){
          
           
  
    
    $kadin=$row['kadin_sayisi'];
        
}


}




$dataPoints = array(
  array("label"=> "Erkek", "y"=> 4),
  array("label"=> "Kadın", "y"=> $kadin),
 
);
  
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  title:{
    text: "Cinsiyet Dağılımına Göre Başvuru Sayıları"
  },
  subtitles: [{
    text: "Başvuru Sayısı"
  }],
  data: [{
    type: "pie",
    showInLegend: "true",
    legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabel: "{label} - #percent%",
    yValueFormatString: "฿#,##0",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                      