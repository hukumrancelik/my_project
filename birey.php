<?php 
include("dataBase.php")
                 
?>
<!DOCTYPE html>
<html lang="utf-8">
  <head>
    <title>Birey Analizleri</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="main_3.css">
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
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            
            <li><a class="dropdown-item" href="giris.php"><i class="fa fa-sign-out fa-lg"></i> Çıkış</a></li>
          </ul>
        </li>
      </ul>
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
        <li><a class="app-menu__item" href="index.php">
          <span class="app-menu__label">Anasayfa</span></a></li>
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">Kayıt İşlemleri</span></a>
          
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="kayit_ekle.php">Kayıt Ekle</a></li>
            <li><a class="treeview-item" href="kayitlar.php"  rel="noopener">Kayıtlar</a></li>
            
          </ul>
        </li>
        
        <li><a class="app-menu__item" href="charts.php"><span class="app-menu__label">Grafikler</span></a></li>
        
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">Analizler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="mahalle.php">Mahalle Analizleri</a></li>
            <li><a class="treeview-item active" href="birey.php"> Birey Analizleri</a></li>
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
            
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="giris.php" ><span class="app-menu__label">ÇIKIŞ</span></a>
          
    </aside>
    <main class="app-content">
      
         <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="mb-3 line-head" id="buttons">Birey Sayısına Göre Analizler</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7">
            
<?php 

              
 $query = $db->query("SELECT upper (concat (users.username,' ',users.username_surname)) as AdSoyad, sorular.aile_birey as bireySayisi,sorular.okuyan_sayi as okuyanSayi,sorular.uni_sayisi as uniSayi,sorular.calisan_kisi FROM users,sorular WHERE users.id=sorular.kisi_ID GROUP BY AdSoyad ORDER BY bireySayisi desc", PDO::FETCH_ASSOC);
if ( $query->rowCount() )

  echo "<table class='table table-striped'>";
  echo " <thead class='thead-dark'>";
  echo "<tr>";
 
  echo "<th scope='col'>KİŞİLER</th>";
  echo "<th scope='col'>TOPLAM BİREY SAYISI</th>";
  echo "<th scope='col'>OKUYAN(İlkokul-Ortaokul-Lise) BİREY SAYISI</th>";
   echo "<th scope='col'>ÜNİVERSİTE OKUYAN BİREY SAYISI</th>";
   echo "<th scope='col'>ÇALIŞMAYA ELVERİŞLİ BİREY SAYISI</th>";
 
  echo "</tr>";
  echo "</thead>";

{
     

     foreach( $query as $row ){
          
           
  
    echo "<tr>";
   
    echo "<td>",$row['AdSoyad'],"</td>";
    echo "<td>",$row['bireySayisi'],"</td>";
    echo "<td>",$row['okuyanSayi'],"</td>";
    echo "<td>",$row['uniSayi'],"</td>";
    echo "<td>",$row['calisan_kisi'],"</td>";

    

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