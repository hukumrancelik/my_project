<?php 

insclude("dataBase.php")


$islem = (" SELECT* ,COUNT(users.id) AS kadin_sayisi
FROM users
WHERE users.cinsiyet="Kadın" "
);




$sonuc = mysql_query($islem) or die(mysql_error());

echo "kadin sayisi=".COUNT(users.id);





 ?>