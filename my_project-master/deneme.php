<?php
 
try {  
$db_ad='deneme';
$db_kullanici='root';
$db_sifre='';
$db = new PDO('mysql:host=localhost;charset=UTF8;dbname='.$db_ad, $db_kullanici, $db_sifre);
    
} 
catch (PDOException $e)
{
    print "Bağantı Hatası!: " . $e->getMessage() . "<br/>";
    die();
}
 
if(isset($_POST['kaydet']))
{
    $formliste=[$_POST['ad'],$_POST['soyad'],$_POST['dogum_yer']];
    
    $sorgu=$db->prepare("insert into bilgiler values(NULL,?,?,?)"); 
    $sorgu->execute($formliste);
    
}
 
?>
 
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Veri Tabanı İşlemleri</title>
</head>
<body>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="ad" placeholder="Yazar adını giriniz"><br>
    <input type="text" name="soyad" placeholder="Yazar soyadını giriniz"><br>
    <input type="text" name="dogum_yer" placeholder="Yazar soyadını giriniz"><br>
    <input type="submit" name="kaydet">
</form>
<hr>

</body>
</html>

