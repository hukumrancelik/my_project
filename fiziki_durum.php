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




#İyi
$durumIyi= $db->query("SELECT COUNT(sorular.yardim_id) as iyiSayisi
FROM sorular
WHERE sorular.fiziki_durum='İyi' ", PDO::FETCH_ASSOC);
if ( $durumIyi->rowCount() )
{
     

     foreach( $durumIyi as $diyi ){
          
           
  
    
    $d1=$diyi['iyiSayisi'];
     $d1=$d1/$tplm*(100);
        
}


}


#Normal
$durumNormal= $db->query("SELECT COUNT(sorular.yardim_id) as NormalSayisi
FROM sorular
WHERE sorular.fiziki_durum='Normal' ", PDO::FETCH_ASSOC);
if ( $durumNormal->rowCount() )
{
     

     foreach( $durumNormal as $Niyi ){
          
           
  
    
    $d2=$Niyi['NormalSayisi'];
      $d2=$d2/$tplm*(100);
        
}


}

#Kötü
$durumKotu= $db->query("SELECT COUNT(sorular.yardim_id) as KotuSayisi
FROM sorular
WHERE sorular.fiziki_durum='Kötü' ", PDO::FETCH_ASSOC);
if ( $durumKotu->rowCount() )
{
     

     foreach( $durumKotu as $dKotu ){
          
           
  
    
    $d3=$dKotu['KotuSayisi'];
      $d3=$d3/$tplm*(100);
        
}

}

$dataPoints = array( 
	array("label"=>"İyi", "symbol" => "İyi","y"=>$d1),
	array("label"=>"Kötü", "symbol" => "Normal","y"=>$d2),
	array("label"=>"Normal", "symbol" => "Kötü","y"=>$d3)
	
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
		text: "Ev Fiziki Duruma Göre"
	},
	data: [{
		type: "doughnut",
		indexLabel: "{symbol} - {y}",
		yValueFormatString: "#,##0.0\"%\"",
		showInLegend: true,
		legendText: "{label} : {y}",
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