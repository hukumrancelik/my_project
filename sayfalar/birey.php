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
    <link rel="stylesheet" type="text/css" href="\css\main_dene.css">
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
              <li><i><a class="treeview-item" href="birey_kadin.php" >|Kadın|</i></a></li>
              <li><i><a class="treeview-item" href="birey_erkek.php">|Erkek|</i></a></li>
            </ul>
                 <li><a class="treeview-item" href="puan.php">İhtiyaç Puanlarına Göre</a></li>
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

<!-- Java Dosyalarım-->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- ------------------------------------>
    <script src="/js/plugins/pace.min.js"></script>
       <!-- ------------------------------------>
    <script type="text/javascript" src="/js/plugins/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="/js/plugins/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="/js/plugins/jquery.vmap.sampledata.js"></script>
  

             
    
  </body>

</html>