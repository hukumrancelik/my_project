
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
        $_POST["cinsiyet"],
        $_POST["dg"],
        $_POST["yas"]=0,
        $_POST["onay_durumu"]


                ];
    $sorgu=$db->prepare("insert into users values(NULL,?,?,?,?,?,?,?,?)"); 
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
        $_POST['kisi_ID']=$id,
        $gelir=$_POST['gelir'],
        $evin_durumu=$_POST['evin_durumu'],
        $fiziki_durum=$_POST['fiziki_durum'],
        $isinma_durumu=$_POST['isinma_durumu'],
        $aile_birey=$_POST["aile_birey"],
        $okuyan_sayi=$_POST["okuyan_sayi"],
        $uni_sayisi=$_POST["uni_sayisi"],
        $y_maas=$_POST["y_maas"],
        $ozur_maas=$_POST["ozur_maas"],
        $kurum=$_POST["kurum"],
        $calisan_kisi=$_POST["calisan_kisi"]

                ];
    $sorgu_sorular=$db->prepare("insert into sorular values(NULL,?,?,?,?,?,?,?,?,?,?,?,?)"); 
    $sorgu_sorular->execute($sorular_gonder);

    
}

switch ($gelir) {
  case 'Net asgari ücretin %50’sine kadar geliri olanlar':
    $gel=9;
    break;

    case 'Net asgari ücretin %50’sinden fazla olup,%100’üne kadar olanlar':
    $gel=2;
    break;

    case 'Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar':
    $gel=1;
    break;

  default:
    # code...
    break;

    #10
}

switch ($evin_durumu) {
  case 'Kendi Evi(Brüt 70 m2 den fazla ise)':
    $ed=0;
    break;

    case 'Kendi Evi(Brüt 70 m2 den küçük ise)':
    $ed=2;
    break;

    case 'Kirada':
    $ed=9;
    break;

    case 'Kirası karşılanıyor':
    $ed=1;
    break;

  default:
    # code...
    break;

    #11
}

switch ($fiziki_durum) {
  case 'İyi':
    $fd=1;
    break;

    case 'Kötü':
    $fd=9;
    break;

    case 'Normal':
    $fd=2;
    break;

  
  default:
    # code...
    break;

    #9
}

switch ($isinma_durumu) {
  case 'Soba':
    $isin=9;
    break;

    case 'Kolarifer':
    $isin=1;
    break;

    case 'Diğer':
    $isin=3;
    break;


  default:
    # code...
    break;

    #9
}


switch ($aile_birey) {
  
    case '1':
    $ab=1;
    break;

    case '2':
    $ab=2;
    break;

    case '3':
    $ab=4;
    break;

    case 'Daha fazla':
    $ab=9;
    break;


  default:
    # code...
    break;

    #12
}

switch ($okuyan_sayi) {
  case '0':
    $oy=0;
    break;

    case '1':
    $oy=1;
    break;

    case '2':
    $oy=2;
    break;

    case '3':
    $oy=3;
    break;

    case '4':
    $oy=9;
    break;

  default:
    # code...
    break;

    #10
}

switch ($uni_sayisi) {
  case '0':
    $uni=0;
    break;

    case '1':
    $uni=1;
    break;

    case '2':
    $uni_=2;
    break;

    case '3':
    $uni=9;
    break;

  default:
    # code...
    break;

    #8
}


switch ($y_maas) {
  case 'Evet':
    $ymaas=0;
    break;

    case 'Hayır':
    $ymaas=9;
    break;


  default:
    # code...
    break;

    #7
}

switch ($ozur_maas) {
  case 'Evet':
    $ozur=0;
    break;

    case 'Hayır':
   $ozur=9;
    break;

   
  default:
    # code...
    break;

    #7
}


switch ($kurum) {
  case 'Hayır':
    $kur=9;
    break;

    case 'Kaymakamlık veya diğer kamu kurumu':
    $kur=1;
    break;

    case 'Vakıf, dernek vb. yerlerden alınan yardım':
    $kur=1;
    break;

    default:
    # code...
    break;

    #7
}


switch ($calisan_kisi) {
  case 'Çalışabilir kişi yok':
    $calis=10;
    break;

    case 'Bir kişi':
    $calis=2;
    break;

    case 'Birden fazla':
    $calis=1;
    break;

  default:
    # code...
    break;

    #9
}

$toplamOran=$calis+$kur+$ozur+$ymaas+$uni+$oy+$ab+$isin+$fd+$ed+$gel;


#yas_guncelleme
if(isset($_POST['kaydet']))
{
   
    $yas_guncel=$db->prepare("UPDATE users SET yas = EXTRACT(year FROM CURRENT_TIMESTAMP) - EXTRACT(year FROM dg)"); 
    $yas_guncel->execute();
    

    
}


#ihtiyac_orani

if(isset($_POST['kaydet']))
{
      $sorular_oran=[
        $_POST['kisi_no']=$id,
        $_POST['oranlar']=$toplamOran
      

                ];
    $sorgu_oran=$db->prepare("insert into ihtiyac_oranlari values(NULL,?,?)"); 
    $sorgu_oran->execute($sorular_oran);

    
}



?>


<!DOCTYPE html>
 <meta charset="utf-8">
 <title>Kayıt Ekle</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="main_dene.css"/>

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
        <li><a class="app-menu__item " href="index.php"><span class="app-menu__label">Anasayfa</span></a></li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"></i>

          <span >Kayıt İşlemleri</a>
          <ul class="treeview-menu">
             <li><a class="treeview-item active" href="kayit_ekle.php"> Kayıt Ekle</a></li>


            <li><a class="treeview-item" href="kayitlar.php"> Kayıtlar </a></li>
            
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
            <li><a class="treeview-item active" href="puan.php">İhtiyaç Puanlarına Göre</a></li>
          </ul>
            
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">İşlemler</span></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="onay.php">Başvuru Onaylama</a></li>
            <li><a class="treeview-item" href="kayitSilme.php">Kayit Silme</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="giris.php" ><span class="app-menu__label">ÇIKIŞ</span></a>
    </aside>
    <main class="app-content">
      <div class="app-title">
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Kişisel Bilgiler</h3>
            <?php 

              if(isset($sorgu_sorular))
              {

                  echo "  <div class= 'alert alert-success' role= 'alert'><a class='alert-link'> Kaydınız basarıyla alındı</a>

            </div>";


              }
             ?>

             
          
            <div class="tile-body">
              <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">      
                <div class="form-group">

                  <label class="control-label"><b>Ad</b></label>
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
                   
                     <div class="form-group">
                  <label class="control-label">Doğum Tarihi</label>
                  <input class="form-control" type="text" placeholder="YYYY/AA/GG" name="dg">
                </div><br>

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
  <label class="custom-control-label" for="customRadio1">Net asgari ücretin %50’sine kadar olanlar</label>
</div>  
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="gelir" class="custom-control-input" value="Net asgari ücretin %50’sinden fazla olup,%100’üne kadar geliri olanlar"></input>
  <label class="custom-control-label" for="customRadio2">Net asgari ücretin %50’sinden fazla olup,%100’üne kadar olanlar </label>
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
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio10_1" name="isinma_durumu" class="custom-control-input" value="Diğer">
  <label class="custom-control-label" for="customRadio10_1">Diğer</label>
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