<?php 
$query = $db->query("SELECT * FROM users", PDO::FETCH_ASSOC);
if ( $query->rowCount() )


{
     

     foreach( $query as $row ){
          
           
   echo "<ul class='list-group list-group-flush'>";
  echo "<li class='list-group-item'>Ad:</li>".$row['username'],;
  echo "<li class='list-group-item'>Soyad:</li>".$row['username_surname'],;
  echo "<li class='list-group-item'>Telefon:</li>".$row['user_tel'];
  echo "<li class='list-group-item'>Adres:</li>";
  
echo "</ul>";
     
}


}







 ?>






 ?>