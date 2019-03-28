<?php 
//Bağlantı sayfamızı include yöntemi ile sayfamıza çekiyoruz.
include ("dataBase.php"); 
?>
 
//Tablomuzu açıyoruz.
<table>
    <tr>
        <td>Üye Adı</td>
        <td>Üye Parolası</td>
    </tr>
    <?php 
                 
                //Bir mySQL sorgusu ile tüm üyeler tablosunu bir değişkene atıyoruz.
                $verileriCek = mysql_query("select * from users");
               
                //Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
                while ($b=mysql_fetch_array($verileriCek)){
                     
                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $uyead = $b['username'];
                    $uyesifre = $b['username_surname'];
                     
                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
                    echo "<tr>
                    <td>$uyead</td>
                    <td>$uyesifre</td>
                </tr>";
                     
                }
                 
   ?>
                 
</table>