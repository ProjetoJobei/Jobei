<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Cadastro</title>
		<meta charset="utf-8">		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="True">

		<!-- Site favicon -->
		<link rel="icon" type="image/png" href="vendors/images/logo.png">
		<link rel="apple-touch-icon" href="vendors/images/logo-quadrarda.png">	

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
		<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

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
		<div class="login-header box-shadow" style="background: #f2f0ff;">
			<div class="container-fluid d-flex justify-content-between align-items-center">
				<div class="brand-logo">
					<a href="login.html">
						<img src="vendors/images/logo-secundario.png" style="height: 1.5em;" alt="">
					</a>
				</div>				
			</div>
		</div>
		<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="vendors/images/register-page-img.png" alt="">
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="register-box bg-white box-shadow border-radius-10">
							<div class="wizard-content">	
								<form action="./restrict/cadastro.php" method="post" id="cadastro_de_usuario" class="tab-wizard2 wizard-circle wizard">
									<h5> Informações básicas </h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Nome de usuário </label>
												<div class="col-sm-8">
													<input name="nome_user" type="text" class="form-control" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Email </label>
												<div class="col-sm-8">
													<input type="email" name="email_user" class="form-control" required>
												</div>
											</div>											
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Senha </label>
												<div class="col-sm-8">
													<input type="password" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Confirmar senha </label>
												<div class="col-sm-8">
													<input type="password" name="senha_user" class="form-control" required>
												</div>
											</div>
										</div>
									</section>

									<h5> Informações pessoais </h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Nome completo </label>
												<div class="col-sm-8">
													<input type="text" name="nome_completo_user" id="nome_completo_user" class="form-control" required>
												</div>
											</div>
											<div class="form-group row align-items-center">
												<label class="col-sm-4 col-form-label"> Gênero </label>
												<div class="col-sm-8">
													<div class="custom-control custom-radio custom-control-inline pb-0">
														<input type="radio" value="Masculino" name="genero_user" id="male" class="custom-control-input">
														<label class="custom-control-label" for="male"> Masculino </label>
													</div>
													<div class="custom-control custom-radio custom-control-inline pb-0">
														<input type="radio" value="Feminino" name="genero_user" id="female" class="custom-control-input">
														<label class="custom-control-label" for="female"> Feminino </label>
													</div>
													<div class="custom-control custom-radio custom-control-inline pb-0">
														<input type="radio" value="Prefiro não dizer" name="genero_user" id="no-gender" class="custom-control-input">
														<label class="custom-control-label" for="no-gender"> Prefiro não dizer </label>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Data de nascimento </label>
												<div class="col-sm-8">
													<input type="text" name="nascimento_user" class="form-control date-picker" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Telefone </label>
												<div class="col-sm-8">
													<input type="text" name="telefone_user" placeholder="(xx)xxxxx-xxxx" class="form-control">
												</div>
											</div>
										</div>
									</section>
									
									<h5> Informações de contato </h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Biografia <small>(com o que trabalha)</small> </label>
												<div class="col-sm-8">
													<input type="text" name="biografia_user" rows="4" class="form-control">
												</div>
											</div>											
											<div class="form-group row align-items-center">
												<label class="col-sm-4 col-form-label"> Cidade </label>
												<div class="col-sm-8">
													<input type="text" name="cidade_user" class="form-control" required>
												</div>
											</div>											
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Estado </label>
												<div class="col-sm-8">
													<select name="estado_user" class="form-control selectpicker" title="Estado" data-size="5" required>
														<option value="AC"> Acre </option>
														<option value="AL"> Alagoas </option>
														<option value="AP"> Amapá </option>
														<option value="AM"> Amazonas </option>
														<option value="BA"> Bahia </option>
														<option value="CE"> Ceará </option>
														<option value="DF"> Distrito Federal </option>
														<option value="ES"> Espírito Santo </option>
														<option value="GO"> Goiás </option>
														<option value="MA"> Maranhão </option>
														<option value="MT"> Mato Grosso </option>
														<option value="MS"> Mato Grosso do Sul </option>
														<option value="MG"> Minas Gerais </option>
														<option value="PA"> Pará </option>
														<option value="PB"> Paraíba </option>
														<option value="PR"> Paraná </option>
														<option value="PE"> Pernambuco </option>
														<option value="PI"> Piauí </option>
														<option value="RJ"> Rio de Janeiro </option>
														<option value="RN"> Rio Grande do Norte </option>
														<option value="RS"> Rio Grande do Sul </option>
														<option value="RO"> Rondônia </option>
														<option value="RR"> Roraima </option>
														<option value="SC"> Santa Catarina </option>
														<option value="SP"> São Paulo </option>
														<option value="SE"> Sergipe </option>
														<option value="TO"> Tocantins </option>
													</select>
												</div>
											</div>
										</div>
									</section>

									<h5> Confirmação </h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<ul class="register-info">
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600"> Nome completo </div>														
														<div class="col-sm-8"> 
															<script type="text/JavaScript">
																function showMessage(){
																	var nomeCompleto = document.getElementById("nome_completo_user").value;
																	display_message.innerHTML= nomeCompleto;
																}
															</script>
															<p id="display_message" onLoad="showMessage()"></p>															
														</div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600"> Nome de usuário </div>
														<div class="col-sm-8"> <?php //echo $_GET['nome_user'] ?> </div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600"> Email </div>
														<div class="col-sm-8"> <?php //echo $_POST['email_user'] ?> </div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600"> Telefone </div>
														<div class="col-sm-8"> <?php //echo $_POST['telefone_user'] ?> </div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600"> Localização </div>
														<div class="col-sm-8"> <?php //echo $_POST['cidade_user'].", ".$_POST['estado_user'] ?> </div>
													</div>
												</li>
											</ul>
											<div class="custom-control custom-checkbox mt-4">
												<input type="checkbox" class="custom-control-input" onClick="submit" id="termos" required>
												<label class="custom-control-label" for="termos"> Li e concordo com os termos de serviço e políticas de privacidade. </label>
											</div>
										</div>
									</section>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
		<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
				<div class="modal-content">
					<div class="modal-body text-center font-18">
						<h3 class="mb-20"> Sucesso! </h3>
						<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
						Como padrão você será cadastrado como AUTÔNOMO
					</div>
					<div class="modal-footer justify-content-center">
						<a href="./restrict/cadastro.php" class="btn btn-primary"> Entrar </a>
					</div>
				</div>
			</div>
		</div>
		<!-- success Popup html End -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="vendors/scripts/steps-setting.js"></script>
	</body>
</html>