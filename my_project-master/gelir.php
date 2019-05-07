<?php
include("dataBase.php");

#Net asgari ücretin %50’sine kadar geliri olanlar
$sorgu_1_gelir= $db->query("SELECT COUNT(sorular.yardim_id) as sg1
FROM sorular
WHERE sorular.gelir='Net asgari ücretin %50’sine kadar geliri olanlar'", PDO::FETCH_ASSOC);
if ( $sorgu_1_gelir->rowCount() )
{
     

     foreach( $sorgu_1_gelir as $sg1_gelir ){
          
           
  
    
    $a1=$sg1_gelir['sg1'];
        
}


}

#Net asgari ücretin %50’sinden fazla olup,%100’üne kadar
$sorgu_2_gelir= $db->query("SELECT COUNT(sorular.yardim_id) as sg2
FROM sorular
WHERE sorular.gelir='Net asgari ücretin %50’sinden fazla olup,%100’üne kadar geliri olanlar' ", PDO::FETCH_ASSOC);
if ( $sorgu_2_gelir->rowCount() )
{
     

     foreach( $sorgu_2_gelir as $sg2_gelir ){
          
           
  
    
    $a2=$sg2_gelir['sg2'];
        
}


}

#Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar
$sorgu_3_gelir= $db->query("SELECT COUNT(sorular.yardim_id) as sg3
FROM sorular
WHERE sorular.gelir='Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar' ", PDO::FETCH_ASSOC);
if ( $sorgu_3_gelir->rowCount() )
{
     

     foreach( $sorgu_3_gelir as $sg3_gelir ){
          
           
  
    
    $a3=$sg3_gelir['sg3'];
        
}


}
$dataPoints_3 = array( 
	array("y" => $a1,"label" => "Net asgari ücretin %50’sine kadar olanlar" ),
	array("y" => $a2,"label" => "Net asgari ücretin %50’sinden fazla olup,%100’üne kadar olanlar" ),
	array("y" => $a3,"label" => "Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar" )
	

);
 
?>




<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart_3 = new CanvasJS.Chart("chartContainer_3", {
	animationEnabled: true,
	title:{
		text: "GELİR DURUMUNA GÖRE KİŞİ DAĞILIMI"
	},
	axisY: {
		title: "Kişi Sayısı ",
		prefix: "",
		suffix:  ""
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0 kişi",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints_3, JSON_NUMERIC_CHECK); ?>
	}]
});
chart_3.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                