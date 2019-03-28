



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
          <form action="form_oku.php" method="GET">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Vali</a>
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
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="login/page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
   <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Anasayfa</span></a></li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Kayıt İşkemleri</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
             <li><a class="treeview-item active" href="kayit_ekle.php"><i class="icon fa fa-circle-o"></i> Kayit Ekle</a></li>


            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Kayıtlar </a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Kayıtlar</a></li>
            
           

            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Grafikler</span></a></li>
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
              <form>
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
                   
                   <label class="control-label">Telefon</label>
                    <input type="text" class="form-control bfh-phone" data-format="+1 (ddd) ddd-ddddb" name="user_tel">
                
                <div class="form-group">
                <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Adres Bilgileri </label> <br>

      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect"><br>
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
        <option value="29 EKİM MAHALLESİ"> 29 EKİM MAHALLESİ</option>
        
    <div class="form-group">
    <label for="inputAddress1"></label>
    <input type="text" class="form-control" id="inputAddress1" placeholder="Sokak" name="sokak">
  </div>

    <div class="form-group">
    <label for="inputAddress2"></label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartman" name="apartman">
  </div>

  <div class="form-group">
    <label for="inputAddress3"></label>
    <input type="text" class="form-control" id="inputAddress3" placeholder="Kat" name="kat">
  </div>


  <div class="form-group">
    <label for="inputAddress4"></label>
    <input type="text" class="form-control" id="inputAddress4" placeholder="Kapı No" name="kapi_no">
  </div>





         
      </select>
    </div>
                
                </div>
          
                
              </form>
            </div>
            <div class="tile-footer">
            <button type="submit" class="btn btn-success" name="kaydet">Kaydet</button>
               
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
  <input type="radio" id="customRadio1" name="customRadio_1" class="custom-control-input"></input>
  <label class="custom-control-label" for="customRadio1">Net asgari ücretin %50’sine kadar geliri olanlar 111 </label>
</div>  
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio_2" class="custom-control-input"></input>
  <label class="custom-control-label" for="customRadio2">Net asgari ücretin %50’sinden fazla olup,%100’üne kadar geliri olanlar</label>
</div>


<div class="custom-control custom-radio">
  <input type="radio" id="customRadio3" name="customRadio_3" class="custom-control-input">
    
  </input>
  <label class="custom-control-label" for="customRadio3">
Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar</label>
</div><br>



<label class="control-label col-md-4">Evin Durumu</label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio5" name="customRadio_5" class="custom-control-input">
  <label class="custom-control-label" for="customRadio5">Kendi Evi (Brüt 70 m2 den fazla ise) 12 7,06</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio6" name="customRadio_6" class="custom-control-input">
  <label class="custom-control-label" for="customRadio6">Kendi Evi(Brüt 70 m2 den küçük ise) 74 43,53</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio7" name="customRadio_7" class="custom-control-input">
  <label class="custom-control-label" for="customRadio7">Kirada</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio8" name="customRadio_8" class="custom-control-input">
  <label class="custom-control-label" for="customRadio8">Kirası karşılanıyor</label>
</div><br>

<label class="control-label col-md-4">Evin fiziki durumu</label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio21" name="customRadio_21" class="custom-control-input">
  <label class="custom-control-label" for="customRadio21">Kötü</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio22" name="customRadio_22" class="custom-control-input">
  <label class="custom-control-label" for="customRadio22">Normal</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio23" name="customRadio_23" class="custom-control-input">
  <label class="custom-control-label" for="customRadio23">İyi</label>
</div><br>



<label class="control-label col-md-4">Evin Isınma Durumu</label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio9" name="customRadio_9" class="custom-control-input">
  <label class="custom-control-label" for="customRadio9">Soba</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio10" name="customRadio_10" class="custom-control-input">
  <label class="custom-control-label" for="customRadio10">Kalorifer</label>
</div><br>

 <div class="form-group">
    <label for="exampleFormControlSelect1">Aile birey sayısı</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>Daha fazla</option>
    </select>
  </div>

<div class="form-group">
    <label for="exampleFormControlSelect1">Aile okuyan sayısı(ilkokul,ortaokul,lise)</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>Daha fazla</option>
    </select>
  </div>

<div class="form-group">
    <label for="exampleFormControlSelect1">Aile üniversite okuyan sayısı</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      
    </select>
  </div>

<label class="control-label col-md-4">Ailede yaşlılık maaşı alan var mı?</label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio11" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio11">Evet</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio12" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio12">Hayır</label>
</div><br>

<label class="control-label col-md-4">Ailede özürlülük maaşı alan var mı?</label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio13" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio13">Evet</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio14" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio14">Hayır</label>
</div><br>


<label class="control-label col-md-4">Yardım alınan bir kurum var mı?</label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio15" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio15">Hayır</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio16" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio16">Kaymakamlık veya diğer kamu kurumu</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio17" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio17">Vakıf, dernek vb. yerlerden alınan yardım</label>
</div><br>


<label class="control-label col-md-4">Ailede çalışabilir kişi sayısı</label>
     <div class="custom-control custom-radio">
  <input type="radio" id="customRadio18" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio18">Çalışabilir kişi yok</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio19" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio19">Bir kişi</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio20" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio20">Birden fazla</label>
</div><br>






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
  </form>
  </form>
  </body>
</html>