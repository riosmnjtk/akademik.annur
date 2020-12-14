<!DOCTYPE html>
<html>
	<head>
		<title>Form Login Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="img/annur.png"/>
		<link rel="stylesheet" href="css/menu.css"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/bgimg.css"/>
		<link rel="stylesheet" href="css/font.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
<body>

	<div class="background"></div>
	<div class="backdrop"></div>
	<div class="login-form-container" id="login-form">
		<div class="login-form-content">
			<div class="login-form-header">
				<div class="logo">
					<img src="img/annur.png"/>
				</div>
				<h3>Login ke akun Anda</h3>
			</div>
			<form method="post" action="proses.php" class="login-form">
				<div class="input-container">
					<i class="fa fa-envelope"></i>
					<input type="text" id="username" class="input" name="username" placeholder="Username"/>
				</div>
				<div class="input-container">
					<i class="fa fa-lock"></i>
					<input type="password"  id="password" class="input" name="password" placeholder="Password"/>
					<i id="show-password" class="fa fa-eye" onclick="showhide()"></i>
				</div>
				<button class="button btn-register" name="login">Login</button>
			</form>
		</div>
	</div>
<script>
	function showhide() {
	var x = document.getElementById("password");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	}
</script>
</body>
</html>
