
<?php
 
try {  
$db_ad='sosyal_yardim';
$db_kullanici='root';
$db_sifre='';
$db = new PDO('mysql:host=localhost;charset=UTF8;dbname='.$db_ad, $db_kullanici, $db_sifre);

    
} 
catch (PDOException $e)
{
    print "Bağantı Hatası!: " . $e->getMessage() . "<br/>";
    die();
}

error_reporting(E_ALL ^ E_NOTICE);

 #kişisel  bilgiler
if(isset($_POST['kaydet']))
{
      $formliste=[
        
        $_POST['username'],
        $_POST['username_surname'],
        $_POST['user_tel'],
        $_POST['tc_kimlik'],
        $_POST["cinsiyet"]

                ];
    
    

    $sorgu=$db->prepare("insert into users values(NULL,?,?,?,?,?)"); 
    $sorgu->execute($formliste);
    $id= $db->lastInsertId();

    
}




#adres bilgileri

if(isset($_POST['kaydet']))
{
      $adres_gonder=[
        $_POST['kisi_id']= $id,
        $_POST['mahalle'],
        $_POST['sokak'],
        $_POST['apartman'],
        $_POST['kat'],
        $_POST["kapi_no"]

                ];
    
    

    $sorgu_adres=$db->prepare("insert into adres_bilgileri values(NULL,?,?,?,?,?,?)"); 
    $sorgu_adres->execute($adres_gonder);
    
}

#form_bilgileri

if(isset($_POST['kaydet']))
{
      $sorular_gonder=[
        
        $_POST['gelir'],
        $_POST['evin_durumu'],
        $_POST['fiziki_durum'],
        $_POST['isinma_durumu'],
        $_POST["aile_birey"],
        $_POST["okuyan_sayi"],
        $_POST["uni_sayisi"],
        $_POST["y_maas"],
        $_POST["ozur_maas"],
        $_POST["kurum"],
        $_POST["calisan_kisi"]

                ];
    
    

    $sorgu_sorular=$db->prepare("insert into sorular values(NULL,?,?,?,?,?,?,?,?,?,?,?)"); 
    $sorgu_sorular->execute($sorular_gonder);
    
}

?>


   





