<?php
    session_start();
    require('./conecta.php');   
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Jobei </title>
		<meta charset="utf-8">
		<meta name="descriptison" content="A rede social que te conecta ao trabalho de autônomos da sua região">
        <meta name="keywords" content="Jobei, autônomos, autônomo, trabalho, região">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="True">

		<!-- Site favicon -->
		<link rel="icon" type="image/png" href="vendors/images/logo.png">
		<link rel="apple-touch-icon" href="vendors/images/logo-quadrarda.png">		

		<!-- Vizualização Facebook -->
        <meta property="og:site_name" content="Jobei">
        <meta property="og:url" content="url('http://jobei.atwebpages.com')">  
        <meta property="og:title" content="Home">      
        <meta property="og:description" content="A rede social que te conecta ao trabalho de autônomos da sua região">
        <meta property="og:image" content="url('./../assets/img/icons/logo.png')">   
        <meta property="og:image:alt" content="Jobei">  

        <!-- Vizualização Twitter -->
        <meta name="twitter:card" content="summary">  
        <meta name="twitter:title" content="Jobei">
        <meta name="twitter:site" content="url('http://jobei.atwebpages.com')">             
        <meta name="twitter:description" content="A rede social que te conecta ao trabalho de autônomos da sua região">
        <meta name="twitter:image" content="url('./../assets/img/icons/logo.png')">
        <meta name="twitter:image:alt" content="Jobei">

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
		<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
		<link rel="stylesheet" type="text/css" href="src/plugins/switchery/switchery.min.css">		
		<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
		<!-- bootstrap-tagsinput css -->
		<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
		<!-- bootstrap-touchspin css -->
		<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css">
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
	<body>	
		<div class="header-dark header">
			<div class="header-left">
				<div class="menu-icon dw dw-menu"></div>
				<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input type="text" class="form-control search-input" placeholder="Pesquisar">
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
							<i class="dw dw-chat-12"></i>
						</a>
					</div>
				</div>
				<div class="user-notification">
					<div class="dropdown">
						<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
							<i class="icon-copy dw dw-notification"></i>
							<span class="badge notification-active"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="notification-list mx-h-350 customscroll">
								<ul>									
									<li>
										<a href="#">
											<img src="vendors/images/img.jpg" alt="">
											<h3>John Doe</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
										</a>
									</li>							
									<li>
										<a href="#">
											<img src="vendors/images/photo3.jpg" alt="">
											<h3>John Doe</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo4.jpg" alt="">
											<h3>Renee I. Hansen</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
										</a>
									</li>
									<li>
                                        <a href="#">
                                        <img src="vendors/images/logo-quadrada.png" alt="">
                                            <h3> Equipe Jobei </h3>
                                            <p> Bem-vindo a rede social que te conecta aos de autônomos da sua região. </p>
                                        </a>
                                    </li>									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
							<span class="user-icon">
								<i class="dw dw-user1"></i>
								<!-- <img src="vendors/images/photo1.jpg" alt=""> -->
							</span>
							<span class="user-name"> <?php echo $_SESSION['nome']; ?> </span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
							<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Perfil </a>
							<a class="dropdown-item" href="profile.php"><i class="dw dw-settings2"></i> Configurações </a>
							<a class="dropdown-item" href="./"><i class="dw dw-help"></i> Ajuda </a>
							<a class="dropdown-item" href="./"> <i class="dw dw-crown"></i> Experimente o Premium </a> 
                            <hr class="dropdown-divider"> 
                            <a class="dropdown-item" href="./restrict/logout.php"> <i class="dw dw-logout"></i> Sair </a> 
						</div>						
					</div>
				</div>				
			</div>
		</div>

		<div class="right-sidebar" >			
			<div class="sidebar-title" style="background:#3E3878">
				<h3 class="weight-600 text-light">Chat</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll bg-light-blue">
                <div class="chat-list bg-light-blue">
					<div class="chat-search">
						<span class="ti-search"></span>
						<input type="text" placeholder="Pesquisar contato">
					</div>
					<div class="notification-list chat-notification-list customscroll">
						<ul>
							<li class="active">
								<a href="#">
									<img src="vendors/images/logo-quadrada.png" alt="">
									<h3 class="clearfix">Equipe Jobei</h3>
									<p><i class="fa fa-circle text-light-green"></i> online</p>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="vendors/images/img.jpg" alt="">
									<h3 class="clearfix">rsSantos</h3>
									<p><i class="fa fa-circle text-light-green"></i> online</p>
								</a>
							</li>										
							<li>
							<a href="#">
								<img src="vendors/images/photo3.jpg" alt="">
								<h3 class="clearfix">GloriaF</h3>
								<p><i class="fa fa-circle text-warning"></i> 5 minutos atrás</p>
							</a>
							</li>										
							<li>
								<a href="#">
									<img src="vendors/images/photo4.jpg" alt="">
									<h3 class="clearfix">AndreiaOs</h3>
									<p><i class="fa fa-circle text-light-orange"></i> offline</p>
								</a>
							</li>
                            <li>
								<a href="#">
									<img src="vendors/images/photo7.jpg" alt="">
									<h3 class="clearfix">Rebecca</h3>
									<p><i class="fa fa-circle text-light-orange"></i> offline</p>
								</a>
							</li>										
						</ul>
					</div>
				</div>
			</div>			
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<?php if ($_SESSION['nivel'] == 1) { ?>                    
                        <a href="./index.php">                    				
                            <img src="vendors/images/logo-secundario.png" alt="Logo Jobei" style="height: 1.5em;" class="light-logo">
                        </a>
                <?php
                    } else if ($_SESSION['nivel'] == 2) { ?>
                        <a href="./dashboard.php">                    				
                            <img src="vendors/images/logo-secundario.png" alt="Logo Jobei" style="height: 1.5em;" class="light-logo">
                        </a>
                <?php
                    } 
                ?>	
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li>
                            <?php if ($_SESSION['nivel'] == 1) { ?>                                
                                    <a href="./index.php" class="dropdown-toggle no-arrow">                    				
                                    <span class="micon dw dw-house-1"></span><span class="mtext"> Home </span>
                                    </a>
                            <?php
                                } else if ($_SESSION['nivel'] == 2) { ?>
                                    <a href="./dashboard.php" class="dropdown-toggle no-arrow">                    				
                                    <span class="micon dw dw-house-1"></span><span class="mtext"> Home </span>
                                    </a>
                            <?php
                                } 
                            ?>		
						</li>
						<li>
							<a href="feed.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-right-arrow1"></span><span class="mtext"> Explore </span>
							</a>							
						</li>	
						<?php if ($_SESSION['nivel'] == 2) {  ?>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <span class="micon dw dw-settings1"></span><span class="mtext"> Moderar </span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="javascript:;"> Usuários </a></li>
                                    <li><a href="javascript:;"> Regiões </a></li>
                                    <li><a href="javascript:;"> Pagamentos </a></li>
                                </ul>
                            </li>	
                        <?php
                            }
                        ?>   				
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon dw dw-library"></span><span class="mtext"> Meus Posts </span>
							</a>
							<ul class="submenu">
								<li><a href="javascript:;"> Publicados </a></li>
                                <li><a href="javascript:;"> Rascunhos </a></li>
                                <li><a href="javascript:;"> Arquivados </a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon dw dw-edit2"></span><span class="mtext"> Criar </span>
							</a>
							<ul class="submenu">
								<li><a href="javascript:;" data-toggle="modal" data-target="#cria-post" type="button"> Produto </a></li>
                                <li><a href="javascript:;" data-toggle="modal" data-target="#cria-divul" type="button"> Divulgação </a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;" class="dropdown-toggle no-arrow" data-toggle="right-sidebar">
								<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20">
				<div class="card-box pd-20 height-100-p mb-30">
					<div class="row align-items-center">
						<div class="col-md-4">
							<img src="vendors/images/banner-img.png" alt="">
						</div>
						<div class="col-md-8">
							<h4 class="font-20 weight-500 mb-10 text-capitalize">
								Seja bem-vindo <div class="weight-600 font-30 text-blue"> <?php echo $_SESSION['nome_completo']; ?> </div>
							</h4>
							<p class="font-18 max-width-600"> O site ainda está passando por algumas manutenções, podendo haver erros e redundâncias nas funcionalidades durante a navegação. Agradecemos a compreensão.</p>
						</div>
					</div>
				</div>

				<div class="title pb-20">
					<h2 class="h3 mb-0"> Dados Gerais </h2>
				</div>	
				<div class="row pb-10">
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">75</div>
									<div class="font-14 text-secondary weight-500"> Posts Criados </div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">124,551</div>
									<div class="font-14 text-secondary weight-500">Alcance Total </div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-heart"></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">400+</div>
									<div class="font-14 text-secondary weight-500"> Cliques </div>
								</div>
								<div class="widget-icon">
									<div class="icon"><i class="icon-copy fa fa-mouse-pointer" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">R$50,000</div>
									<div class="font-14 text-secondary weight-500"> Expectativa de lucro </div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="title pb-20 pt-20">
					<h2 class="h3 mb-0"> Ações Rápidas </h2>
				</div>	
				<div class="row">
					<div class="col-md-3 mb-20">
						<a href="#" class="card-box d-block mx-auto pd-20 text-secondary" data-toggle="modal" data-target="#cria-post" type="button">
							<div class="img mx-h-400 pb-30"><img src="vendors/images/add_post.svg" alt=""></div>
							<div class="content"><h3 class="h4 text-center"> Criar Post </h3></div>
						</a>
					</div>
					<div class="col-md-3 mb-20">
						<a href="#" class="card-box d-block mx-auto pd-20 text-secondary" data-toggle="modal" data-target="#cria-divul" type="button">
							<div class="img mx-h-400 pb-30"><img src="vendors/images/add_adversiting.svg" alt=""></div>
							<div class="content"><h3 class="h4 text-center"> Criar Divulgação </h3></div>
						</a>
					</div>
					<div class="col-md-3 mb-20">
						<button type="button" class="card-box d-block mx-auto pd-20 text-secondary" style="border:none" id="sa-close">						
							<div class="img mx-h-400 pb-30"><img src="vendors/images/current_location.svg" alt=""></div>
							<div class="content"><h3 class="h4 text-center"> Regiões </h3></div>
						</button>
					</div>
					<div class="col-md-3 mb-20">
						<button type="button" class="card-box d-block mx-auto pd-20 text-secondary" style="border:none" id="sa-close">						
							<div class="img mx-h-400 pb-30"><img src="vendors/images/upgrade.svg" alt=""></div>
							<div class="content"><h3 class="h4 text-center"> Experimente o Premium </h3></div>
						</button>						
					</div>
				</div>

				<div class="title pb-20">
					<h2 class="h3 mb-0"> Para Você </h2>
				</div>
				<div class="product-wrap">
					<div class="product-list">
                        <ul class="row">
                                <li class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="product-box">
                                        <div class="producct-img"><img src="./vendors/images/product-img4.jpg"></div>
                                        <div class="product-caption">
                                            <h4> Óculos de Realidade Virtual </h4>
                                            <div class="price">                                                
                                                <del><small>R$55.5</small></del> R$49.5      
                                            </div>
                                            <a href="./vendors/pages/ex_produto.html" class="btn btn-outline-primary"> Ver mais</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="product-box">
                                        <div class="producct-img"><img src="./vendors/images/product-img2.jpg"></div>
                                        <div class="product-caption">
                                            <h4>Escrivaninhas Personalizadas</h4>
                                            <div class="price">
                                                <del><small>R$75.5</small></del> R$50
                                            </div>
                                            <a href="./vendors/pages/ex_produto1.html" class="btn btn-outline-primary">Ver mais</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="product-box">
                                        <div class="producct-img"><img src="./vendors/images/product-img3.jpg"></div>
                                        <div class="product-caption">
                                            <h4>Luz de Leitura</h4>
                                            <div class="price">
                                                <ins>R$30</ins>
                                            </div>
                                            <a href="./vendors/pages/ex_produto2.html" class="btn btn-outline-primary">Ver mais</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="product-box">
                                        <div class="producct-img"><img src="./vendors/images/Planner.jpg"></div>
                                        <div class="product-caption">
                                            <h4>Planner</h4>
                                            <div class="price">
                                                <ins>R$15</ins>
                                            </div>
                                            <a href="./vendors/pages/ex_produto3.html" class="btn btn-outline-primary">Ver mais</a>
                                        </div>
                                    </div>
                                </li>
                        </ul>
                    </div>
					
					<div class="product-list">	
						<ul class="row">
							<?php 
								$consulta = "SELECT produto.cod_produto, produto.nome, usuario.nome_completo AS autor, regiao.cidade, regiao.estado FROM produto INNER JOIN usuario INNER JOIN regiao ON produto.autor = usuario.user_id AND usuario.regiao = regiao.cod_regiao ORDER BY produto.data_publicacao DESC";							 
																							   
								foreach ($conexao -> query($consulta) as $linha) { 
							?>
								<li class="col-lg-3 col-md-6 col-sm-12">
									<div class="product-box">
										<div class="producct-img"><img src="./../assets/img/product-img4.jpg" alt=""></div>
										<div class="product-caption">
											<h4><a href="#"> <?php echo $linha['nome_produto'] ?> </a></h4>
											<div class="price">
												<ins><?php echo $linha['autor']." | ".$linha['cidade'].", ".$linha['estado'] ?></ins>
											</div>
											<a href="./../assets/pages/produto.php?<?php echo $linha['cod_produto'] ?>" class="btn btn-outline-primary"> Ver mais </a>
										</div>
									</div>
								</li>
							<?php                                
								}
							?>        
						</ul>
					</div>									
				</div>  

				<!-- Modals -->			
				<div class="modal fade bs-example-modal-lg" id="cria-post" tabindex="-1" role="dialog" aria-labelledby="addPostModal" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="addPostModal">Criar Publicação</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
								<form action="./cadastra_produto.php" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Nome</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="nomeProduto" class="form-control" type="text">
                                        </div>
                                    </div>											
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Descrição</label>
                                        <div class="col-sm-12 col-md-12">
                                            <textarea name="descricaoProduto" class="form-control" placeholder="Insira uma descrição aqui"></textarea>
                                        </div>                                        
                                    </div>  
									<div class="row">
										<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label class="col-sm-12 col-md-2 col-form-label">Região</label>
													<div class="col-sm-12 col-md-12">
														<select class="custom-select2 form-control" name="regiaoProduto" multiple="multiple" style="width: 100%;">	
															<?php 
																$consulta = "SELECT * FROM regiao";							 
																															
																foreach ($conexao -> query($consulta) as $linha) { 
															?>
																	<option value="<?php $linha['cod_regiao'] ?>"><?php echo $linha['cidade'].", ".$linha['estado'] ?></option>
															<?php                                
																}
															?>										
														</select>
													</div> 
												</div>
										</div>
										<div class="col-md-6 col-sm-12">
												<div class="form-group"> 
													<label class="col-sm-12 col-md-2 col-form-label">Categoria</label>
													<div class="col-sm-12 col-md-12">
														<select class="selectpicker form-control" name="categoriaProduto" data-size="5" data-selected-text-format="count" multiple>
															<?php 
																$consulta = "SELECT * FROM categoria";							 
																															
																foreach ($conexao -> query($consulta) as $linha) { 
															?>
																	<option value="<?php $linha['cod_categoria'] ?>"><?php echo $linha['categoria'] ?></option>
															<?php                                
																}
															?>      
														</select>
													</div>  
												</div>     
										</div>
									</div>	
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Especificações</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="especificaProduto" class="form-control" type="text" placeholder="Cor, tamanho, validade...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Itens inclusos</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="itemsInclusosProduto" class="form-control" type="text" placeholder="Partes avulsas">
                                        </div>
                                    </div>  
									<div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Aviso</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="avisoProduto" class="form-control" type="text" placeholder="Algo importante">
                                        </div>
                                    </div> 
									<div class="form-group">
										<label class="col-sm-12 col-md-2 col-form-label">Link</label>
										<div class="col-sm-12 col-md-12">
											<input name="mediaProduto" class="form-control" type="text">
										</div> 
									</div><!--	
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Quantidade disponível</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" placeholder="10" type="number">
                                        </div>
                                    </div>                                 
                                </form>	
								<form class="dropzone" action="./cadastra_produto.php" method="post" id="produtoImagens">                                    
                                    <div class="fallback">
                                        <input name="mediaProduto" type="file" name="file" />
                                    </div>-->   
                                </form>	 													
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-primary">Publicar</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade bs-example-modal-lg" id="cria-divul" tabindex="-1" role="dialog" aria-labelledby="addDivulModal" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="addDivulModal">Criar Divulgação</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body"> 
								<form action="./cadastra_propaganda.php" method="post">		                                    
									<div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Título</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input name="tituloPropaganda" class="form-control" type="text" placeholder="Insira o título aqui">
                                        </div>
                                    </div>									
									<div class="row">
										<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label class="col-sm-12 col-md-2 col-form-label">Região</label>
													<div class="col-sm-12 col-md-12">
														<select class="custom-select2 form-control" name="regiaoPropaganda" multiple="multiple" style="width: 100%;">	
															<?php 
																$consulta = "SELECT * FROM regiao";							 
																															
																foreach ($conexao -> query($consulta) as $linha) { 
															?>
																	<option value="<?php $linha['cod_regiao'] ?>"><?php echo $linha['cidade'].", ".$linha['estado'] ?></option>
															<?php                                
																}
															?>										
														</select>
													</div> 
												</div>
										</div>
										<div class="col-md-6 col-sm-12">
												<div class="form-group"> 
													<label class="col-sm-12 col-md-2 col-form-label">Categoria</label>
													<div class="col-sm-12 col-md-12">
														<select class="selectpicker form-control" name="categoriaPropaganda" data-size="5" data-selected-text-format="count" multiple>
															<?php 
																$consulta = "SELECT * FROM categoria";							 
																															
																foreach ($conexao -> query($consulta) as $linha) { 
															?>
																	<option value="<?php $linha['cod_categoria'] ?>"><?php echo $linha['categoria'] ?></option>
															<?php                                
																}
															?>      
														</select>
													</div>  
												</div>     
										</div>
									</div>									
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Descrição</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input type="text" name="descricaoPropaganda" class="form-control" placeholder="Insira uma descrição aqui">
                                        </div>                                        
                                    </div>    
									<div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Link</label>
                                        <div class="col-sm-12 col-md-6">
                                            <input type="link" name="midiaPropaganda" class="form-control" placeholder="Insira o link da imagem">
                                        </div>                                        
                                    </div> 									                                   
                                </form>												
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-primary" id="sa-success">Publicar</button>
							</div>
						</div>
					</div>
				</div>


				<div class="footer-wrap pd-20 mb-20 card-box" style="background:#f2f0ff">
                    &copy;<script>document.write(new Date().getFullYear());</script> <strong>Jobei</strong>. Todos os Direitos Reservados
				</div>
			</div>
		</div>
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
		<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>
		<script src="vendors/scripts/dashboard.js"></script>
	</body>
</html>