<?php
    session_start();
    require('./../../conecta.php');   

    $consulta = "SELECT * FROM usuario WHERE email = '{$_SESSION['email']}'";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> <?php echo $_SESSION['nome_completo'] ?> </title>
        <meta charset="UTF-8">
        <meta name="descriptison" content="A rede social que te conecta ao trabalho de autônomos da sua região">
        <meta name="keywords" content="Jobei, autônomos, autônomo, trabalho, região">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">         
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="True">

        <!-- Favicons-->
        <link rel="icon" href="./../img/icons/logo.png">
        <link rel="apple-touch-icon" href="./../img/icons/logo-quadrada.png">      

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
        
        <!-- Files -->
        <link rel="stylesheet" type="text/css" href="./../css/core.css">
        <link rel="stylesheet" type="text/css" href="./../css/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="./../plugins/cropperjs/dist/cropper.css">
        <link rel="stylesheet" type="text/css" href="./../css/style.css">
        
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
                                        <img src="./../img/icons/logo-quadrada.png" alt="">
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
                            <a class="dropdown-item" href="./perfil.php"> <i class="dw dw-user1"></i> Perfil </a> 
                            <a class="dropdown-item" href="#setting" data-toggle="tab" role="tab"> <i class="dw dw-settings2"></i> Configurações </a> 
                            <a class="dropdown-item" href="./"> <i class="dw dw-help"></i> Ajuda </a> 
                            <a class="dropdown-item" href="./"> <i class="dw dw-library"></i> Minhas publicações </a>  
                            <a class="dropdown-item" href="./"> <i class="dw dw-crown"></i> Experimente o Premium </a> 
                            <hr class="dropdown-divider"> 
                            <a class="dropdown-item" href="./../../restrict/logout.php"> <i class="dw dw-logout"></i> Sair </a>                        
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
                <a href="./../index.html"> <img src="./../img/icons/logo-secundario.png" alt="" class="light-logo"> </a>
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
                                <li disabled><a href="#"> FAQ </a></li>
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
                <div class="pd-ltr-20 xs-pd-20-10">
                    <div class="min-height-200px">                        
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                                <div class="pd-20 card-box height-100-p">
                                    <div class="profile-photo">
                                        <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                                        <img src="./../img/photo3.jpg" alt="" class="avatar-photo">
                                        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body pd-5">
                                                        <div class="img-container">
                                                            <img id="image" src="./../img/photo3.jpg" alt="Picture">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" value="Update" class="btn btn-primary">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                                                <span>Email:</span>  <?php echo $_SESSION['email']; ?>                                                 
                                            </li>                                           
                                            <li>
                                                <span>Região:</span> <?php echo $_SESSION['cidade']; ?> | <?php echo $_SESSION['estado']; ?>                                                
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
                                                    <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Produtos</a>
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
                                                            <script language=javascript type="text/javascript">
                                                                now = new Date();
                                                                dayName = new Array ("Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb")
                                                                mesName = new Array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro")
                                                            </script>
                                                            <div class="timeline-month">
                                                                <h5> <script language=javascript type="text/javascript">
                                                                    document.write(mesName[now.getMonth()] + ", " + now.getFullYear())
                                                                </script> </h5>
                                                            </div>
                                                            <div class="profile-timeline-list">
                                                                <ul>
                                                                    <li>
                                                                        <div class="date">Seg, 13</div>
                                                                        <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                        <div class="task-time">09:30 am</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="date">Sex, 10</div>
                                                                        <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                        <div class="task-time">09:30 am</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="date">Sex, 10</div>
                                                                        <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                        <div class="task-time">09:30 am</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="date">Sex, 10</div>
                                                                        <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                        <div class="task-time">09:30 am</div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="timeline-month">
                                                                <h5> <script language=javascript type="text/javascript">
                                                                    document.write("Agosto, " + now.getFullYear())
                                                                </script> </h5>
                                                            </div>
                                                            <div class="profile-timeline-list">
                                                                <ul>
                                                                    <li>
                                                                        <div class="date">Ter, 31</div>
                                                                        <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                        <div class="task-time">09:30 am</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="date">Seg, 16</div>
                                                                        <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                        <div class="task-time">09:30 am</div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="timeline-month">
                                                                <h5> <script language=javascript type="text/javascript">
                                                                    document.write("Julho, " + now.getFullYear())
                                                                </script> </h5>
                                                            </div>
                                                            <div class="profile-timeline-list">
                                                                <ul>
                                                                    <li>
                                                                        <div class="date">Ter, 27</div>
                                                                        <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                        <div class="task-time">09:30 am</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="date">Seg, 12</div>
                                                                        <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                        <div class="task-time">09:30 am</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="date">Dom, 11</div>
                                                                        <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                        <div class="task-time">09:30 am</div>
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
                                                                    <h5>Open Tasks (4 Left)</h5>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12 text-right">
                                                                    <a href="task-add" data-toggle="modal" data-target="#task-add" class="bg-light-blue btn text-blue weight-500"><i class="ion-plus-round"></i> Add</a>
                                                                </div>
                                                            </div>
                                                            <div class="profile-task-list pb-30">
                                                                <ul>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox mb-5">
                                                                            <input type="checkbox" class="custom-control-input" id="task-1">
                                                                            <label class="custom-control-label" for="task-1"></label>
                                                                        </div>
                                                                        <div class="task-type">Email</div>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ea earum.
                                                                        <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox mb-5">
                                                                            <input type="checkbox" class="custom-control-input" id="task-2">
                                                                            <label class="custom-control-label" for="task-2"></label>
                                                                        </div>
                                                                        <div class="task-type">Email</div>
                                                                        Lorem ipsum dolor sit amet.
                                                                        <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox mb-5">
                                                                            <input type="checkbox" class="custom-control-input" id="task-3">
                                                                            <label class="custom-control-label" for="task-3"></label>
                                                                        </div>
                                                                        <div class="task-type">Email</div>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                        <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox mb-5">
                                                                            <input type="checkbox" class="custom-control-input" id="task-4">
                                                                            <label class="custom-control-label" for="task-4"></label>
                                                                        </div>
                                                                        <div class="task-type">Email</div>
                                                                        Lorem ipsum dolor sit amet. Id ea earum.
                                                                        <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- Open Task End -->
                                                            <!-- Close Task start -->
                                                            <div class="task-title row align-items-center">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <h5>Closed Tasks</h5>
                                                                </div>
                                                            </div>
                                                            <div class="profile-task-list close-tasks">
                                                                <ul>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox mb-5">
                                                                            <input type="checkbox" class="custom-control-input" id="task-close-1" checked="" disabled="">
                                                                            <label class="custom-control-label" for="task-close-1"></label>
                                                                        </div>
                                                                        <div class="task-type">Email</div>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ea earum.
                                                                        <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox mb-5">
                                                                            <input type="checkbox" class="custom-control-input" id="task-close-2" checked="" disabled="">
                                                                            <label class="custom-control-label" for="task-close-2"></label>
                                                                        </div>
                                                                        <div class="task-type">Email</div>
                                                                        Lorem ipsum dolor sit amet.
                                                                        <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox mb-5">
                                                                            <input type="checkbox" class="custom-control-input" id="task-close-3" checked="" disabled="">
                                                                            <label class="custom-control-label" for="task-close-3"></label>
                                                                        </div>
                                                                        <div class="task-type">Email</div>
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                        <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox mb-5">
                                                                            <input type="checkbox" class="custom-control-input" id="task-close-4" checked="" disabled="">
                                                                            <label class="custom-control-label" for="task-close-4"></label>
                                                                        </div>
                                                                        <div class="task-type">Email</div>
                                                                        Lorem ipsum dolor sit amet. Id ea earum.
                                                                        <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- Close Task start -->
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
                                                                        <label>Email</label>
                                                                        <input class="form-control form-control-lg" type="email">
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
                                                                        <label>Facebook:</label>
                                                                        <input class="form-control form-control-lg" type="text" placeholder="Link">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Twitter:</label>
                                                                        <input class="form-control form-control-lg" type="text" placeholder="Link">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Linkedin:</label>
                                                                        <input class="form-control form-control-lg" type="text" placeholder="Link">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Instagram:</label>
                                                                        <input class="form-control form-control-lg" type="text" placeholder="Link">
                                                                    </div>                                                                    
                                                                    <div class="form-group">
                                                                        <label>Pinterest:</label>
                                                                        <input class="form-control form-control-lg" type="text" placeholder="Link">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Skype:</label>
                                                                        <input class="form-control form-control-lg" type="text" placeholder="Link">
                                                                    </div>                                                                    
                                                                    <div class="form-group mb-0">
                                                                        <input type="submit" class="btn btn-primary" value="Salvar & Atualizar">
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

                     <!-- Criar Produto -->
                    <div class="modal fade bs-example-modal-lg" id="modalCriaProduto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Novo Produto</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="./../../restrict/cadastra_produto.php" method="post">
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Nome</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input name="nomeProduto" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Descrição</label>
                                            <div class="col-sm-12 col-md-10">
                                                <textarea name="descricaoProduto" class="form-control" placeholder="Insira uma descrição aqui"></textarea>
                                            </div>                                        
                                        </div>  
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Especificações</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input name="especificaProduto" class="form-control" type="text" placeholder="Cor, tamanho, validade...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Itens inclusos</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input name="itemsInclusosProduto" class="form-control" type="text">
                                            </div>
                                        </div>   <!-- 
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Quantidade disponível</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input class="form-control" placeholder="10" type="number">
                                            </div>
                                        </div>
                                        <form class="dropzone" action="./cadastra_produto.php" method="post" id="produtoImagens">                                    
                                            <div class="fallback">
                                                <input name="mediaProduto" type="file" name="file" />
                                            </div>
                                        </form>	 -->
                                    </form>			
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" data-dismiss="modal" id="sa-success">Publicar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Criar Propaganda -->
                    <div class="modal fade bs-example-modal-lg" id="modalCriaPropaganda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Nova Propaganda</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="./../../restrict/cadastra_propaganda.php" method="post">
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Título</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input name="tituloPropaganda" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Descrição</label>
                                            <div class="col-sm-12 col-md-10">
                                                <textarea name="descricaoPropaganda" class="form-control" placeholder="Insira uma descrição aqui"></textarea>
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
            </div>
        </main>    
        
        <script src="./../js/core.js"></script>
		<script src="./../js/script.min.js"></script>
		<script src="./../js/process.js"></script>
		<script src="./../js/layout-settings.js"></script>
        <script src="./../plugins/sweetalert2/sweetalert2.all.js"></script>
	    <script src="./../plugins/sweetalert2/sweet-alert.init.js"></script>    
        <script src="./../plugins/cropperjs/dist/cropper.js"></script>
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