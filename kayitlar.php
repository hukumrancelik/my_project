<?php 
include("dataBase.php")
                 
?>
<!DOCTYPE html>
<head>

    <title>Tüm Kayıtlar</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="main_3.css">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="logo4.ico" type="image/x-icon" />

    <!--Galeri-->
  
  <link rel="image_src" href="/images/immersive_slider_image.png" />
  <meta content="http://www.thepetedesign.com/demos/immersive_slider_demo.html" property="og:url" />
  <meta content="http://www.thepetedesign.com/images/immersive_slider_image.png" property="og:image" />
  <link rel="shortcut icon" id="favicon" href="favicon.png"> 
  <meta name="author" content="Pete R.">
  <link rel="canonical" href="http://www.thepetedesign.com/demos/immersive_slider_demo.html" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="galeri_css_js/jquery.immersive-slider.js"></script>
  <link href='galeri_css_js/immersive-slider.css' rel='stylesheet' type='text/css'>
  <link href='galeri_css_js/galleri_css.css' rel='stylesheet' type='text/css'>
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
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Ahmet Yılmaz</p>
          <p class="app-sidebar__user-designation">Yönetici</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.php"><span class="app-menu__label">Anasayfa</span></a></li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"></i>

          <span >Kayıt İşlemleri</a>
          <ul class="treeview-menu active">
             <li><a class="treeview-item" href="kayit_ekle.php"> Kayıt Ekle</a></li>


           <li><a class="treeview-item active" href="kayitlar.php">Kayıtlar</a></li>
            
          </ul>
        </li>

        <li><a class="app-menu__item" href="charts.php"><span class="app-menu__label">Grafikler</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">Analizler</span></a>
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
            <li><a class="treeview-item" href="table-data-table.html"> Data Tables</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="giris.php" ><span class="app-menu__label">ÇIKIŞ</span></a>
    </aside>
    <main class="app-content">
      
         <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="mb-3 line-head" id="buttons">Kayıtlar</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7">
            
<?php 

              
 $query = $db->query("SELECT users.id as id, upper(users.username) as username,upper(users.username_surname) as username_surname,users.tc_kimlik,users.yas,users.user_tel,adres_bilgileri.mahalle,sorular.evin_durumu, users.onay_durumu
FROM users,adres_bilgileri,sorular
WHERE 
users.id=adres_bilgileri.kisi_id
AND
users.id=sorular.kisi_ID", PDO::FETCH_ASSOC);
if ( $query->rowCount() )

  echo "<table class='table table-striped'>";
  echo " <thead class='thead-dark'>";
  echo "<tr>";
 
  #başlıklar
  echo "<th scope='col'></th>";
  echo "<th scope='col'>AD</th>";
  echo "<th scope='col'>SOYAD</th>";
  echo "<th scope='col'>TC KİMLİK</th>";
  echo "<th scope='col'>YAŞ</th>";
  echo "<th scope='col'>TELEFON</th>";
  echo "<th scope='col'>MAHALLE</th>";
  echo "<th scope='col'>EV DURUMU</th>";
  echo "<th scope='col'>İHTİYAÇ ORANI</th>";
  echo "<th scope='col'>ONAY DURUMU</th>";
  echo "</tr>";
  echo "</thead>";

{
     

     foreach( $query as $row ){
          
           
  
    echo "<tr>";
    echo "<td>",$row['id'],"</td>";
    echo "<td>",$row['username'],"</td>";
    echo "<td>",$row['username_surname'],"</td>";
    echo "<td>",$row['tc_kimlik'],"</td>";
    echo "<td>",$row['yas'],"</td>";
    echo "<td>",$row['user_tel'],"</td>";
    echo "<td>",$row['mahalle'],"</td>";
     echo "<td>",$row['evin_durumu'],"</td>";
       echo "<td></td>";
         echo "<td>",$row['onay_durumu'],"</td>";
    

    echo "</tr>";
 
     
}


}







 ?>

              

            </div>

<!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vmap.sampledata.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      
        var map = $('#demo-map');
        map.vectorMap({
          map: 'world_en',
          backgroundColor: '#fff',
          color: '#333',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#C8EEFF', '#006491'],
          values: sample_data,
          normalizeFunction: 'polynomial'
        });
      });
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>


             
    
  </body>

</html>