<!DOCTYPE html>
<html lang="tr">
  <head>

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Kayıt Ekle</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="main_3.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="shortcut icon" href="logo4.ico" type="image/x-icon" />
  </head>
  <body class="app sidebar-mini rtl">
    
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="generatedtext.png">Buca Belediyesi</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Ayarlar</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profil</a></li>
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
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Anasayfa</span></a></li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Kayıt İşkemleri</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
             <li><a class="treeview-item active" href="kayit_ekle.php"><i class="icon fa fa-circle-o"></i> Kayit Ekle</a></li>


            <li><a class="treeview-item" href="kayitlar.php"><i class="icon fa fa-circle-o"></i> Kayıtlar </a></li>
            <li><a class="treeview-item" href="kayitlar.php" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Kayıtlar</a></li>
            
           

            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="charts.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Grafikler</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i> Form Components</a></li>
            <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>
            <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Kayıt Ekle</a></li>
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
            <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
            <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Kayıt Ekle</h1>

          <p>Kayıtlar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Kayıt Ekle</li>
          <li class="breadcrumb-item"><a href="#">Kayıtlar</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Kişisel Bilgiler</h3>
            <div class="tile-body">
              <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <div class="form-group">
                  <label class="control-label"><b>Ad</b></label>

                  <?php   



                        
                       
                       echo $id;

                   ?>
                  
                     <input class="form-control" type="text" placeholder="Ad" name="username"><br>
                  <label class="control-label"> <b>Soyad</b></label>
                  <input class="form-control" type="text" placeholder="Soyad" name="username_surname">
                </div>
                <div class="form-group">
                  <label class="control-label">TC Kimlik</label>
                  <input class="form-control" type="text" placeholder="TCK" name="tc_kimlik">
                </div><br>
                <div class="form-group">
                  <label class="control-label">Cinsiyet</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="cinsiyet" value="Erkek">Erkek
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="cinsiyet" value="Kadın">Kadın
                    </label>
                  </div> <br>
                   
                   <label class="control-label">Telefon</label>
                    <input type="text" class="form-control bfh-phone" data-format="+1 (ddd) ddd-ddddb" name="user_tel" placeholder="+90">
                
                <div class="form-group">
                <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Adres Bilgileri </label> <br>

      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="mahalle"><br>
        <option selected>Mahalle...</option>
        <option value="ADATEPE MAHALLESİ">ADATEPE MAHALLESİ</option>
        <option value="AKINCILAR MAHALLESİ">AKINCILAR MAHALLESİ</option>
        <option value="ATATÜRK MAHALLESİ">ATATÜRK MAHALLESİ</option>
        <option value="AYDOĞDU MAHALLESİ">AYDOĞDU MAHALLESİ</option>
        <option value="BARIŞ MAHALLESİ">BARIŞ MAHALLESİ</option>
        <option value="BELENBAŞI MAHALLESİ">BELENBAŞI MAHALLESİ</option>
        <option value="CUMHURİYET MAHALLESİ">CUMHURİYET MAHALLESİ</option>
        <option value="ÇAĞDAŞ MAHALLESİ">ÇAĞDAŞ MAHALLESİ</option>
        <option value="ÇAMLIK MAHALLESİ">ÇAMLIK MAHALLESİ</option>
        <option value="ÇAMLIK MAHALLESİ">ÇAMLIKULE MAHALLESİ</option>
        <option value="ÇAMLIPINAR MAHALLESİ">ÇAMLIPINAR MAHALLESİ</option>
        <option value="DİCLE MAHALLESİ">DİCLE MAHALLESİ</option>
        <option value="DOĞANCILAR MAHALLESİ">DOĞANCILAR MAHALLESİ</option>
        <option value="DUMLUPINAR MAHALLESİ">DUMLUPINAR MAHALLESİ</option>
        <option value="EFELER MAHALLESİ">EFELER MAHALLESİ</option>
        <option value="FIRAT MAHALLESİ">FIRAT MAHALLESİ</option>
        <option value="GAZİLER MAHALLESİ">GAZİLER MAHALLESİ</option>
        <option value="GÖKSU MAHALLESİ">GÖKSU MAHALLESİ</option>
        <option value="GÜVEN MAHALLESİ">GÜVEN MAHALLESİ</option>
        <option value="HÜRRİYET MAHALLESİ">HÜRRİYET MAHALLESİ</option>
        <option value="İNKILAP MAHALLESİ">İNKILAP MAHALLESİ</option>
        <option value="İNÖNÜ MAHALLESİ">İNÖNÜ MAHALLESİ</option>
        <option value="22">İZKENT MAHALLESİ</option>
        <option value="İZKENT MAHALLESİ">KARACAAĞAÇ MAHALLESİ</option>
        <option value="KARANFİL MAHALLESİ">KARANFİL MAHALLESİ</option>
        <option value="KAYNAKLAR MERKEZ MAHALLESİ">KAYNAKLAR MERKEZ MAHALLESİ</option>
        <option value="KIRIKLAR MAHALLESİ">KIRIKLAR MAHALLESİ</option>
        <option value="KOZAĞAÇ MAHALLESİ">KOZAĞAÇ MAHALLESİ</option>
        <option value="KURUÇEŞME MAHALLESİ">KURUÇEŞME MAHALLESİ</option>
        <option value="LALELİ MAHALLESİ">LALELİ MAHALLESİ</option>
        <option value="AKINCILAR MAHALLESİ">AKINCILAR MAHALLESİ</option>
        <option value="MENDERES MAHALLESİ">MENDERES MAHALLESİ</option>
        <option value="MURATHAN MAHALLESİ">MURATHAN MAHALLESİ</option>
        <option value="MUSTAFA KEMAL MAHALLESİ">MUSTAFA KEMAL MAHALLESİ</option>
        <option value="SEYHAN MAHALLESİ">SEYHAN MAHALLESİ</option>
        <option value="ŞİRİNKAPI MAHALLESİ">ŞİRİNKAPI MAHALLESİ</option>
        <option value="UFUK MAHALLESİ">UFUK MAHALLESİ</option>
        <option value="VALİ RAHMİ BEY MAHALLESİ">VALİ RAHMİ BEY MAHALLESİ</option>
        <option value="YAYLACIK MAHALLESİ">YAYLACIK MAHALLESİ</option>
        <option value="YENİGÜN MAHALLESİ">YENİGÜN MAHALLESİ</option>
        <option value="YEŞİLBAĞLAR MAHALLESİ">YEŞİLBAĞLAR MAHALLESİ</option>
        <option value="YILDIZ MAHALLESİ">YILDIZ MAHALLESİ</option>
        <option value="YILDIZLAR MAHALLESİ">YILDIZLAR MAHALLESİ</option>
        <option value="YİĞİTLER MAHALLESİ">YİĞİTLER MAHALLESİ</option>
        <option value="ZAFER MAHALLESİ">ZAFER MAHALLESİ</option>
        <option value="29 EKİM MAHALLESİ"> 29 EKİM MAHALLESİ</option><br>
        
    <div class="form-group"><br>
    <label for="inputAddress1"></label>
    <input type="text" class="form-control" id="inputAddress1" placeholder="Sokak" name="sokak">
  </div>

    <div class="form-group">
    <label for="inputAddress2"></label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartman/No" name="apartman">
  </div>

  <div class="form-group">
    <label for="inputAddress3"></label>
    <input type="text" class="form-control" id="inputAddress3" placeholder="Kat" name="kat">
  </div>


  <div class="form-group">
    <label for="inputAddress4"></label>
    <input type="text" class="form-control" id="inputAddress4" placeholder="İç Kapı No" name="kapi_no">
  </div>

  
             



         
      </select>
    </div>
                
                </div>
          
              
            </div>
            <div class="tile-footer">
            
               
             </input>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Sosyal İnceleme Tespit Tutanağı</h3>
            <div class="tile-body">
              <form class="form-horizontal">
                
      <label class="control-label col-md-3"><b>Ailenin Net geliri</b></label>
    
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="gelir" class="custom-control-input" value="Net asgari ücretin %50’sine kadar geliri olanlar"></input>
  <label class="custom-control-label" for="customRadio1">Net asgari ücretin %50’sine kadar </label>
