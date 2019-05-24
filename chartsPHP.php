<?php 
include("dataBase.php");


                                    #--------------------------------GRAFİKLER PHP KODLARI BAŞLANGIÇ------------------------------------#
#---------------
#GRAFİK 1
#----------------
#kadin_sayisi
$query_kadin= $db->query("SELECT COUNT(users.id)as 'kadin_sayisi'
FROM users WHERE users.cinsiyet='Kadın' ", PDO::FETCH_ASSOC);
if ( $query_kadin->rowCount() )
{
     

      foreach( $query_kadin as $row_kadin ){
      $kadin=$row_kadin['kadin_sayisi'];
        
}
}

#erkek_sayisi
$query_erkek = $db->query("SELECT COUNT(users.id)as 'erkek_sayisi'
FROM users WHERE users.cinsiyet='Erkek' ", PDO::FETCH_ASSOC);
if ( $query_erkek->rowCount() )
{
     

     foreach( $query_erkek as $row_erkek ){
      $erkek=$row_erkek['erkek_sayisi'];
        
}
}




  $dataPoints_1 = array(
  array("label"=> "Erkek", "y"=> $erkek),
  array("label"=> "Kadın", "y"=> $kadin),
 
                    );

 ?>





  <!---GRAFİK 2----->

  <?php

include("dataBase.php");

#toplam
$toplamSayi= $db->query("SELECT COUNT(sorular.yardim_id) as toplam
FROM sorular", PDO::FETCH_ASSOC);
if ( $toplamSayi->rowCount() )
{
     

     foreach( $toplamSayi as $tp ){
          
           
  
    
    $tplm=$tp['toplam'];
 
        
}
}



#Kendi Evi(Brüt 70 m2 den fazla ise)
$sorgu_1= $db->query("SELECT COUNT(sorular.yardim_id) as sg1
FROM sorular
WHERE sorular.evin_durumu='Kendi Evi (Brüt 70 m2 den fazla ise)'", PDO::FETCH_ASSOC);
if ( $sorgu_1->rowCount() )
{
     

     foreach( $sorgu_1 as $sg1 ){
          
           
  
    
    $a1=$sg1['sg1'];
    $a1=$a1/$tplm*(100);
        
}
}

#Kendi Evi(Brüt 70 m2 den küçük ise)
$sorgu_2= $db->query("SELECT COUNT(sorular.yardim_id) as sg2
FROM sorular
WHERE sorular.evin_durumu='Kendi Evi(Brüt 70 m2 den küçük ise)' ", PDO::FETCH_ASSOC);
if ( $sorgu_2->rowCount() )
{
     

     foreach( $sorgu_2 as $sg2 ){
          
           
  
    
    $a2=$sg2['sg2'];
    $a2=$a2/$tplm*(100);
        
}


}

#Kirada
$sorgu_3= $db->query("SELECT COUNT(sorular.yardim_id) as sg3
FROM sorular
WHERE sorular.evin_durumu='Kirada' ", PDO::FETCH_ASSOC);
if ( $sorgu_3->rowCount() )
{
     

     foreach( $sorgu_3 as $sg3 ){
          
           
  
    
    $a3=$sg3['sg3'];
     $a3=$a3/$tplm*(100);
        
}
}
 
#Kirası karşılanıyor
$sorgu_4= $db->query("SELECT COUNT(sorular.yardim_id) as sg4
FROM sorular
WHERE sorular.evin_durumu='Kirası karşılanıyor' ", PDO::FETCH_ASSOC);
if ( $sorgu_4->rowCount() )
{
     

     foreach( $sorgu_4 as $sg4 ){
          
    $a4=$sg4['sg4'];
     $a4=$a4/$tplm*(100);

        
}


}
 


  $dataPoints_2 = array( 
  array("label"=>"Kendi Evi(Brüt 70 m2 den fazla ise)", "y"=>$a1),
  array("label"=>"Kendi Evi(Brüt 70 m2 den küçük ise)", "y"=>$a2),
  array("label"=>"Kirada", "y"=>$a3),
  array("label"=>"Kirası karşılanıyor", "y"=>$a4)
)

?>

  
  <!---GRAFİK 3----->


<?php 

#Net asgari ücretin %50’sine kadar geliri olanlar
$sorgu_1_gelir= $db->query("SELECT COUNT(sorular.yardim_id) as sg1
FROM sorular
WHERE sorular.gelir='Net asgari ücretin %50’sine kadar geliri olanlar'", PDO::FETCH_ASSOC);
if ( $sorgu_1_gelir->rowCount() )
{
     

     foreach( $sorgu_1_gelir as $sg1_gelir ){
          
           $a1=$sg1_gelir['sg1'];
        
}
}

#Net asgari ücretin %50’sinden fazla olup,%100’üne kadar
$sorgu_2_gelir= $db->query("SELECT COUNT(sorular.yardim_id) as sg2
FROM sorular
WHERE sorular.gelir='Net asgari ücretin %50’sinden fazla olup,%100’üne kadar geliri olanlar' ", PDO::FETCH_ASSOC);
if ( $sorgu_2_gelir->rowCount() )
{
     

     foreach( $sorgu_2_gelir as $sg2_gelir ){
          
           $a2=$sg2_gelir['sg2'];
        
}
}

#Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar
$sorgu_3_gelir= $db->query("SELECT COUNT(sorular.yardim_id) as sg3
FROM sorular
WHERE sorular.gelir='Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar' ", PDO::FETCH_ASSOC);
if ( $sorgu_3_gelir->rowCount() )
{
     

     foreach( $sorgu_3_gelir as $sg3_gelir ){
          
           
         $a3=$sg3_gelir['sg3'];
        
}
}
$dataPoints_3 = array( 
  array("y" => $a1,"label" => "Net asgari ücretin %50’sine kadar olanlar" ),
  array("y" => $a2,"label" => "Net asgari ücretin %50’sinden fazla olup,%100’üne kadar olanlar" ),
  array("y" => $a3,"label" => "Net asgari ücretin %100’ünden fazla olup %160’a kadar geliri olanlar" )
  
);
 

 ?>

<!-------------GRAFİK 4------------------>

<?php

include("dataBase.php");

#TOPLAM
$toplamSayi= $db->query("SELECT COUNT(sorular.yardim_id) as toplam
FROM sorular", PDO::FETCH_ASSOC);
if ( $toplamSayi->rowCount() )
{
     

     foreach( $toplamSayi as $tp ){
          
           $tplm=$tp['toplam'];

 
        
}
}




#İYİ_SAYİSİ
$durumIyi= $db->query("SELECT COUNT(sorular.yardim_id) as iyiSayisi
FROM sorular
WHERE sorular.fiziki_durum='İyi' ", PDO::FETCH_ASSOC);
if ( $durumIyi->rowCount() )
{
     

     foreach( $durumIyi as $diyi ){
          
           
  
    
     $d1=$diyi['iyiSayisi'];
     $d1=$d1/$tplm*(100);
        
}


}


#NORMAL_SAYİSİ
$durumNormal= $db->query("SELECT COUNT(sorular.yardim_id) as NormalSayisi
FROM sorular
WHERE sorular.fiziki_durum='Normal' ", PDO::FETCH_ASSOC);
if ( $durumNormal->rowCount() )
{
     

     foreach( $durumNormal as $Niyi ){
          
           
  
    
    $d2=$Niyi['NormalSayisi'];
      $d2=$d2/$tplm*(100);
        
}


}

#KÖTÜ_SAYİSİ
$durumKotu= $db->query("SELECT COUNT(sorular.yardim_id) as KotuSayisi
FROM sorular
WHERE sorular.fiziki_durum='Kötü' ", PDO::FETCH_ASSOC);
if ( $durumKotu->rowCount() )
{
     

     foreach( $durumKotu as $dKotu ){
          
           
  
    
    $d3=$dKotu['KotuSayisi'];
      $d3=$d3/$tplm*(100);
        
}

}

$dataPoints_4= array( 
  array("label"=>"İyi", "symbol" => "İyi","y"=>$d1),
  array("label"=>"Kötü", "symbol" => "Kötü","y"=>$d3),
  array("label"=>"Normal", "symbol" => "Normal","y"=>$d2)
  
)
 
?>

<!----------------GRAFİK 5------------------->

<?php
 
 include("dataBase.php");

#TOPLAM
$toplamSayi= $db->query("SELECT COUNT(sorular.yardim_id) as toplam
FROM sorular", PDO::FETCH_ASSOC);
if ( $toplamSayi->rowCount() )
{
     

     foreach( $toplamSayi as $tp ){
          
           
  
    
    $tplm=$tp['toplam'];

 
        
}
}




#Soba
$durumSoba= $db->query("SELECT COUNT(sorular.yardim_id) as SobaSayisi
FROM sorular
WHERE sorular.isinma_durumu='Soba' ", PDO::FETCH_ASSOC);
if ( $durumSoba->rowCount() )
{
     

     foreach( $durumSoba as $dSoba )   {
          
           
  
    
    $e1=$dSoba['SobaSayisi'];
     $e1=$e1/$tplm*(100);
        
}


}


#Kolarifer
$durumKalo= $db->query("SELECT COUNT(sorular.yardim_id) as KaloSayisi
FROM sorular
WHERE sorular.isinma_durumu='Kalorifer' ", PDO::FETCH_ASSOC);
if ( $durumKalo->rowCount() )
{
     

     foreach( $durumKalo as $dKalo ){
          
           
  
  $e2=$dKalo['KaloSayisi'];
     $e2=$e2/$tplm*(100);
}
}


#Diğer
$durumDiger= $db->query("SELECT COUNT(sorular.yardim_id) as DigerSayisi
FROM sorular
WHERE sorular.isinma_durumu='Diğer' ", PDO::FETCH_ASSOC);
if ( $durumDiger->rowCount() )
{
     

     foreach( $durumDiger as $dDiger ){
          
           
  
  $e3=$dDiger['DigerSayisi'];
     $e3=$e3/$tplm*(100);
}


}


$dataPoints_5= array( 
  array("label"=>"Soba", "y"=>$e1),
  array("label"=>"Kalorifer", "y"=>$e2),
  array("label"=>"Diger", "y"=>$e3)
  
)
 
?>
<!---------------GRAFİK 6----------->
<?php
 
include("dataBase.php");


#kadin_yas
$query_kadin_ort= $db->query("SELECT AVG(users.yas) as ort_kadin
FROM users
WHERE users.cinsiyet='Kadın' ", PDO::FETCH_ASSOC);
if ( $query_kadin_ort->rowCount() )
{
     

     foreach( $query_kadin_ort as $row_kadin_ort ){
          
           $kadin_ort=$row_kadin_ort['ort_kadin'];
        
}


}

#erkek_yas
$query_erkek_ort = $db->query("SELECT AVG(users.yas) as ort_erkek
FROM users
WHERE users.cinsiyet='Erkek' ", PDO::FETCH_ASSOC);
if ( $query_erkek_ort->rowCount() )
{
     

     foreach( $query_erkek_ort as $row_erkek_ort ){
          
           
  
    
    $erkek_ort=$row_erkek_ort['ort_erkek'];
        
}


}





$dataPoints_6 = array( 
  array("y" => $erkek_ort, "label" => "ERKEK" ),
  array("y" => $kadin_ort, "label" => "KADIN" )
);
 
?>



<!---------GRAFİK 7--------------->


<?php
 


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






$dataPoints_7 = array( 
  array("y" =>  $olumluSayi, "label" => "Onaylanan" ),
  array("y" =>  $bekleSayi, "label" => "Bekleyen" ),
  array("y" =>  $olumsuzSayi, "label" => "Olumsuz" ),
  
  
);


#Grafik 8

#2019
$oranlarYil= $db->query("SELECT round(AVG(ihtiyac_oranlari.oranlar),1) as ortalama2019
FROM ihtiyac_oranlari ", PDO::FETCH_ASSOC);
if ( $oranlarYil->rowCount() )
{
     

      foreach( $oranlarYil as $yil ){
      
      $yil2019=$yil['ortalama2019'];
        
}
}

#2018
$oranlarYil= $db->query("SELECT gecmis_veriler.oranlarGecmis as ortalama2018
FROM gecmis_veriler
WHERE yıllar='2015'", PDO::FETCH_ASSOC);
if ( $oranlarYil->rowCount() )
{
     

      foreach( $oranlarYil as $yil ){
      
      $yil2018=$yil['ortalama2018'];
        
}
}

#2017
$oranlarYil= $db->query("SELECT gecmis_veriler.oranlarGecmis as ortalama2017
FROM gecmis_veriler
WHERE yıllar='2017'", PDO::FETCH_ASSOC);
if ( $oranlarYil->rowCount() )
{
     

      foreach( $oranlarYil as $yil ){
      
      $yil2017=$yil['ortalama2017'];
        
}
}


#2016
$oranlarYil= $db->query("SELECT gecmis_veriler.oranlarGecmis as ortalama2016
FROM gecmis_veriler
WHERE yıllar='2016'", PDO::FETCH_ASSOC);
if ( $oranlarYil->rowCount() )
{
     

      foreach( $oranlarYil as $yil ){
      
      $yil2016=$yil['ortalama2016'];
        
}
}

#2015
$oranlarYil= $db->query("SELECT gecmis_veriler.oranlarGecmis as ortalama2015
FROM gecmis_veriler
WHERE yıllar='2015'", PDO::FETCH_ASSOC);
if ( $oranlarYil->rowCount() )
{
     

      foreach( $oranlarYil as $yil ){
      
      $yil2015=$yil['ortalama2015'];
        
}
}






$dataPoints_8= array(
  array("y"=> $yil2015, "label"=> "2015"),
  array("y"=> $yil2016, "label"=> "2016"),
  array("y"=> $yil2017, "label"=> "2017"),
  array("y"=> $yil2018, "label"=> "2018"),
  array("y"=> $yil2019, "label"=> "2019")
  
);
 






 
    #--------------------GRAFİKLER PHP KODLARI BİTİŞ------------------------------------------


?>
