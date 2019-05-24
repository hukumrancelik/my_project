<?php 
include("dataBase.php")


                 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Başvuru Onaylama</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="main_dene.css">

      <!-- Including react -->
    <script type="text/javascript" src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <!-- Including react-dom -->
    <script type="text/javascript" src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <!-- Including babel -->
    <script type="text/javascript" src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <!-- Including the fusioncharts core library -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <!-- Including the fusioncharts library to render maps -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.maps.js"></script>
    
    <script type="text/javascript" src="fusioncharts.california.js"></script>
    <!-- Including react-fusioncharts component -->
    <script type="text/javascript" src="https://unpkg.com/react-fusioncharts@2.0.1/dist/react-fusioncharts.min.js"></script>
    <!-- Including the fusion theme -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>


  </head>
  <body class="app sidebar-mini rtl">
    <header class="app-header"><a class="app-header__logo" href="index.html">Buca Belediyesi</a>
      
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
        
        <li class="treeview"><a class="app-menu__item" href="kayitlar.php" data-toggle="treeview"><span class="app-menu__label">Kayıtlar</span></a>
          
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="kayit_ekle.php"> Kayıt ekle</a></li>
            
              <li><a class="treeview-item" href="kayitlar.php">Kayıtlar</a></li>
            
          </ul>
        </li>

        <li><a class="app-menu__item" href="charts.php">
          <span class="app-menu__label">Grafikler</span></a></li>
        
       <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">Analizler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="mahalle.php">Mahalle Analizleri</a></li>
            <li><a class="treeview-item" href="birey.php"> Birey Analizleri</a></li>
            <li class="treeview"><a class="app-menu__item" href="#" ><span class="app-menu__label">Cinsiyet Analizleri</span></a>
            <ul class="treeview-menu">
              <li><i><a class="treeview-item" href="birey.php">|Kadın|</i></a></li>
              <li><i><a class="treeview-item" href="birey.php">|Erkek|</i></a></li>
            </ul>
           
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">İşlemler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="onay.php">Başvuru Onaylama</a></li>
            <li><a class="treeview-item" href="kayitSilme.php">Kayıt Silme</a></li>
          </ul>
        </li>

              <li class="treeview is active"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">Haritalar</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="onay.php">1</a></li>
            <li><a class="treeview-item" href="kayitSilme.php">2</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="giris.php" ><span class="app-menu__label">ÇIKIŞ</span></a>
    </aside>
    <main class="app-content">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
      
         <div class="tile mb-4">
        <div class="page-header">
          <div class="row">

            <div class="col-lg-12">
              <h2 class="mb-3 line-head" id="buttons">Harita Görünümü</h2>

            </div>

          </div>

        </div>

        <div class="row">
          
   
          <div class="col-lg-7">


                  <div id='chart-container'></div>




           </div>    


           <head>
     <script type="text/jsx">

        
    ReactFC.fcRoot(FusionCharts);
    const chartConfigs = {
        type: 'maps/california',
        renderAt: 'chart-container',
        width: '800',
        height: '550',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "animation": "0",
                "showbevel": "0",
                "usehovercolor": "1",
                "showlegend": "1",
                "legendposition": "BOTTOM",
                "legendborderalpha": "0",
                "legendbordercolor": "ffffff",
                "legendallowdrag": "0",
                "legendshadow": "0",
                "caption": "Başvuru Sayılarının Mahalle Bazlı Görünümü",
                "connectorcolor": "000000",
                "fillalpha": "80",
                "hovercolor": "CCCCCC",
                "theme": "fusion"
            },
            "colorrange": {
                "minvalue": "0",
                "startlabel": "Düşük",
                "endlabel": "Yüksek",
                "code": "e44a00",
                "gradient": "1",
                "color": [{"maxvalue": "10", "code": "f8bd19"}, {"maxvalue": "10000", "code": "e44a00"}]  
            },
           
            "data": 
            [{"id":"001","value":8}, 
            {"id":"003","value":10},
            {"id":"005","value":9},
            {"id":"007","value":6},
            {"id":"009","value":292},
            {"id":"011","value":530},
            {"id":"013","value":2515},
            {"id":"015","value":728},
            {"id":"017","value":1974},
            {"id":"019","value":848},
            {"id":"021","value":3278},
            {"id":"023","value":4463},
            {"id":"025","value":1198},
            {"id":"027","value":378},
            {"id":"029","value":3},
            {"id":"031","value":1200},
            {"id":"033","value":3820},
            {"id":"035","value":940},
            {"id":"037","value":3416},
            {"id":"039","value":4004},
            {"id":"041","value":1604},
            {"id":"043","value":4011},
            {"id":"045","value":3203},
            {"id":"047","value":3775},
            {"id":"049","value":2721},
            {"id":"051","value":3417},
            {"id":"053","value":1530},
            {"id":"055","value":412},
            {"id":"057","value":3434},
            {"id":"059","value":1670},
            {"id":"061","value":1274},
            {"id":"063","value":4339},
            {"id":"065","value":2073},
            {"id":"067","value":1018},
            {"id":"069","value":3967},
            {"id":"071","value":1},
            {"id":"073","value":3307},
            {"id":"075","value":1938},
            {"id":"077","value":489},
            {"id":"079","value":3207},
            {"id":"081","value":2295},
            {"id":"083","value":2747},
            {"id":"085","value":1114},
            {"id":"087","value":3400},
            {"id":"089","value":784},
            {"id":"091","value":1673},
            {"id":"093","value":4274},
            {"id":"095","value":4509},
            {"id":"097","value":3862},
            {"id":"099","value":1356},
            {"id":"101","value":4126},
            {"id":"103","value":1314},
            {"id":"105","value":1807},
            {"id":"107","value":4026},
            {"id":"109","value":3456},
            {"id":"111","value":1393},
            {"id":"113","value":1500},
            {"id":"115","value":2218}]
        }
    };
    </script>
    <script type="text/jsx">
    ReactDOM.render(
        <ReactFC {...chartConfigs} />,
        document.getElementById('chart-container')
    );
    </script>


    </form>

  </body>

</html>