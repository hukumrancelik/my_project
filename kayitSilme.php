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
    <link rel="stylesheet" type="text/css" href="main_dene.css">

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
        <li><a class="app-menu__item" href="index.php"><span class="app-menu__label">Anasayfa</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"></i>

          <span >Kayıt İşlemleri</a>
          <ul class="treeview-menu">
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
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">İşlemler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="onay.php">Başvuru Onaylama</a></li>
            <li><a class="treeview-item active" href="kayitSilme.php">Kayıt Silme</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="giris.php" ><span class="app-menu__label">ÇIKIŞ</span></a>
    </aside>
    <main class="app-content">
      
         <div class="tile mb-4">

        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
              <h2 class="mb-3 line-head" id="buttons">Kayıtlar</h2>
            </div>
          </div>
        </div>


            

        <div class="row">
              <button type='submit' name="sil" class='btn btn-primary btn-lg btn-block'>Kayit Sil</button><br>
          <div class="col-lg-7">

            
<?php 

              
 $query = $db->query("SELECT upper(concat(users.id,')' ,users.username,' ',users.username_surname)) as adSoyad, users.id as id
FROM users", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){

   echo  "<div class='form-group'>";
    echo "<select name='silKayit' class= 'form-control' id= 'exampleFormControlSelect1'>";
    echo "</div>";

}
     

     foreach( $query as $row ){
          
           
                echo '<option value="'.$row['id'].'">'.$row['adSoyad'].'</option>';
                 




                   if(isset($_POST['sil']))
{
      $formliste=[
        
        $idSil=$_POST['silKayit']
       

                ];
    $sorgu=$db->prepare("DELETE FROM users WHERE users.id = '".$idSil."' "); 
    $sorgu->execute($formliste);


    }



    
}


 

 ?>


                   

            </div>
</form>

    
  </body>

</html>