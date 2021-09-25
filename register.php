<?php 
    include './conecta.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Cadastro </title>	
		<meta charset="UTF-8">
		<meta name="descriptison" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">         
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="True">

		<!-- Favicons-->
		<link rel="icon" href="./assets/img/icons/logo.png">
		<link rel="apple-touch-icon" href="./assets/img/icons/logo-quadrada.png">      
		
		<!-- Files -->
		<link rel="stylesheet" type="text/css" href="./assets/css/core.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/plugins/jquery-steps/jquery.steps.css">
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
				<div class="brand-logo"> <a href="./index.html"> <img src="./assets/img/icons/logo-secundario.png" alt="Logo"> </a> </div>
				<div class="login-menu">
					<ul>
						<li> <a href="./login.html"> Entrar </a> </li>
					</ul>
				</div>
			</div>
		</div>
		<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7"> <img src="./assets/img/register-page-img.png" alt=""> </div>
					<div class="col-md-6 col-lg-5">
						<div class="register-box bg-white box-shadow border-radius-10">
							<div class="wizard-content">
								<form action="./restrict/cadastro.php" method="post" id="cadastro_de_usuario" class="tab-wizard2 wizard-circle wizard">
									<h5> Informações básicas </h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Nome de usuário </label>
												<div class="col-sm-8"> <input name="nome_user" type="text" class="form-control" required> </div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Email </label>
												<div class="col-sm-8"> <input name="email_user" type="email" class="form-control" required> </div>
											</div>											
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Senha </label>
												<div class="col-sm-8"> <input type="password" class="form-control"> </div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Confirmar senha </label>
												<div class="col-sm-8"> <input name="senha_user" type="password" class="form-control" required> </div>
											</div>
										</div>
									</section>

									<h5> Informações pessoais </h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Nome completo </label>
												<div class="col-sm-8">
													<input name="nome_completo_user" type="text" class="form-control" required>
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
												<label class="col-sm-4 col-form-label"> Cidade </label>
												<div class="col-sm-8"> <input name="cidade_user" type="text" class="form-control" required> </div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Estado </label>
												<div class="col-sm-8"> 
													<select name="estado_user" class="form-control selectpicker" title="  ">
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
									
									<h5> Métodos de pagamento </h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Tipo </label>
												<div class="col-sm-8">
													<select name="tipo_de_pagamento" class="form-control selectpicker" title="Selecione um tipo">
														<option value="1"> Crédito </option>
														<option value="2"> Débito </option>
														<option value="3"> Boleto </option>
													</select>
												</div>
											</div>
											<div class="form-group row align-items-center">
												<label class="col-sm-4 col-form-label"> Número do cartão </label>
												<div class="col-sm-8"> <input name="numero_cartao_user" type="text" class="form-control"> </div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> CVC </label>
												<div class="col-sm-3"> <input name="cvc_user" type="text" class="form-control"> </div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"> Data de expiração </label>
												<div class="col-sm-8">
													<div class="row">
														<div class="col-6">
															<select name="mes_expira_cartao" class="form-control selectpicker" title="Mês" data-size="5">
																<option value='Janeiro'> Janeiro </option>
																<option value='Fevereiro'> Fevereiro </option>
																<option value='Março'> Março </option>
																<option value='Abril'> Abril </option>
																<option value='Maio'> Maio </option>
																<option value='Junho'> Junho </option>
																<option value='Julho'> Julho </option>
																<option value='Agosto'> Agosto </option>
																<option value='Setembro'> Setembro </option>
																<option value='Outubro'> Outubro </option>
																<option value='Novembro'> Novembro </option>
																<option value='Dezembro'> Dezembro </option>
															</select>
														</div>
														<div class="col-6">
															<select name="ano_expira_cartao" class="form-control selectpicker" title="Ano" data-size="5">
																<option value='2022'> 2022 </option>
																<option value='2023'> 2023 </option>
																<option value='2024'> 2024 </option>
																<option value='2025'> 2025 </option>
																<option value='2026'> 2026 </option>
																<option value='2027'> 2027 </option>
																<option value='2028'> 2028 </option>
															</select>
														</div>
													</div>
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
														<div class="col-sm-8"> Exemplo <?php echo $nome_completo; ?> </div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600"> Nome de usuário </div>
														<div class="col-sm-8"> Ex <?php echo $nome; ?> </div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600"> Email </div>
														<div class="col-sm-8"> exemplo@abc.com <?php $email; ?> </div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600"> Pagamento </div>
														<div class="col-sm-8"> Débito <?php $tipo_de_pagamento; ?> .....000 </div>
													</div>
												</li>												
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600"> Localização </div>
														<div class="col-sm-8"> Cidade <?php $cidade_user; ?> - Estado <?php $estado_user; ?> </div>
													</div>
												</li>
											</ul>
											<div class="custom-control custom-checkbox mt-4">
												<input type="checkbox" class="custom-control-input" onClick="checked" id="termos" required>
												<label class="custom-control-label" for="termos"> Li e concordo com os termos de serviço e políticas de privacidade </label>
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

		<script src="./assets/js/core.js"></script>
		<script src="./assets/js/script.min.js"></script>
		<script src="./assets/js/process.js"></script>
		<script src="./assets/js/layout-settings.js"></script>
		<script src="./assets/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="./assets/js/steps-setting.js"></script>
		<script src="./assets/js/main.js"></script>
	</body>
</html>