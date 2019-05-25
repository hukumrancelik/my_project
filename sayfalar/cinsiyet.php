<?php 
include("dataBase.php");

#kadin_sayisi
$query= $db->query("SELECT COUNT(users.id)as 'kadin_sayisi'
FROM users WHERE users.cinsiyet='Kadın' ", PDO::FETCH_ASSOC);
if ( $query->rowCount() )
{
     

     foreach( $query as $row ){
          
           
  
    
    $kadin=$row['kadin_sayisi'];
        
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




$dataPoints = array(
  array("label"=> "Erkek", "y"=> $erkek),
  array("label"=> "Kadın", "y"=> $kadin),
 
                    );

 ?>


 <?php 






  ?>