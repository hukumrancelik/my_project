<?php

include("dataBase.php");

#toplam
$toplamSayi= $db->query("SELECT COUNT(sorular.yardim_id) as toplam
FROM sorular", PDO::FETCH_ASSOC);
if ( $toplamSayi->rowCount() )
{
     

     foreach( $toplamSayi as $tp ){
          
           
  
    
    $tplm=$tp['toplam'];
 
        
}
}



#Kendi Evi(Brüt 70 m2 den fazla ise)
$sorgu_1= $db->query("SELECT COUNT(sorular.yardim_id) as sg1
FROM sorular
WHERE sorular.evin_durumu='Kendi Evi (Brüt 70 m2 den fazla ise)'", PDO::FETCH_ASSOC);
if ( $sorgu_1->rowCount() )
{
     

     foreach( $sorgu_1 as $sg1 ){
          
           
  
    
    $a1=$sg1['sg1'];
    $a1=$a1/$tplm*(100);
        
}


}

#Kendi Evi(Brüt 70 m2 den küçük ise)
$sorgu_2= $db->query("SELECT COUNT(sorular.yardim_id) as sg2
FROM sorular
WHERE sorular.evin_durumu='Kendi Evi(Brüt 70 m2 den küçük ise)' ", PDO::FETCH_ASSOC);
if ( $sorgu_2->rowCount() )
{
     

     foreach( $sorgu_2 as $sg2 ){
          
           
  
    
    $a2=$sg2['sg2'];
    $a2=$a2/$tplm*(100);
        
}


}

#Kirada
$sorgu_3= $db->query("SELECT COUNT(sorular.yardim_id) as sg3
FROM sorular
WHERE sorular.evin_durumu='Kirada' ", PDO::FETCH_ASSOC);
if ( $sorgu_3->rowCount() )
{
     

     foreach( $sorgu_3 as $sg3 ){
          
           
  
    
    $a3=$sg3['sg3'];
     $a3=$a3/$tplm*(100);
        
}


}
 
#Kirası karşılanıyor
$sorgu_4= $db->query("SELECT COUNT(sorular.yardim_id) as sg4
FROM sorular
WHERE sorular.evin_durumu='Kirası karşılanıyor' ", PDO::FETCH_ASSOC);
if ( $sorgu_4->rowCount() )
{
     

     foreach( $sorgu_4 as $sg4 ){
          
           
  
    
    $a4=$sg4['sg4'];
     $a4=$a4/$tplm*(100);

        
}


}
 


$dataPoints = array( 
	array("label"=>"Kendi Evi(Brüt 70 m2 den fazla ise)", "y"=>$a1),
	array("label"=>"Kendi Evi(Brüt 70 m2 den küçük ise)", "y"=>$a2),
	array("label"=>"Kirada", "y"=>$a3),
	array("label"=>"Kirası karşılanıyor", "y"=>$a4)
)
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "EV DURUMU"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "\"%\"#,##0.00",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
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