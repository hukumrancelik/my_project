<?php 
 
include("dataBase.php");
ob_start();
session_start();
 
if(isset($_SESSION["login"])){
    header("Location:page-loginn.php");
}


?>

<?php


#toplam
$toplamSayi= $db->query("SELECT COUNT(users.id) as toplam
FROM users", PDO::FETCH_ASSOC);
if ( $toplamSayi->rowCount() )
{
     

     foreach( $toplamSayi as $tp ){
          
           
  
    
    $tplm=$tp['toplam'];
 
        
}
}



#olumlu_sayisi
$olumlu_sayisi= $db->query("SELECT COUNT(users.id) as olumluSayi
FROM users
WHERE users.onay_durumu= 'ONAYLANDI' ", PDO::FETCH_ASSOC);
if ( $olumlu_sayisi->rowCount() )
{
     

      foreach( $olumlu_sayisi as $olumlu ){
      $olumluSayi=$olumlu['olumluSayi'];
        
}
}

#bekliyor
$bekle_sayisi= $db->query("SELECT COUNT(users.id) as bekleSayi
FROM users
WHERE users.onay_durumu= 'BEKLİYOR' ", PDO::FETCH_ASSOC);
if ( $bekle_sayisi->rowCount() )
{
     

      foreach( $bekle_sayisi as $bekle ){
      $bekleSayi=$bekle['bekleSayi'];
        
}
}


#olumsuz
$olumsuz_sayisi= $db->query("SELECT COUNT(users.id) as olumsuzSayi
FROM users
WHERE users.onay_durumu= 'OLUMSUZ' ", PDO::FETCH_ASSOC);
if ( $olumsuz_sayisi->rowCount() )
{
     

      foreach( $olumsuz_sayisi as $olumsuz ){
      $olumsuzSayi=$olumsuz['olumsuzSayi'];
        
}
}


?>


<!DOCTYPE html>
<html lang="tr">
  <head>
    
    <title>Personel Girişi</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS Dosyalarım-->
    <link rel="stylesheet" type="text/css" href="/css/main_dene.css">

    <!--Metin CSS'leri-->
    
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
        
    </header>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
           <p class="app-sidebar__user-name">Hükümran Çelik</p>
          <p class="app-sidebar__user-designation">Sosyal Hizmetler Yöneticisi</p>
        </div>
      </div>
      
      <ul class="app-menu">
        
        <li><a class="app-menu__item active" href="index.php"><span class="app-menu__label">Anasayfa</span></a></li>
        
        <li class="treeview"><a class="app-menu__item" href="sayfalar/kayitlar.php" data-toggle="treeview"></i>
          <span class="app-menu__label">Kayıt İşlemleri</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="sayfalar/kayit_ekle.php">Kayıt Ekle</a></li>
            <li><a class="treeview-item" href="sayfalar/kayitlar.php"  rel="noopener">Kayıtlar</a></li>
          </ul>
        </li>

        <li><a class="app-menu__item" href="sayfalar/charts.php"><span class="app-menu__label">Grafikler</span></a></li>
        
        <li class="treeview"><a class="app-menu__item" href="sayfalar/mahalle.php" data-toggle="treeview"><span class="app-menu__label">Analizler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="sayfalar/mahalle.php">Mahalle Analizleri</a></li>
            <li><a class="treeview-item" href="sayfalar/birey.php"> Birey Analizleri</a></li>
            <li class="treeview"><a class="app-menu__item" href="#" ><span class="app-menu__label">Cinsiyet Analizleri</span></a>
            <ul class="treeview-menu">
              <li><i><a class="treeview-item" href="sayfalar/birey.php">Kadın</i></a></li>
              <li><i><a class="treeview-item" href="sayfalar/birey.php">Erkek</i></a></li>


            </ul>

            <li><a class="treeview-item" href="sayfalar/mahalle.php">İhtiyaç Puanlarına Göre</a></li>
           
          </ul>
        </li>
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">İşlemler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="sayfalar/onay.php">Başvuru Onaylama</a></li>
            <li><a class="treeview-item" href="sayfalar/kayitSilme.php">Kayıt Silme</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="sayfalar/giris.php" ><span class="app-menu__label">ÇIKIŞ</span></a>
    </aside>
    <main class="app-content">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon">
            <div class="info">
              <span style="color:blue"><b><h4>Basvuru Sayısı</b></h4></span>
              <?php  
                echo "<p>","<b>","<h1>","<span style='color:blue'>",$tplm,"</h1>","</b>","</p>";

              ?>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon">
            <div class="info">
             <span style="color:green"><h4><b>ONAYLANAN</b></h4></span>
              <?php  
                echo "<p>","<b>","<h1>","<span style='color:green'>",$olumluSayi,"</h1>","</b>","</p>";

              ?>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon">
            <div class="info">
              <span style="color:orange"><h4><b>ONAY BEKLEYEN</b></h4></span>
              <?php  
                echo "<p>","<b>","<h1>","<span style='color:orange'>",$bekleSayi,"</h1>","</b>","</p>";

              ?>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon">
            <div class="info">
              <span style="color:red"><h4><b>OLUMSUZ</b></h4></span>
               <?php  
                echo "<p>","<b>","<h1>","<span style='color:red'>",$olumsuzSayi,"</h1>","</b>","</p>";

              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <center><div class="col-md-6"></center>
          <div class="main">
      <div class="page_container">
        <div id="immersive_slider">
          <div class="slide" data-blurred="img/slide1_blurred.jpg">
            <div class="content">
              <h2><a href="http://www.bucketlistly.com" target="_blank">MECLİS TOPLANTI İLANI</a></h2>
              <p>
Buca Belediye Meclis Toplantısı, 02.05.2019 Perşembe günü, Buca Belediye Sarayı Meclis Toplantı Salonunda saat 17.30’da yapılacaktır.</p>
            </div>
            <div class="image">
              <a href="http://www.bucketlistly.com" target="_blank">
                <img src="img/a1.jpg" alt="Slider 1">
              </a>
            </div>
          </div>
          <div class="slide" data-blurred="img/slide2_blurred.jpg">
            <div class="content">
              <h2><a href="http://www.bucketlistly.com/apps" target="_blank">Taşınmazların 3 yıl süre ile kiraya verilmesi hk.</a></h2>
              <p>İhale ile alakalı Şartname ve ekleri her gün mesai saatleri içerisinde Buca Belediyesi Emlak ve İstimlak Müdürlüğünde incelenebilir.</p>
            </div>
            <div class="image">
             <a href="http://www.bucketlistly.com/apps" target="_blank"> <img src="img/a2.jpg" alt="Slider 1"></a>
            </div>
          </div>
          <div class="slide" data-blurred="img/slide3_blurred.jpg">
            <div class="content">
              <h2><a href="http://www.thepetedesign.com" target="_blank">Çağrı Merkezi hk.</a></h2>
              <p>Değerli personellerimiz; teknik sorunlardan dolayı kısa bir süre çağrı Merkezi sistemimizde teknik bakım çalışması yapılmaktadır.</p>
            </div>
            <div class="image">
              <a href="http://www.thepetedesign.com" target="_blank"><img src="img/a3.jpg" alt="Slider 1"></a>
            </div>
          </div>
          
          <a href="#" class="is-prev">&laquo;</a>
          <a href="#" class="is-next">&raquo;</a>
        </div>
      </div>
    </div>
    <div class="benefits">
      <div class="page_container">

      </div>
    </div>
    <script type="text/javascript">
      $(document).ready( function() {
        $("#immersive_slider").immersive_slider({
          container: ".main"
        });
      });

    </script>
  </div>
  <script>
    </script>
  
    
    
  </form>
  </body>
</html>