</div>  
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="gelir" class="custom-control-input" value="Net asgari ücretin %50’sinden fazla olup,%100’üne kadar geliri olanlar"></input>
  <label class="custom-control-label" for="customRadio2">Net asgari ücretin %50’sinden fazla olup,%100’üne kadar </label>
</div>


<div class="custom-control custom-radio">
  <input type="radio" id="customRadio3" name="gelir" class="custom-control-input" value="Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar">
 </input>
  <label class="custom-control-label" for="customRadio3">
Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar</label>
</div><br>



<label class="control-label col-md-4"><b>Evin Durumu</b></label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio5" name="evin_durumu" class="custom-control-input" value="Kendi Evi (Brüt 70 m2 den fazla ise)">
  <label class="custom-control-label" for="customRadio5">Kendi Evi(Brüt 70 m2 den fazla ise) </label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio6" name="evin_durumu" class="custom-control-input" value="Kendi Evi(Brüt 70 m2 den küçük ise)">
  <label class="custom-control-label" for="customRadio6">Kendi Evi(Brüt 70 m2 den küçük ise)</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio7" name="evin_durumu" class="custom-control-input" value="Kirada">
  <label class="custom-control-label" for="customRadio7">Kirada</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio8" name="evin_durumu" class="custom-control-input" value="Kirası karşılanıyor">
  <label class="custom-control-label" for="customRadio8">Kirası karşılanıyor</label>
