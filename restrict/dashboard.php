<?php
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
        <link rel="apple-touch-icon" href="./../assets/img/icons/logo.png">      

        <!-- Vizualização Facebook -->
        <meta property="og:site_name" content="Jobei">
        <meta property="og:url" content="">  
        <meta property="og:title" content="Home">      
        <meta property="og:description" content="A rede social que te conecta ao trabalho de autônomos da sua região">
        <meta property="og:image" content="url('./../assets/img/icons/logo.png')">   
        <meta property="og:image:alt" content="Jobei">                 
        <!-- Vizualização Twitter -->
        <meta name="twitter:card" content="summary">  
        <meta name="twitter:title" content="Jobei">
        <meta name="twitter:site" content="">             
        <meta name="twitter:description" content="A rede social que te conecta ao trabalho de autônomos da sua região">
        <meta name="twitter:image" content="url('./../assets/img/icons/logo.png')">
        <meta name="twitter:image:alt" content="Jobei">
        
        <!-- Files -->
        <link rel="stylesheet" type="text/css" href="./../assets/css/core.css">
        <link rel="stylesheet" type="text/css" href="./../assets/css/icon-font.min.css">
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
                                        <img src="./../assets/img/lquadrada.png" alt="">
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
                            <span class="user-name"> Admin </span>
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
                <a href="./../index.html"> <img src="./../assets/img/icons/logo.png" alt="" class="light-logo"> </a>
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
                        <li>
                            <a href="#" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-diagonal-arrow-81"></span><span class="mtext"> Explore </span>   
                            </a>
                        </li>				
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-suitcase-11"></span><span class="mtext"> Meus Produtos </span>  
                            </a>
                            <ul class="submenu">
                                <li><a href="javascript:;"> Publicados </a></li>
                                <li><a href="javascript:;"> Rascunhos </a></li>
                                <li><a href="javascript:;"> Arquivados </a></li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle">
                                        <span class="micon dw dw-upload1"></span><span class="mtext"> Criar </span>  
                                    </a>
                                    <ul class="submenu child">
                                        <li><a href="javascript:;"> Produto </a></li>
                                        <li><a href="javascript:;"> Propaganda </a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;"> -- </a></li>
                            </ul>
                        </li>					
                        <li>
                            <a href="#" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-chat3"></span><span class="mtext"> Chat </span>
                            </a>
                        </li>															
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>


        <main>          
            <section id="hero">
                <div class="main-container" style="min-height: 46rem; position: relative; z-index: 0;" >
                    <h1> Página em desenvolvimento </h1>
                </div>
            </section>

        </main>

        <footer>
            <div class="footer-wrap pd-20 mb-20 card-box">
				&copy;<script>document.write(new Date().getFullYear());</script> <strong>Jobei</strong>. Todos os Direitos Reservados
			</div>
        </footer>

        <script src="./../assets/js/core.js"></script>
		<script src="./../assets/js/script.min.js"></script>
		<script src="./../assets/js/process.js"></script>
		<script src="./../assets/js/layout-settings.js"></script>
    </body>
</html>
