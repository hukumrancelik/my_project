<?php
 
include("dataBase.php");


#kadin_yas
$query_kadin_ort= $db->query("SELECT AVG(users.yas) as ort_kadin
FROM users
WHERE users.cinsiyet='Kadın' ", PDO::FETCH_ASSOC);
if ( $query_kadin_ort->rowCount() )
{
     

     foreach( $query_kadin_ort as $row_kadin_ort ){
          
           
  
    
    $kadin_kadin_ort=$row_kadin_ort['ort_kadin'];
        
}


}

#erkek_yas
$query_erkek_ort = $db->query("SELECT AVG(users.yas) as ort_erkek
FROM users
WHERE users.cinsiyet='Erkek' ", PDO::FETCH_ASSOC);
if ( $query_erkek_ort->rowCount() )
{
     

     foreach( $query_erkek_ort as $row_erkek_ort ){
          
           
  
    
    $erkek_ort=$row_erkek_ort['ort_erkek'];
        
}


}





$dataPoints_6 = array( 
	array("y" => $erkek_ort, "label" => "ERKEK" ),
	array("y" => $kadin_ort, "label" => "KADIN" )
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer_2", {
	animationEnabled: true,
	theme: "light3",
	title:{
		text: "YAŞ ARALĞINA GÖRE BAŞVURU SAYILARI"
	},
	axisY: {
		title: "Yaş"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer_2" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>              