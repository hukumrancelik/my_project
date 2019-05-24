<?php 
include("dataBase.php")
                 
?>
<!DOCTYPE html>
<html lang="utf-8">
  <head>
    <title>Puan Tablosu</title>
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
        
        <li class="treeview is-expanded"><a class="app-menu__item is-expanded" href="#" data-toggle="treeview"><span class="app-menu__label">Analizler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="mahalle.php">Mahalle Analizleri</a></li>
            <li><a class="treeview-item" href="birey.php"> Birey Analizleri</a></li>
            <li class="treeview"><a class="app-menu__item" href="#" ><span class="app-menu__label">Cinsiyet Analizleri</span></a>
            <ul class="treeview-menu">
              <li><i><a class="treeview-item " href="birey_kadin.php" > |Kadın|</i></a></li>
              <li><i><a class="treeview-item" href="birey_erkek.php" data-toggle="treeview">|Erkek|</i></a></li>
            </ul>
                    <li><a class="treeview-item active" href="puan.php">İhtiyaç Puanlarına Göre</a></li>
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
              <h2 class="mb-3 line-head" id="buttons">İhtiyaç Puanlarına Göre:</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7">

<?php 

#2019
$oranlarYil= $db->query("SELECT round(AVG(ihtiyac_oranlari.oranlar),1) as ortalama2019
FROM ihtiyac_oranlari ", PDO::FETCH_ASSOC);
if ( $oranlarYil->rowCount() )
{
     

      foreach( $oranlarYil as $yil ){
      
      $yil2019=$yil['ortalama2019'];
        
}
}

 ?>
            
<?php 
#erkek_sayisi
$query_erkek= $db->query("SELECT COUNT(users.id)as 'erkek_sayisi'
FROM users WHERE users.cinsiyet='Erkek' ", PDO::FETCH_ASSOC);
if ( $query_erkek->rowCount() )
{
     

      foreach( $query_erkek as $row_erkek ){
      $erkek=$row_erkek['erkek_sayisi'];
        
}
}

              
 $query = $db->query("SELECT upper (concat (users.username,' ',users.username_surname)) as AdSoyad, concat (ihtiyac_oranlari.oranlar,' ','Puan') as oran
FROM users,ihtiyac_oranlari
WHERE ihtiyac_oranlari.kisi_no=users.id
GROUP BY users.id
ORDER BY oran DESC", PDO::FETCH_ASSOC);
if ( $query->rowCount() )

  echo "<table class='table table-striped'>";
  echo " <thead class='thead-dark'>";
  echo "<tr>";
 
  echo "<th scope='col'>KİŞİLER</th>";
  echo "<th scope='col'>PUANLAR</th>";
  
 
  echo "</tr>";
  echo "</thead>";

{
     

     foreach( $query as $row ){
          
           
  
    echo "<tr>";
   
    echo "<td>",$row['AdSoyad'],"</td>";
    echo "<td>",$row['oran'],"</td>";
    
    

    echo "</tr>";
 
     
}


}



#max
$query_kadin= $db->query("SELECT upper (concat (users.username,' ',users.username_surname)) as AdSoyad,ihtiyac_oranlari.oranlar as oraniMax
FROM users,ihtiyac_oranlari
WHERE ihtiyac_oranlari.oranlar=(SELECT max(ihtiyac_oranlari.oranlar) FROM ihtiyac_oranlari)
AND 
users.id=ihtiyac_oranlari.kisi_no ", PDO::FETCH_ASSOC);
if ( $query_kadin->rowCount() )
{
     

      foreach( $query_kadin as $row_kadin ){
      $maxKisi=$row_kadin['AdSoyad'];
      $oraniMax=$row_kadin['oraniMax'];
        
}
}



$query_kadin= $db->query("SELECT upper (concat (users.username,' ',users.username_surname)) as AdSoyad,ihtiyac_oranlari.oranlar as oraniMin
FROM users,ihtiyac_oranlari
WHERE ihtiyac_oranlari.oranlar=(SELECT min(ihtiyac_oranlari.oranlar) FROM ihtiyac_oranlari)
AND 
users.id=ihtiyac_oranlari.kisi_no ", PDO::FETCH_ASSOC);
if ( $query_kadin->rowCount() )
{
     

      foreach( $query_kadin as $row_kadin ){
      $minKisi=$row_kadin['AdSoyad'];
      $oraniMin=$row_kadin['oraniMin'];

        
}
}


echo "<span style= 'color:green'>","<h3>"."En Fazla Ihtiyaç Sahibi Kisi:"." ".$maxKisi." PUANI=".$oraniMax."</h3>","</span>";
echo "<span style= 'color:red'>","<h3>"."En Az Ihtiyaç Sahibi Kisi:"." ".$minKisi." ","PUANI=".$oraniMin."</h3> ","</span>";
echo "<span style= 'color:blue'>","<h3>"."2019 ORTALAMA İHTİYAÇ PUANI:"." ".$yil2019." </h3> ","</span>";


 ?>

              

            </div>


    
  </body>

</html>