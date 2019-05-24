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
?>

<?php 

$sql=("SELECT * FROM adres_bilgileri");  
           $result = mysqli_query($sql);  
           $json_array = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $json_array[] = $row;  
           }  
           /*echo '<pre>';  
           print_r(json_encode($json_array));  
           echo '</pre>';*/  
           echo json_encode($json_array);




 ?>
