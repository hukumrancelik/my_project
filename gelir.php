<?php
include("dataBase.php");

#Net asgari ücretin %50’sine kadar geliri olanlar
$sorgu_1= $db->query("SELECT COUNT(sorular.yardim_id) as sg1
FROM sorular
WHERE sorular.gelir='Net asgari ücretin %50’sine kadar geliri olanlar'", PDO::FETCH_ASSOC);
if ( $sorgu_1->rowCount() )
{
     

     foreach( $sorgu_1 as $sg1 ){
          
           
  
    
    $a1=$sg1['sg1'];
        
}


}

#Net asgari ücretin %50’sinden fazla olup,%100’üne kadar
$sorgu_2= $db->query("SELECT COUNT(sorular.yardim_id) as sg2
FROM sorular
WHERE sorular.gelir='Net asgari ücretin %50’sinden fazla olup,%100’üne kadar geliri olanlar' ", PDO::FETCH_ASSOC);
if ( $sorgu_2->rowCount() )
{
     

     foreach( $sorgu_2 as $sg2 ){
          
           
  
    
    $a2=$sg2['sg2'];
        
}


}

#Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar
$sorgu_3= $db->query("SELECT COUNT(sorular.yardim_id) as sg3
FROM sorular
WHERE sorular.gelir='Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar' ", PDO::FETCH_ASSOC);
if ( $sorgu_3->rowCount() )
{
     

     foreach( $sorgu_3 as $sg3 ){
          
           
  
    
    $a3=$sg3['sg3'];
        
}


}
$dataPoints = array( 
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
 
var chart = new CanvasJS.Chart("chartContainer", {
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