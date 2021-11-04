<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<title> Entrar </title>	
	<meta charset="UTF-8">
        <meta name="descriptison" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">         
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="True">

        <!-- Favicons-->
        <link rel="icon" href="./assets/img/icons/logo.png">
        <link rel="apple-touch-icon" href="./assets/img/icons/logo-quadrada.png">      

        <!-- Vizualização Facebook -->
        <meta property="og:site_name" content="Jobei">
        <meta property="og:url" content="">  
        <meta property="og:title" content="Entre ou cadastre-se">      
        <meta property="og:description" content="">
        <meta property="og:image" content="url('./assets/img/icons/logo.png')">   
        <meta property="og:image:alt" content="Jobei">                 
        <!-- Vizualização Twitter -->
        <meta name="twitter:card" content="summary">  
        <meta name="twitter:title" content="Entre ou cadastre-se">
        <meta name="twitter:site" content="">             
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="url('./assets/img/icons/logo.png')">
        <meta name="twitter:image:alt" content="Jobei">
        
        <!-- Files -->
		<link rel="stylesheet" type="text/css" href="./assets/css/core.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		
		<!-- Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-119386393-1');
		</script>
	</head>

	<body class="login-page">
		<div class="login-header box-shadow">
			<div class="container-fluid d-flex justify-content-between align-items-center">
				<div class="brand-logo"> <a href="./index.html"> <img src="./assets/img/icons/logo-secundario.png" height="25" alt="Logo"> </a> </div>
			</div>
		</div>		
		<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="./assets/img/login-page-img.png" alt="">
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title"> <h2 class="text-center text-primary"> Entrar </h2> </div>
							
							<form action="./restrict/login.php" method="post">
								<div class="select-role">
									<div class="btn-group btn-group-toggle" data-toggle="buttons">
										<label class="btn active">
											<input type="radio" name="nivel" value="1" id="user">
											<div class="icon"> <img src="./assets/img/briefcase.svg" class="svg"> </div>
											<span> Sou </span> Autônomo
										</label>
										<label class="btn">
											<input type="radio" name="nivel" value="2" id="admin">
											<div class="icon"> <img src="./assets/img/person.svg" class="svg"> </div>
											<span> Sou </span> Admin
										</label>
									</div>
								</div>

								<div class="input-group custom">
									<input type="text" name="email" class="form-control form-control-lg" placeholder="Email" required>
									<div class="input-group-append custom"> <span class="input-group-text"> <i class="icon-copy dw dw-user1"></i> </span> </div>
								</div>
								<div class="input-group custom">
									<input type="password" name="senha" class="form-control form-control-lg" placeholder="********" required>
									<div class="input-group-append custom"> <span class="input-group-text"> <i class="dw dw-padlock1"></i> </span> </div>
								</div>

								<div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="lembrar_senhas">
											<label class="custom-control-label" for="lembrar_senhas"> Lembrar </label>
										</div>
									</div>
									<div class="col-6"> <div class="forgot-password"> <a href="./forgot-password.html"> Esqueci a senha </a> </div> </div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<input type="submit" name="login" class="btn btn-primary btn-lg btn-block" value=" Entrar ">
										</div>
										<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373"> OU </div>
										<div class="input-group mb-0"> <a class="btn btn-outline-primary btn-lg btn-block" href="./register.php"> Criar uma conta </a> </div>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="./assets/js/core.js"></script>
		<script src="./assets/js/script.min.js"></script>
		<script src="./assets/js/process.js"></script>
		<script src="./assets/js/layout-settings.js"></script>
	</body>
</html>