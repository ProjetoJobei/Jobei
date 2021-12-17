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
        <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
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
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
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
    </body>
</html>