</div><br>

<label class="control-label col-md-4"><b>Evin fiziki durumu</b></label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio21" name="fiziki_durum" class="custom-control-input" value="Kötü">
  <label class="custom-control-label" for="customRadio21">Kötü</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio22" name="fiziki_durum" class="custom-control-input" value="Normal">
  <label class="custom-control-label" for="customRadio22">Normal</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio23" name="fiziki_durum" class="custom-control-input" value="İyi">
  <label class="custom-control-label" for="customRadio23">İyi</label>
</div><br>



<label class="control-label col-md-4"><b>Evin Isınma Durumu</b></label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio9" name="isinma_durumu" class="custom-control-input" value="Soba">
  <label class="custom-control-label" for="customRadio9">Soba</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio10" name="isinma_durumu" class="custom-control-input" value="Kalorifer">
  <label class="custom-control-label" for="customRadio10">Kalorifer</label>
</div><br>

 <div class="form-group">
    <label for="exampleFormControlSelect1"><b>Aile birey sayısı</b></label>
    <select class="form-control" id="exampleFormControlSelect1" name="aile_birey">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="Daha fazla">Daha fazla</option>
    </select>
  </div>

<div class="form-group">
    <label for="exampleFormControlSelect1"><b>Aile okuyan sayısı(ilkokul,ortaokul,lise)</b></label>
    <select class="form-control" id="exampleFormControlSelect1" name="okuyan_sayi">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="Daha fazla">Daha fazla</option>
    </select>
  </div>

<div class="form-group">
    <label for="exampleFormControlSelect1"><b>Aile üniversite okuyan sayısı</b></label>
    <select class="form-control" id="exampleFormControlSelect1" name="uni_sayisi">
       <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      
    </select>
  </div>

<label class="control-label col-md-4"><b>Ailede yaşlılık maaşı alan var mı?</b></label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio11" name="y_maas" class="custom-control-input" value="Evet">
  <label class="custom-control-label" for="customRadio11">Evet</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio12" name="y_maas" class="custom-control-input" value="Hayır">
  <label class="custom-control-label" for="customRadio12">Hayır</label>
</div><br>

<label class="control-label col-md-4"><b>Ailede özürlülük maaşı alan var mı?</b></label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio13" name="ozur_maas" class="custom-control-input" value="Evet">
  <label class="custom-control-label" for="customRadio13">Evet</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio14" name="ozur_maas" class="custom-control-input" value="Hayır">
  <label class="custom-control-label" for="customRadio14">Hayır</label>
</div><br>


<label class="control-label col-md-4"><b>Yardım alınan bir kurum var mı?</b></label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio15" name="kurum" class="custom-control-input" value="Hayır">
  <label class="custom-control-label" for="customRadio15">Hayır</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio16" name="kurum" class="custom-control-input" value="Kaymakamlık veya diğer kamu kurumu">
  <label class="custom-control-label" for="customRadio16">Kaymakamlık veya diğer kamu kurumu</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio17" name="kurum" class="custom-control-input" value="Vakıf, dernek vb. yerlerden alınan yardım">
  <label class="custom-control-label" for="customRadio17">Vakıf, dernek vb. yerlerden alınan yardım</label>
</div><br>


<label class="control-label col-md-4"><b>Ailede çalışabilir kişi sayısı</b></label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio18" name="calisan_kisi" class="custom-control-input" value="Çalışabilir kişi yok">
  <label class="custom-control-label" for="customRadio18">Çalışabilir kişi yok</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio19" name="calisan_kisi" class="custom-control-input" value="Bir kişi">
  <label class="custom-control-label" for="customRadio19">Bir kişi</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio20" name="calisan_kisi" class="custom-control-input" value="Birden fazla">
  <label class="custom-control-label" for="customRadio20">Birden fazla</label>
</div><br>

<button type="submit" class="btn btn-success" name="kaydet">Kaydet</button>
 </form>
</form>

</form>



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