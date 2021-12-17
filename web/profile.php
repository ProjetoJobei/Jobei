<?php
    session_start();
    require('./conecta.php');   
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> <?php echo $_SESSION['nome_completo'] ?> </title>
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
        <meta property="og:image" content="url('./../img/icons/logo.png')">   
        <meta property="og:image:alt" content="Jobei"> 

        <!-- Vizualização Twitter -->
        <meta name="twitter:card" content="summary">  
        <meta name="twitter:title" content="Jobei">
        <meta name="twitter:site" content="url('http://jobei.atwebpages.com')">             
        <meta name="twitter:description" content="A rede social que te conecta ao trabalho de autônomos da sua região">
        <meta name="twitter:image" content="url('./../img/icons/logo.png')">
        <meta name="twitter:image:alt" content="Jobei">

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
		<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
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
                                        <img src="" alt="">
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
							<a class="dropdown-item" href="#"><i class="dw dw-user1"></i> Perfil </a>
							<a class="dropdown-item" href="profile.php#setting"><i class="dw dw-settings2"></i> Configurações </a>
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
                            <?php } else if ($_SESSION['nivel'] == 2) { ?>
                                    <a href="./dashboard.php" class="dropdown-toggle no-arrow">                    				
                                    <span class="micon dw dw-house-1"></span><span class="mtext"> Home </span>
                                    </a>
                            <?php }  ?>		
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
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">					
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<div class="profile-photo">
									<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
									<img src="vendors/images/photo1.jpg" alt="" class="avatar-photo">
									<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-body pd-5">
													<div class="img-container">
														<img id="image" src="vendors/images/photo2.jpg" alt="Picture">
													</div>
												</div>
												<div class="modal-footer">
													<input type="submit" value="Update" class="btn btn-primary">
													<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5 class="text-center h5 mb-0"> <?php echo $_SESSION['nome_completo']; ?> </h5>
								<p class="text-center text-muted font-14"> <?php echo $_SESSION['nome']; ?> </p>
								<div class="profile-info">
									<h5 class="mb-20 h5 text-blue">Informações de contato</h5>
									<ul>
										<li>
											<?php 
												if ($_SESSION['nivel'] == 1) {
													echo "<span>Autônomo</span>";
												} else {
													echo "<span>Administrador</span>";
												}
												echo $_SESSION['biografia']; 
											?>                                                 
										</li>  
										<li>
											<span>Email</span> <?php echo $_SESSION['email']; ?>   
										</li>
										<li>
											<span>Telefone</span> <?php echo $_SESSION['telefone']; ?>                                                
										</li>
										<li>
											<span>Região</span> <?php echo $_SESSION['cidade']." | ".$_SESSION['estado']; ?>                                                
										</li>
									</ul>
								</div>
								<div class="profile-social">
									<h5 class="mb-20 h5 text-blue">Redes Sociais</h5>
									<ul class="clearfix">
										<li><a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i class="fa fa-dropbox"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i class="fa fa-skype"></i></a></li>
										<li><a href="#" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-vine"></i></a></li>
									</ul>
								</div>								
							</div>
						</div>

						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
							<div class="card-box height-100-p overflow-hidden">
								<div class="profile-tab height-100-p">
									<div class="tab height-100-p">
										<ul class="nav nav-tabs customtab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Linha do Tempo</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Posts</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#setting" role="tab">Configurações</a>
											</li>
										</ul>
										<div class="tab-content">
											<!-- Timeline Tab start -->
											<div class="tab-pane fade show active" id="timeline" role="tabpanel">
												<div class="pd-20">
													<div class="profile-timeline">
														<div class="timeline-month">
															<h5>Setembro, 2021</h5>
														</div>
														<div class="profile-timeline-list">
															<ul>
																<li>
																	<div class="date">Sex, 17</div>
																	<div class="task-name"><i class="ion-ios-chatboxes"></i> Atividade</div>
																	<p>Usuário entrou em contato com outro autônomo de Ribeirão Pires.</p>
																	<div class="task-time">09:30</div>
																</li>
																<li>
																	<div class="date">Dom, 12</div>
																	<div class="task-name"><i class="ion-ios-clock"></i> Publicação</div>
																	<p>Usuário fez 2 publicações.</p>
																	<div class="task-time">09:30</div>
																</li>
																<li>
																	<div class="date">Sex, 10</div>
																	<div class="task-name"><i class="ion-ios-clock"></i> Publicação</div>
																	<p>Usuário fez 4 publicações.</p>
																	<div class="task-time">09:30</div>
																</li>
															</ul>
														</div>
														<div class="timeline-month">
															<h5>Agosto, 2021</h5>
														</div>
														<div class="profile-timeline-list">
															<ul>
																<li>
																	<div class="date">Ter, 31</div>
																	<div class="task-name"><i class="ion-ios-clock"></i> Divulgação</div>
																	<p>Usuário criou uma divulgação para Ribeirão Pires.</p>
																	<div class="task-time">09:30</div>
																</li>
																<li>
																	<div class="date">Seg, 16</div>
																	<div class="task-name"><i class="ion-ios-chatboxes"></i> Atividade</div>
																	<p>Usuário atualizou a biografia e os dados para contato.</p>
																	<div class="task-time">09:30</div>
																</li>
															</ul>
														</div>
														<div class="timeline-month">
															<h5>Julho, 2021</h5>
														</div>
														<div class="profile-timeline-list">
															<ul>
																<li>
																	<div class="date">Ter, 27</div>
																	<div class="task-name"><i class="ion-android-alarm-clock"></i> Atividade</div>
																	<p>Usuário se cadastrou na plataforma.</p>
																	<div class="task-time">09:30</div>
																</li>																
															</ul>
														</div>
													</div>
												</div>
											</div>
											<!-- Timeline Tab End -->
											<!-- Tasks Tab start -->
											<div class="tab-pane fade" id="tasks" role="tabpanel">
												<div class="pd-20 profile-task-wrap">
													<div class="container pd-0">
														<!-- Open Task start -->
														<div class="task-title row align-items-center">
															<div class="col-md-8 col-sm-12">
																<h5>Publicações e Divulgações</h5>
															</div>
															<div class="col-md-4 col-sm-12 text-right">
																<a href="task-add" data-toggle="modal" data-target="#task-add" class="bg-light-blue btn text-blue weight-500"><i class="ion-plus-round"></i> Add</a>
															</div>
														</div>

														<div class="product-list">
															<ul class="row">  
																<li class="col-lg-4 col-md-6 col-sm-12">
																	<div class="product-box">
																		<div class="producct-img"><img src="vendors/images/product-img3.jpg" alt=""></div>
																		<div class="product-caption">
																			<h4><a href="#">Luz de Leitura</a></h4>
																			<div class="price">
																				<ins>Autônomo | Ribeirão Pires, SP</ins>
																			</div>
																			<a href="#" class="btn btn-outline-primary"> Ver mais </a>
																		</div>
																	</div>
																</li>                             
																<li class="col-lg-4 col-md-6 col-sm-12">
																	<div class="product-box">
																		<div class="producct-img"><img src="vendors/images/product-img2.jpg" alt=""></div>
																		<div class="product-caption">
																			<h4><a href="#">Escrivaninhas Personalizadas</a></h4>
																			<div class="price">
																				<ins>Autônomo | Ribeirão Pires, SP</ins>
																			</div>
																			<a href="#" class="btn btn-outline-primary"> Ver mais </a>
																		</div>
																	</div>
																</li>   
																<li class="col-lg-4 col-md-6 col-sm-12">
																	<div class="product-box">
																		<div class="producct-img"><img src="vendors/images/product-img4.jpg" alt=""></div>
																		<div class="product-caption">
																			<h4><a href="#">Óculos de Realidade Virtual</a></h4>
																			<div class="price">
																				<ins>Autônomo | Rio Grande da Serra, SP</ins>
																			</div>
																			<a href="#" class="btn btn-outline-primary"> Ver mais </a>
																		</div>
																	</div>
																</li>
																<li class="col-lg-4 col-md-6 col-sm-12">
																	<div class="product-box">
																		<div class="producct-img"><img src="vendors/images/img4.jpg" alt=""></div>
																		<div class="product-caption">
																			<h4><a href="#">Guarda-chuva</a></h4>
																			<div class="price">
																				<ins>Autônomo | Rio Grande da Serra, SP</ins>
																			</div>
																			<a href="#" class="btn btn-outline-primary"> Ver mais </a>
																		</div>
																	</div>
																</li>                                
																<li class="col-lg-4 col-md-6 col-sm-12">
																	<div class="product-box">
																		<div class="producct-img"><img src="vendors/images/img1.jpg" alt=""></div>
																		<div class="product-caption">
																			<h4><a href="#">Plantas Decorativas</a></h4>
																			<div class="price">
																				<ins>Autônomo | Ribeirão Pires, SP</ins>
																			</div>
																			<a href="#" class="btn btn-outline-primary"> Ver mais </a>
																		</div>
																	</div>
																</li>
																<li class="col-lg-4 col-md-6 col-sm-12">
																	<div class="product-box">
																		<div class="producct-img"><img src="vendors/images/img2.jpg" alt=""></div>
																		<div class="product-caption">
																			<h4><a href="#">Xícaras</a></h4>
																			<div class="price">
																				<ins>Autônomo | Rio Grande da Serra, SP</ins>
																			</div>
																			<a href="#" class="btn btn-outline-primary"> Ver mais </a>
																		</div>
																	</div>
																</li>
															</ul>

															<ul class="row"><!--
																<?php /*
																	$consulta = "SELECT produto.cod_produto, produto.nome, usuario.nome_completo AS autor, regiao.cidade, regiao.estado FROM produto INNER JOIN usuario ON produto.autor = usuario.user_id AND INNER JOIN regiao ON usuario.regiao = regiao.cod_regiao ORDER BY produto.data_publicacao DESC";	                            						 
																																
																	foreach ($conexao -> query($consulta) as $linha) { 
																?>
																	<li class="col-lg-4 col-md-6 col-sm-12">
																		<div class="product-box">
																			<div class="producct-img"><img src="./../assets/img/product-img4.jpg" alt=""></div>
																			<div class="product-caption">
																				<h4><a href="#"> <?php echo $linha['nome_produto'] ?> </a></h4>
																				<div class="price">
																					<ins> <?php echo $linha['autor']." | ".$linha['cidade'].", ".$linha['estado'] ?></ins>
																				</div>
																				<a href="./product.php?<?php echo $linha['cod_produto'] ?>" class="btn btn-outline-primary"> Ver mais </a>
																			</div>
																		</div>
																	</li>
																<?php                                
																	}*/
																?>    -->    
															</ul>
														</div>	

													
														<!-- add task popup start -->
														<div class="modal fade customscroll" id="task-add" tabindex="-1" role="dialog">
															<div class="modal-dialog modal-dialog-centered" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLongTitle">Tasks Add</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body pd-0">
																		<div class="task-list-form">
																			<ul>
																				<li>
																					<form>
																						<div class="form-group row">
																							<label class="col-md-4">Task Type</label>
																							<div class="col-md-8">
																								<input type="text" class="form-control">
																							</div>
																						</div>
																						<div class="form-group row">
																							<label class="col-md-4">Task Message</label>
																							<div class="col-md-8">
																								<textarea class="form-control"></textarea>
																							</div>
																						</div>
																						<div class="form-group row">
																							<label class="col-md-4">Assigned to</label>
																							<div class="col-md-8">
																								<select class="selectpicker form-control" data-style="btn-outline-primary" title="Not Chosen" multiple="" data-selected-text-format="count" data-count-selected-text= "{0} people selected">
																									<option>Ferdinand M.</option>
																									<option>Don H. Rabon</option>
																									<option>Ann P. Harris</option>
																									<option>Katie D. Verdin</option>
																									<option>Christopher S. Fulghum</option>
																									<option>Matthew C. Porter</option>
																								</select>
																							</div>
																						</div>
																						<div class="form-group row mb-0">
																							<label class="col-md-4">Due Date</label>
																							<div class="col-md-8">
																								<input type="text" class="form-control date-picker">
																							</div>
																						</div>
																					</form>
																				</li>
																				<li>
																					<a href="javascript:;" class="remove-task"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove Task"><i class="ion-minus-circled"></i></a>
																					<form>
																						<div class="form-group row">
																							<label class="col-md-4">Task Type</label>
																							<div class="col-md-8">
																								<input type="text" class="form-control">
																							</div>
																						</div>
																						<div class="form-group row">
																							<label class="col-md-4">Task Message</label>
																							<div class="col-md-8">
																								<textarea class="form-control"></textarea>
																							</div>
																						</div>
																						<div class="form-group row">
																							<label class="col-md-4">Assigned to</label>
																							<div class="col-md-8">
																								<select class="selectpicker form-control" data-style="btn-outline-primary" title="Not Chosen" multiple="" data-selected-text-format="count" data-count-selected-text= "{0} people selected">
																									<option>Ferdinand M.</option>
																									<option>Don H. Rabon</option>
																									<option>Ann P. Harris</option>
																									<option>Katie D. Verdin</option>
																									<option>Christopher S. Fulghum</option>
																									<option>Matthew C. Porter</option>
																								</select>
																							</div>
																						</div>
																						<div class="form-group row mb-0">
																							<label class="col-md-4">Due Date</label>
																							<div class="col-md-8">
																								<input type="text" class="form-control date-picker">
																							</div>
																						</div>
																					</form>
																				</li>
																			</ul>
																		</div>
																		<div class="add-more-task">
																			<a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add Task"><i class="ion-plus-circled"></i> Add More Task</a>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-primary">Add</button>
																		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- add task popup End -->
													</div>
												</div>
											</div>
											<!-- Tasks Tab End -->
											<!-- Setting Tab start -->
											<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
												<div class="profile-setting">
													<form>
														<ul class="profile-edit-list row">
															<li class="weight-500 col-md-6">
																<h4 class="text-blue h5 mb-20">Edite Suas Informações Pessoais</h4>
                                                                <div class="form-group">
                                                                    <label>Nome Completo</label>
                                                                    <input class="form-control form-control-lg" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nome de usuário</label>
                                                                    <input class="form-control form-control-lg" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Bio / Ocupação</label>
                                                                    <input class="form-control form-control-lg" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Data de nascimento</label>
                                                                    <input class="form-control form-control-lg date-picker" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Gênero</label>
                                                                    <div class="d-flex">
                                                                        <div class="custom-control custom-radio mb-5 mr-20">
                                                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label weight-400" for="customRadio4">Masculino</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio mb-5">
                                                                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label weight-400" for="customRadio5">Feminino</label>
                                                                        </div>
																		<div class="custom-control custom-radio mb-5">
                                                                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label weight-400" for="customRadio5">Prefiro não dizer</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Estado</label>
                                                                        <select name="estado_user" class="form-control selectpicker" data-style="btn-outline-secondary btn-lg" title="  ">
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
                                                                <div class="form-group">
                                                                    <label>Cidade</label>
                                                                    <input class="form-control form-control-lg" type="text">
                                                                </div>                                                                    
                                                                <div class="form-group">
                                                                    <label>Telefone</label>
                                                                    <input class="form-control form-control-lg" type="text" placeholder="+55 (xx)xxxxx-xxxx">
                                                                </div> 

																<div class="form-group mb-0">
																	<input type="submit" class="btn btn-primary" value="Atualizar Perfil">
																</div>
															</li>
															<li class="weight-500 col-md-6">
																<h4 class="text-blue h5 mb-20">Editar Redes Sociais</h4>
																<div class="form-group">
																	<label>Facebook </label>
																	<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
																</div>
																<div class="form-group">
																	<label>Twitter </label>
																	<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
																</div>
																<div class="form-group">
																	<label>Linkedin </label>
																	<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
																</div>
																<div class="form-group">
																	<label>Instagram </label>
																	<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
																</div>																
																<div class="form-group">
																	<label>Pinterest </label>
																	<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
																</div>
																<div class="form-group">
																	<label>Skype </label>
																	<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
																</div>																
																<div class="form-group mb-0">
																	<input type="submit" class="btn btn-primary" value="value="Salvar & Atualizar">
																</div>
															</li>
														</ul>
													</form>
												</div>
											</div>
											<!-- Setting Tab End -->
										</div>
									</div>
								</div>
							</div>
						</div>
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
											<input name="midiaProduto" class="form-control" type="text">
										</div> 
									</div>
								</form>	<!--	
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Quantidade disponível</label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" placeholder="10" type="number">
                                        </div>
                                    </div>                                
                                
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
		<script src="src/plugins/cropperjs/dist/cropper.js"></script>
		<script>
			window.addEventListener('DOMContentLoaded', function () {
				var image = document.getElementById('image');
				var cropBoxData;
				var canvasData;
				var cropper;

				$('#modal').on('shown.bs.modal', function () {
					cropper = new Cropper(image, {
						autoCropArea: 0.5,
						dragMode: 'move',
						aspectRatio: 3 / 3,
						restore: false,
						guides: false,
						center: false,
						highlight: false,
						cropBoxMovable: false,
						cropBoxResizable: false,
						toggleDragModeOnDblclick: false,
						ready: function () {
							cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
						}
					});
				}).on('hidden.bs.modal', function () {
					cropBoxData = cropper.getCropBoxData();
					canvasData = cropper.getCanvasData();
					cropper.destroy();
				});
			});
		</script>
	</body>
</html>