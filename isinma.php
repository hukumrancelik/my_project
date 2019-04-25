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




#Soba
$durumSoba= $db->query("SELECT COUNT(sorular.yardim_id) as SobaSayisi
FROM sorular
WHERE sorular.isinma_durumu='Soba' ", PDO::FETCH_ASSOC);
if ( $durumSoba->rowCount() )
{
     

     foreach( $durumSoba as $dSoba )   {
          
           
  
    
    $e1=$dSoba['SobaSayisi'];
     $e1=$e1/$tplm*(100);
        
}


}


#Kolarifer
$durumKalo= $db->query("SELECT COUNT(sorular.yardim_id) as KaloSayisi
FROM sorular
WHERE sorular.isinma_durumu='Kalorifer' ", PDO::FETCH_ASSOC);
if ( $durumKalo->rowCount() )
{
     

     foreach( $durumKalo as $dKalo ){
          
           
  
	$e2=$dKalo['KaloSayisi'];
     $e2=$e2/$tplm*(100);
}
}





#Diğer
$durumDiger= $db->query("SELECT COUNT(sorular.yardim_id) as DigerSayisi
FROM sorular
WHERE sorular.isinma_durumu='Diğer' ", PDO::FETCH_ASSOC);
if ( $durumDiger->rowCount() )
{
     

     foreach( $durumDiger as $dDiger ){
          
           
  
	$e3=$dDiger['DigerSayisi'];
     $e3=$e3/$tplm*(100);
}


}



$dataPoints = array( 
	array("label"=>"Soba", "y"=>$e1),
	array("label"=>"Kalorifer", "y"=>$e2),
	array("label"=>"Diger", "y"=>$e3)
	
)
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Başvuru Yapan Evlerin Isınma Durumu"
	},
	data: [{
		type: "pyramid",
		indexLabel: "{label} -% {y}",
		yValueFormatString: "#,##0.00",
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