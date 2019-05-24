
<?php 

include("chartsPHP.php")


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
              <li><i><a class="treeview-item" href="birey_kadin.php" >|Kadın|</i></a></li>
              <li><i><a class="treeview-item" href="birey_erkek.php">|Erkek|</i></a></li>
            </ul>
                 <li><a class="treeview-item" href="puan.php">İhtiyaç Puanlarına Göre</a></li>
          </ul>

        </li>

        
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">İşlemler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="onay.php">Başvuru Onaylama</a></li>
                        <li><a class="treeview-item" href="kayitSilme.php">Kayıt Silme</a></li>
        </li>
        </li>
      </ul>
      <li class="treeview"><a class="app-menu__item" href="giris.php" ><span class="app-menu__label">ÇIKIŞ</span></a></li>
    </aside>
    <main class="app-content">
      
      <div class="row">
        <div class="col-md-6">
          <div id="chartContainer_8" style="height: 370px; width: 100%;"></div>
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


        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div id="chartContainer_7" style="height: 370px; width: 100%;">
            </div>
          </div>
        </div>

            <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div id="chartContainer_1" style="height: 370px; width: 100%;">
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


                              <!--------------------------------------GRAFİKLER------------------------------------------->

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
 

var chart_7 = new CanvasJS.Chart("chartContainer_7", {
  animationEnabled: true,
  theme: "light3",
  title:{
    text: "Onay Durumları"
  },
  axisY: {
    title: "Başvuru Sayısı"
  },
  data: [{
    type: "column",
    yValueFormatString: "#,##0.## kişi",
    dataPoints: <?php echo json_encode($dataPoints_7, JSON_NUMERIC_CHECK); ?>
  }]
});
chart_7.render();


var chart_8= new CanvasJS.Chart("chartContainer_8", {
  title: {
    text: "Yıllar Göre Oranlar"
  },
  subtitles: [{
    text: "2015-2019"
  }],
  axisY: {
    title: "Ortalamalar",
    includeZero: false
  },
  data: [{
    type: "stepLine",
    dataPoints: <?php echo json_encode($dataPoints_8, JSON_NUMERIC_CHECK); ?>
  }]
});
chart_8.render();


</script>


  </body>
</html>


