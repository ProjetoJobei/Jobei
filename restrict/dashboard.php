<?php
    include './../conecta.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Jobei </title>
        <meta charset="UTF-8">
        <meta name="descriptison" content="A rede social que te conecta ao trabalho de autônomos da sua região">
        <meta name="keywords" content="Jobei, autônomos, autônomo, trabalho, região">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">         
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="True">

        <!-- Favicons-->
        <link rel="icon" href="./../assets/img/icons/logo.png">
        <link rel="apple-touch-icon" href="./../assets/img/icons/logo-quadrada.png">      

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
        
        <!-- Files -->
        <link rel="stylesheet" type="text/css" href="./../assets/css/core.css">
        <link rel="stylesheet" type="text/css" href="./../assets/css/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="./../assets/plugins/datatables/css/dataTables.bootstrap4.min.css">
	    <link rel="stylesheet" type="text/css" href="./../assets/plugins/datatables/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="./../assets/plugins/dropzone/src/dropzone.css">
        <link rel="stylesheet" type="text/css" href="./../assets/css/style.css">
        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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
        <div class="header">
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
                <div class="user-notification">
                    <div class="dropdown"> <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar"> <i class="dw dw-chat-12"></i> </a> </div>
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
                                        <img src="./../assets/img/icons/logo-quadrada.png" alt="">
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
                            <span class="user-icon"> <i class="dw dw-user1"></i> </span>
                            <span class="user-name"> <?php echo $_SESSION['nome']; ?> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="./"> <i class="dw dw-user1"></i> Perfil </a> 
                            <a class="dropdown-item" href="./"> <i class="dw dw-settings2"></i> Configurações </a> 
                            <a class="dropdown-item" href="./"> <i class="dw dw-help"></i> Ajuda </a> 
                            <a class="dropdown-item" href="./"> <i class="dw dw-library"></i> Minhas publicações </a>  
                            <a class="dropdown-item" href="./"> <i class="dw dw-crown"></i> Experimente o Premium </a> 
                            <hr class="dropdown-divider"> 
                            <a class="dropdown-item" href="./logout.php"> <i class="dw dw-logout"></i> Sair </a>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-sidebar">
            <div class="right-sidebar">
                <div class="sidebar-title">
                    <h3 class="weight-600 font-16 text-blue"> Chat </h3>
                    <div class="close-sidebar" data-toggle="right-sidebar-close">
                        <i class="icon-copy ion-close-round"></i>
                    </div>
                </div>
                <div class="right-sidebar-body customscroll">
                    <div class="right-sidebar-body-content">
                    <!-- Listar contatos frequentes -->
                    </div>
                </div>
            </div>          
        </div>

        <div class="left-side-bar">
            <div class="brand-logo">
                <a href="./../index.html"> <img src="./../assets/img/icons/logo-secundario.png" alt="" class="light-logo"> </a>
                <div class="close-sidebar" data-toggle="left-sidebar-close"> <i class="ion-close-round"></i> </div>
            </div>
            <div class="menu-block customscroll">
                <div class="sidebar-menu">
                    <ul id="accordion-menu">                        
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-house-1"></span><span class="mtext"> Jobei </span>
                            </a>
                            <ul class="submenu">
                                <li><a href="#"> Sobre </a></li>
                                <li><a href="#"> FAQ </a></li>
                                <li><a href="#"> Planos </a></li>
                                <li><a href="#"> Contato </a></li>
                            </ul>
                        </li>			
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-suitcase-11"></span><span class="mtext"> Meus Produtos </span>  
                            </a>
                            <ul class="submenu">
                                <li><a href="javascript:;"> Publicados </a></li>
                                <li><a href="javascript:;"> Rascunhos </a></li>
                                <li><a href="javascript:;"> Arquivados </a></li>                               
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-upload1"></span><span class="mtext"> Criar </span>  
                            </a>
                            <ul class="submenu child">
                                <li><a data-toggle="modal" data-target="#modalCriaProduto"> Produto </a></li>
                                <li><a data-toggle="modal" data-target="#modalCriaPropaganda"> Propaganda </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-diagonal-arrow-81"></span><span class="mtext"> Explore </span>   
                            </a>
                        </li>						
                        <li>
                            <a href="javascript:;" class="dropdown-toggle no-arrow" data-toggle="right-sidebar">
                                <span class="micon dw dw-chat3"></span><span class="mtext"> Chat </span>
                            </a>
                        </li>															
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>


        <main>  
            <div class="main-container">
                <div class="pd-ltr-20">
                    <h1> Página em desenvolvimento </h1> <br>
                    <div class="card-box pd-20 height-100-p mb-30">                    
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <img src="./../assets/img/banner-img.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                                    Seja bem-vindo <div class="weight-600 font-30 text-blue"> <?php echo $_SESSION['nome']; ?> </div>
                                </h4>
                                <p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
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
                                        <div class="font-14 text-secondary weight-500"> Posts Criados</div>
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
                                        <div class="font-14 text-secondary weight-500"> Alcance</div>
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
                                        <div class="font-14 text-secondary weight-500"> Cliques</div>
                                    </div>
                                    <div class="widget-icon">
                                        <div class="icon"><i class="icon-copy fa fa-pointer" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                            <div class="card-box height-100-p widget-style3">
                                <div class="d-flex flex-wrap">
                                    <div class="widget-data">
                                        <div class="weight-700 font-24 text-dark"> $50,000</div>
                                        <div class="font-14 text-secondary weight-500"> Expectativa de lucro</div>
                                    </div>
                                    <div class="widget-icon">
                                        <div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="title pb-20">
                        <h2 class="h3 mb-0"> Para você </h2>
                    </div>  
                    <div class="product-wrap">
                        <div class="product-list">
                            <ul class="row">
                                <li class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="product-box">
                                        <div class="producct-img"><img src="./../assets/img/product-img4.jpg" alt=""></div>
                                        <div class="product-caption">
                                            <h4><a href="#">Gufram Bounce Black</a></h4>
                                            <div class="price">
                                                <del>$55.5</del><ins>$49.5</ins>
                                            </div>
                                            <a href="#" class="btn btn-outline-primary">Read More</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="product-box">
                                        <div class="producct-img"><img src="./../assets/img/product-img4.jpg" alt=""></div>
                                        <div class="product-caption">
                                            <h4><a href="#">Gufram Bounce White</a></h4>
                                            <div class="price">
                                                <del>$75.5</del><ins>$50</ins>
                                            </div>
                                            <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="product-box">
                                        <div class="producct-img"><img src="./../assets/img/product-img4.jpg" alt=""></div>
                                        <div class="product-caption">
                                            <h4><a href="#">Contrast Lace-Up Sneakers</a></h4>
                                            <div class="price">
                                                <ins>$80</ins>
                                            </div>
                                            <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="product-box">
                                        <div class="producct-img"><img src="./../assets/img/product-img4.jpg" alt=""></div>
                                        <div class="product-caption">
                                            <h4><a href="#">Apple Watch Series 3</a></h4>
                                            <div class="price">
                                                <ins>$380</ins>
                                            </div>
                                            <a href="#" class="btn btn-outline-primary">Read More</a>
                                        </div>
                                    </div>
                                </li>			
                            </ul>
                        </div>					
                    </div>  


                    <div class="title pb-20">
                        <h2 class="h3 mb-0"> Gráficos </h2>
                    </div>
                    <div class="row pb-10">
                        <div class="col-md-8 mb-20">
                            <div class="card-box height-100-p pd-20">
                                <div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
                                    <div class="h5 mb-md-0"> Atividades </div>
                                    <div class="form-group mb-md-0">
                                        <select class="form-control form-control-sm selectpicker">
                                            <option value="">Last Week</option>
                                            <option value="">Last Month</option>
                                            <option value="">Last 6 Month</option>
                                            <option value="">Last 1 year</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="activities-chart"></div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-20">
                            <div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64">
                                <div class="d-flex justify-content-between pb-20 text-white">
                                    <div class="icon h1 text-white">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                                    </div>
                                    <div class="font-14 text-right">
                                        <div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
                                        <div class="font-12">Since last month</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="text-white">
                                        <div class="font-14">Appointment</div>
                                        <div class="font-24 weight-500">1865</div>
                                    </div>
                                    <div class="max-width-150">
                                        <div id="appointment-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
                                <div class="d-flex justify-content-between pb-20 text-white">
                                    <div class="icon h1 text-white">
                                        <i class="fa ti-heart" aria-hidden="true"></i>
                                    </div>
                                    <div class="font-14 text-right">
                                        <div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
                                        <div class="font-12">Since last month</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="text-white">
                                        <div class="font-14">Surgery</div>
                                        <div class="font-24 weight-500">250</div>
                                    </div>
                                    <div class="max-width-150">
                                        <div id="surgery-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                  
                </div>


                <div class="modal fade bs-example-modal-lg" id="modalCriaProduto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myLargeModalLabel">Novo Produto</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
                                <form action="./cadastra_produto.php" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Nome</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Descrição</label>
                                        <div class="col-sm-12 col-md-10">
                                            <textarea class="form-control" placeholder="Insira uma descrição aqui"></textarea>
                                        </div>                                        
                                    </div>  
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Especificações</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input class="form-control" type="text" placeholder="Cor, tamanho, validade...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Itens inclusos</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Quantidade disponível</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input class="form-control" placeholder="10" type="number">
                                        </div>
                                    </div>
                                </form>		
                                <form class="dropzone" action="./cadastra_produto.php" method="post" id="produtoImagens">                                    
                                    <div class="fallback">
                                        <input type="file" name="file" />
                                    </div>
                                </form>				
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="button" class="btn btn-primary" data-dismiss="modal" id="sa-success">Publicar</button>
							</div>
						</div>
					</div>
				</div>

                <div class="modal fade bs-example-modal-lg" id="modalCriaPropaganda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myLargeModalLabel">Nova Propaganda</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">										
                                <form action="./cadastra_propaganda.php" method="post">
                                    <div class="select-role">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn active">
                                                <input type="radio" name="options" id="admin">
                                                <div class="icon"><img src="vendors/images/briefcase.svg" class="svg" alt=""></div>
                                                <span>I'm</span> Manager
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="options" id="user">
                                                <div class="icon"><img src="vendors/images/person.svg" class="svg" alt=""></div>
                                                 <span>I'm</span> Employee
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group custom">
                                        <input type="text" class="form-control form-control-lg" placeholder="Username">
                                        <div class="input-group-append custom">
                                            <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-group custom">
                                        <input type="password" class="form-control form-control-lg" placeholder="**********">
                                        <div class="input-group-append custom">
                                            <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                        </div>
                                    </div>
                                    <div class="row pb-30">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div>
                                        </div>
                                    </div>                                                    
                                </form>											
							</div>                                      
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" data-dismiss="modal" id="sa-success">Publicar</button>                                            
							</div>
						</div>
					</div>
				</div>

                <div class="footer-wrap pd-20 mb-20 card-box">
                    &copy;<script>document.write(new Date().getFullYear());</script> <strong>Jobei</strong>. Todos os Direitos Reservados
                </div>
            </div> 
        </main>       
        
        <script>
            Dropzone.autoDiscover = false;
            $(".dropzone").dropzone({
                addRemoveLinks: true,
                removedfile: function(file) {
                    var name = file.name;
                    var _ref;
                    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                }
            });
        </script>

        <script src="./../assets/js/core.js"></script>
		<script src="./../assets/js/script.min.js"></script>
		<script src="./../assets/js/process.js"></script>
		<script src="./../assets/js/layout-settings.js"></script>
        <script src="./../assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="./../assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="./../assets/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="./../assets/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="./../assets/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <script src="./../assets/plugins/sweetalert2/sweetalert2.all.js"></script>
	    <script src="./../assets/plugins/sweetalert2/sweet-alert.init.js"></script>        
        <script src="./../assets/js/dashboard3.js"></script>
        <script src="./../assets/plugins/dropzone/src/dropzone.js"></script> 
    </body>
</html>
