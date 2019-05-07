<?php
	include ("dataBase.php");
	
	if($_POST)
	{
		$name =trim($_POST["userName"]);
		$pass =trim($_POST["sifre"]);
		$query  = $db->query("SELECT * FROM admin WHERE userName='$name' && sifre='$pass'",PDO::FETCH_ASSOC);
		if ( $say = $query -> rowCount() ){
			if( $say > 0 ){
				session_start();
				$_SESSION['oturum']=true;
				$_SESSION['userName']=$name;
				$_SESSION['sifre']=$pass;
				
				header("location: index.php");
				echo '
			
				';
				
			}else{
				header("location: hata.php");
			}
		}else{
			header("location: hata.php");
		}
	}else{
		header("location:hata.php");
	}
	
?>