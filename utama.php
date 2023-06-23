<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
	<style>
		body {
            background-image: url("https://p4.wallpaperbetter.com/wallpaper/829/719/620/abstract-wallpaper-preview.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			color: #333;
			margin: 0;
			padding: 0;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		h1 {
			font-size: 3em;
			margin-top: 0;
			margin-bottom: 0.5em;
		}



		button {
			padding: 1em 2em;
			border-radius: 4px;
			background-color: #4CAF50;
			color: white;
			font-size: 1.2em;
			border: none;
			margin: 1em;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		button:hover {
			background-color: #3e8e41;
		}

		.login-admin {
			position: absolute;
			top: 0;
			right: 0;
			margin: 1em;
			background-color: greenyellow;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100%;
			width: 850px;
			margin: 0 auto;
			padding: 2em;
            
			border-radius: 8px;
			box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
		}
		.brand-logo {
			
			font-weight: bold;
			color: white;
			
		}
		.brand-logo h1 {
			font-size: 4em;
			
		}

		.brand-logo p {
			font-size: 20px;
			

		}

		.brand-tagline {
			font-size: 1.5em;
			color: green;
			margin-bottom: 2em;
		}
        .kelas {
    font-size: 15px;
    text-decoration: none;
    color: white;
}

	</style>
	<script>
		function animateButton(button) {
			button.style.transform = 'scale(1.1)';
			button.style.backgroundColor = '#3e8e41';
			button.style.color = '#fff';
		}

		function resetButton(button) {
			button.style.transform = 'scale(1)';
			button.style.backgroundColor = '#4CAF50';
			button.style.color = '#fff';
		}

	</script>
</head>
<body>

    <div class="container">
		<div class="brand-logo"><h1>Wallpaper HD Free</h1><br><p align="center">-- Website penyedia gambar siap download --</p></div>
		<div class="brand-tagline">Silahkan <b>Log In</b> atau <b>Sign Up</b> untuk melanjutkan</div>
		<p><a href="signup.php"><button onclick="animateButton(this); setTimeout(() => resetButton(this), 300);">Sign Up</button></a>
        <a href="login.php"><button onclick="animateButton(this); setTimeout(() => resetButton(this), 300);">Log In</button></a></p>
		<div class="login-admin">
			<p> ==> khusus Admin<br><a href="adminlogin.php"><button>Admin</button></a></p>
		</div>
        <p align="center" style="color: white;"><b>Contact Us:</b></p>
    <p align="center" style="color: white;">
        <a class="kelas" href="https://www.facebook.com/patur.patur.338863">FACEBOOK</a> -|-
        <a class="kelas" href="https://wa.me/qr/NSGNKAZ7GF4LG1">WHATSAPP</a> -|-
        <a class="kelas" href="https://www.instagram.com/fathur259000/">INSTAGRAM</a>
    </p>
	</div>
    
</body>
</html>
