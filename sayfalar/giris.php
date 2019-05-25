

<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Giriş</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="\css\main_giris.css">
<!--===============================================================================================-->
	<link rel="shortcut icon" href="logo4.ico" type="image/x-icon" />

	
</head>
<body>
	
	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/bbbg-01.jpg" alt="IMG">
				</div>
				<form action="kontrol.php" method="POST">
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Personel Girişi
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="userName" placeholder="Kullanıcı Adı">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="sifre" placeholder="Sifre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
							
						</span>


					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="giris">
							Giriş
						</button>
					</div>
					</form>
					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
	<!-- <script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script> -->
<!--===============================================================================================-->
	<script src="Login_v1/js/main.js"></script>
</form>
</body>
</html>