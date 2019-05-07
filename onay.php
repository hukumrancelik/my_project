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
    <link rel="stylesheet" type="text/css" href="main_3.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Buca Belediyesi</a>
      <!-- Navbar Right Menu-->
      
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
              <li><i><a class="treeview-item" href="birey.php">Kadın</i></a></li>
              <li><i><a class="treeview-item" href="birey.php">Erkek</i></a></li>
            </ul>
           
          </ul>
        </li>

        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">İşlemler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item active" href="onay.php">Başvuru Onaylama</a></li>
            <li><a class="treeview-item" href="kayitSilme.php">Kayıt Silme</a></li>
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
              <h2 class="mb-3 line-head" id="buttons">Kayıtlar</h2>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-7">

           
<?php 

              
 $query = $db->query("SELECT users.username,users.username_surname,users.tc_kimlik
FROM users,adres_bilgileri,sorular
WHERE 
users.id=adres_bilgileri.kisi_id
AND
users.id=sorular.kisi_ID", PDO::FETCH_ASSOC);
if ( $query->rowCount() )

  echo "<table class='table table-striped'>";
  echo " <thead class='thead-dark'>";
  echo "<tr>";
 
  echo "<th scope='col'>AD</th>";
  echo "<th scope='col'>SOYAD</th>";
  echo "<th scope='col'>TC KİMLİK</th>";
  echo "<th scope='col'>İŞLEM</th>";

  echo "</tr>";
  echo "</thead>";





{
     

     foreach( $query as $row ){
          
           
  
    echo "<tr>";
   
    echo "<td>",$row['username'],"</td>";
    echo "<td>",$row['username_surname'],"</td>";
    echo "<td>",$row['tc_kimlik'],"</td>";
    
    echo "<td>


<div class= 'custom-control custom-radio'>
 <input type='radio' id= 'onay_".$row['tc_kimlik']."' name='onay_durumu_".$row['tc_kimlik']."[]' class= 'custom-control-input' value='ONAYLANDI'> 
  <label class='custom-control-label' for= 'onay_".$row['tc_kimlik']."' >Onayla</label><br>
  </div>

<div class= 'custom-control custom-radio'>
  <input type='radio' id= 'bekle_".$row['tc_kimlik']."' name='onay_durumu_".$row['tc_kimlik']."[]' class= 'custom-control-input' value='BEKLİYOR'>
  <label class='custom-control-label' for= 'bekle_".$row['tc_kimlik']."' >Beklet</label><br>
</div>

<div class= 'custom-control custom-radio'>
  <input type='radio' id= 'olumsuz_".$row['tc_kimlik']."' name='onay_durumu_".$row['tc_kimlik']."[]' class= 'custom-control-input' value='OLUMSUZ'>
  <label class='custom-control-label' for= 'olumsuz_".$row['tc_kimlik']."' >Olumsuz</label>
</div>

          </td>";

    

    echo "</tr>";
    
 
     
}

}

       

if(isset($_POST['onayla']))
{
      $sorgu_gonder=[
        
        
        $id=$_POST['id'],
        $durum=$_POST['onay_durumu_[]']
        

                ];
    
    

  $sorgu_onay=$db->prepare("update users set onay_durumu='".onay_durumu_[$id]."' where users.id='".$durum."'"); 
  $sorgu_onay->execute($sorgu_gonder);
    
}




          
 ?>
<button type='submit' class='btn btn-primary btn-lg btn-block' name='onayla'>Değişlikleri Kaydet</button>


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


             
    </form>
  </body>

</html>