
<?php 
include("dataBase.php");

#kadin_sayisi
$query_kadin= $db->query("SELECT COUNT(users.id)as 'kadin_sayisi'
FROM users WHERE users.cinsiyet='Kadın' ", PDO::FETCH_ASSOC);
if ( $query_kadin->rowCount() )
{
     

      foreach( $query_kadin as $row_kadin ){
      $kadin=$row_kadin['kadin_sayisi'];
        
}
}

#erkek_sayisi
$query_erkek = $db->query("SELECT COUNT(users.id)as 'erkek_sayisi'
FROM users WHERE users.cinsiyet='Erkek' ", PDO::FETCH_ASSOC);
if ( $query_erkek->rowCount() )
{
     

     foreach( $query_erkek as $row_erkek ){
      $erkek=$row_erkek['erkek_sayisi'];
        
}
}




  $dataPoints_1 = array(
  array("label"=> "Erkek", "y"=> $erkek),
  array("label"=> "Kadın", "y"=> $kadin),
 
                    );

 ?>





  <!--------------->

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
 


$dataPoints_2 = array( 
  array("label"=>"Kendi Evi(Brüt 70 m2 den fazla ise)", "y"=>$a1),
  array("label"=>"Kendi Evi(Brüt 70 m2 den küçük ise)", "y"=>$a2),
  array("label"=>"Kirada", "y"=>$a3),
  array("label"=>"Kirası karşılanıyor", "y"=>$a4)
)

?>

<!-------------------------->

<?php 

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

<!-------------GRAFİK 4------------------>

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

$dataPoints_4= array( 
  array("label"=>"İyi", "symbol" => "İyi","y"=>$d1),
  array("label"=>"Kötü", "symbol" => "Normal","y"=>$d2),
  array("label"=>"Normal", "symbol" => "Kötü","y"=>$d3)
  
)
 
?>

<!----------------GRAFİK 5------------------->

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



$dataPoints_5= array( 
  array("label"=>"Soba", "y"=>$e1),
  array("label"=>"Kalorifer", "y"=>$e2),
  array("label"=>"Diger", "y"=>$e3)
  
)
 
?>
<!----------------------GRAFİK 6----------->
<?php
 
include("dataBase.php");


#kadin_yas
$query_kadin_ort= $db->query("SELECT AVG(users.yas) as ort_kadin
FROM users
WHERE users.cinsiyet='Kadın' ", PDO::FETCH_ASSOC);
if ( $query_kadin_ort->rowCount() )
{
     

     foreach( $query_kadin_ort as $row_kadin_ort ){
          
           
  
    
    $kadin_ort=$row_kadin_ort['ort_kadin'];
        
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
<!DOCTYPE html>
<html lang="utf-8">
  <head>
    <title>Grafikler</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="main_dene.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="shortcut icon" href="logo4.ico" type="image/x-icon" />
     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
     
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Buca Belediyesi</a>
      <!-- Sidebar toggle button-->
      
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
        <!--Notification Menu-->
        
          
        <!-- User Menu-->
        
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">Hükümran Çelik</p>
          <p class="app-sidebar__user-designation">Sosyal Hizmetler Yöneticisi</p>
        </div>
      </div>
      <ul class="app-menu">

        <li><a class="app-menu__item" href="index.php">
        <span class="app-menu__label">Anasayfa</span></a></li>
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
          <span class="app-menu__label">Kayıt İşlemler</span></a>
          
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="kayit_ekle.php">Kayıt Ekle</a></li>
            <li><a class="treeview-item" href="kayitlar.php"  rel="noopener">Kayıtlar</a></li>
           
          </ul>
        </li>
        
        <li><a class="app-menu__item active" href="charts.php">
          <span class="app-menu__label">Grafikler</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
          <span class="app-menu__label">Analizler</span></a>
          
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="mahalle.php">Mahalle Analizleri</a></li>
            <li><a class="treeview-item" href="birey.php"> Birey Analizleri</a></li>
            <li class="treeview"><a class="app-menu__item" href="#" ><span class="app-menu__label">Cinsiyet Analizleri</span></a>
            <ul class="treeview-menu">
              <li><i><a class="treeview-item" href="birey_kadin.php" >Kadın</i></a></li>
              <li><i><a class="treeview-item" href="birey_erkek.php">Erkek</i></a></li>
            </ul>
          </ul>

        </li>

        
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">İşlemler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="onay.php">Başvuru Onaylama</a></li>
        </li>
      </ul>
      <li class="treeview"><a class="app-menu__item" href="giris.php" ><span class="app-menu__label">ÇIKIŞ</span></a></li>
    </aside>
    <main class="app-content">
      
      <div class="row">
        <div class="col-md-6">
          <div id="chartContainer_1" style="height: 370px; width: 100%;"></div>
          <div class="tile">
            
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div id="chartContainer_6" style="height: 370px; width: 100%;"></div>

          </div>
        </div>
        
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"></h3>
             <div id="chartContainer_2" style="height: 370px; width: 100%;">
          </div>
        </div>
        </div>
        
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="">
              <div id="chartContainer_4" style="height: 370px; width: 100%;">
            </div>
          </div>
        </div>
        </div>
        

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div id="chartContainer_3" style="height: 370px; width: 100%;">
          </div>
        </div>
        </div>
        

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div id="chartContainer_5" style="height: 370px; width: 100%;">
            </div>
          </div>
        </div>



      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>

<!--------grafik 1------------>
<script>
window.onload = function () {
 
var chart_1 = new CanvasJS.Chart("chartContainer_1", {
  animationEnabled: true,
  exportEnabled: false,
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
    yValueFormatString: "#,##0",
    dataPoints: <?php echo json_encode($dataPoints_1, JSON_NUMERIC_CHECK); ?>
  }]
});
chart_1.render();
 
}
</script>

<!--------grafik 2------------>

<script type="text/javascript">
  

 {
 
 
var chart_2 = new CanvasJS.Chart("chartContainer_2", {
  theme: "light1",
  animationEnabled: true,
  title: {
    text: "Evin Mülkiyet Durumuna Göre"
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
    dataPoints: <?php echo json_encode($dataPoints_2, JSON_NUMERIC_CHECK); ?>
  }]
});
chart_2.render();
 
}


var chart_3 = new CanvasJS.Chart("chartContainer_3", {
  animationEnabled: true,
  title:{
    text: "Gelir Durumuna Göre Kişi Dağılımı"
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

var chart_4 = new CanvasJS.Chart("chartContainer_4", {
  theme: "light1",
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
    dataPoints: <?php echo json_encode($dataPoints_4, JSON_NUMERIC_CHECK); ?>
  }]
});
chart_4.render();
 

var chart_5= new CanvasJS.Chart("chartContainer_5", {
  animationEnabled: true,
  title: {
    text: "Başvuru Yapan Evlerin Isınma Durumu"
  },
  data: [{
    type: "pyramid",
    indexLabel: "{label} -% {y}",
    yValueFormatString: "#,##0.00",
    dataPoints: <?php echo json_encode($dataPoints_5, JSON_NUMERIC_CHECK); ?>
  }]
});
chart_5.render();
 
var chart_6= new CanvasJS.Chart("chartContainer_6", {
  animationEnabled: true,
  theme: "light3",
  title:{
    text: "Başvuru Yapan Kişilerin Ortalama Yaşına Göre "
  },
  axisY: {
    title: "Yaş"
  },
  data: [{
    type: "column",
    yValueFormatString: "#,##0.## yaş",
    dataPoints: <?php echo json_encode($dataPoints_6, JSON_NUMERIC_CHECK); ?>
  }]
});
chart_6.render();
 

</script>


  </body>
</html>