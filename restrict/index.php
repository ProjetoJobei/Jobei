<?php
    session_start();
    require('./../conecta.php');   
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
                            <a class="dropdown-item" href="./../assets/pages/perfil.php"> <i class="dw dw-user1"></i> Perfil </a> 
                            <a class="dropdown-item" href="./../assets/pages/perfil.php#setting"> <i class="dw dw-settings2"></i> Configurações </a> 
                            <a class="dropdown-item" href="./"> <i class="dw dw-help"></i> Ajuda </a> 
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
                <a href="./index.php"> <img src="./../assets/img/icons/logo-secundario.png" alt="" class="light-logo"> </a>
                <div class="close-sidebar" data-toggle="left-sidebar-close"> <i class="ion-close-round"></i> </div>
            </div>
            <div class="menu-block customscroll">
                <div class="sidebar-menu">
                    <ul id="accordion-menu">                        
                        <li>
							<a href="./index.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-house-1"></span><span class="mtext"> Home </span>
							</a>
						</li>
						<li>
							<a href="javascript:;" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-right-arrow1"></span><span class="mtext"> Explore </span>
							</a>							
						</li>						
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
							<ul class="submenu child">
                                <li><a data-toggle="modal" data-target="#modalCriaProduto"> Produto </a></li>
                                <li><a data-toggle="modal" data-target="#modalCriaPropaganda"> Propaganda </a></li>
                            </ul>
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
                <div class="xs-pd-20-10 pd-ltr-20">
                    <div class="title pb-20 pt-20">
                        <h2 class="h3 mb-0"> Ações Rápidas </h2>
                    </div>	
                    <div class="row">
                        <div class="col-md-3 mb-20">
                            <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                                <div class="content">
                                    <h3 class="h4"> Criar Post </h3>
                                    <p class="max-width-200 "> Criar ou divulgar um post dos rascunhos.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-20">
                            <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">                                
                                <div class="content">
                                    <h3 class="h4"> Criar Propaganda </h3>
                                    <p class="max-width-200 "> Criar ou divulgar uma propaganda. </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-20">
                            <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">                                
                                <div class="content">
                                    <h3 class="h4"> Regiões </h3>
                                    <p class="max-width-200 "> Dados por região (cidade e estado) de influência. </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-20">
                            <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                                <div class="content">
                                    <h3 class="h4"> Moderar Usuário </h3>
                                    <p class="max-width-200 "> Alterar níveis de acesso, mediar posts ou banir.</p>
                                </div>
                            </a>
                        </div>                        
                    </div>
                    
                    <div class="title pb-20 pt-20">
                        <h2 class="h3 mb-0"> Dados Gerais </h2>
                    </div>
                    <div class="row clearfix progress-box">
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                            <div class="card-box pd-30 height-100-p">
                                <div class="progress-box text-center">
                                    <h5 class="text-blue padding-top-10 h5">My Earnings</h5>
                                    <span class="d-block">80% Average <i class="fa fa-line-chart text-blue"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                            <div class="card-box pd-30 height-100-p">
                                <div class="progress-box text-center">
                                    <h5 class="text-light-green padding-top-10 h5">Business Captured</h5>
                                    <span class="d-block">75% Average <i class="fa text-light-green fa-line-chart"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                            <div class="card-box pd-30 height-100-p">
                                <div class="progress-box text-center">
                                    <h5 class="text-light-orange padding-top-10 h5">Projects Speed</h5>
                                    <span class="d-block">90% Average <i class="fa text-light-orange fa-line-chart"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                            <div class="card-box pd-30 height-100-p">
                                <div class="progress-box text-center">
                                    <h5 class="text-light-purple padding-top-10 h5">Panding Orders</h5>
                                    <span class="d-block">65% Average <i class="fa text-light-purple fa-line-chart"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="title pb-20 pt-20">
                        <h2 class="h3 mb-0"> Usuários </h2>
                    </div>
                    <!-- Export Datatable start -->
                    <div class="card-box mb-30">
                        <div class="pb-20">
                            <table class="table hover multiple-select-row data-table-export nowrap">
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">Nome Completo</th>
                                        <th>Nível</th>
                                        <th>Email</th>
                                        <th>Região</th>
                                        <th>Data de Cadastro</th>
                                        <th>Nome de Usuário</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-plus">Glória Farias</td>
                                        <td>1</td>
                                        <td>eunfizmasgloriafaria@email.com</td>
                                        <td>Rio Grande da Serra, SP </td>
                                        <td>2018-03-29 00:30:16</td>
                                        <td>GloriaF</td>
                                    </tr>                                                                       
                                    <tr>
                                        <td class="table-plus">Andréia de Oliveira Silva</td>
                                        <td>1</td>
                                        <td>andreiasilva@email.com</td>
                                        <td>Mauá, SP </td>
                                        <td>2018-03-29 00:30:16</td>
                                        <td>AndreiaOs</td>
                                    </tr>
                                    <tr>
                                        <td class="table-plus">Roberto Santos</td>
                                        <td>1</td>
                                        <td>roberts2@email.com</td>
                                        <td>Mauá, SP </td>
                                        <td>2018-03-29 00:30:16</td>
                                        <td>rSantos</td>
                                    </tr>
                                    <tr>
                                        <td class="table-plus">Ana Carolyny Thomazini de Andrade</td>
                                        <td>2</td>
                                        <td>ana@email.com</td>
                                        <td>Ribeirão Pires, SP </td>
                                        <td>2021-09-01 20:30:16</td>
                                        <td>AnaCTA</td>
                                    </tr>    
                                    <tr>
                                        <td class="table-plus">Bianca Letícia Floriano da Silva</td>
                                        <td>2</td>
                                        <td>bianca@email.com</td>
                                        <td>Ribeirão Pires, SP </td>
                                        <td>2021-09-01 20:30:16</td>
                                        <td>Beanca</td>
                                    </tr> 
                                    <tr>
                                        <td class="table-plus">Emanuela de Almeida Silva</td>
                                        <td>2</td>
                                        <td>manu@email.com</td>
                                        <td>Mauá, SP </td>
                                        <td>2021-09-01 20:30:16</td>
                                        <td>Manu</td>
                                    </tr> 
                                    <tr>
                                        <td class="table-plus">Isabelle Ferreira Damacena</td>
                                        <td>2</td>
                                        <td>damacenaisa@email.com</td>
                                        <td>Ribeirão Pires, SP </td>
                                        <td>2021-09-01 20:30:16</td>
                                        <td>DamaIsa</td>
                                    </tr>    
                                    <?php
                                        $consulta = "SELECT * FROM usuario";

                                        foreach ($conexao -> query($consulta) as $linha) {                                            
                                            echo "<tr>";
                                                echo "<td> ".$linha['nome_completo']."</td>";
                                                echo "<td>".$linha['nivel']."</td>";
                                                echo "<td> ".$linha['email']."</td>";
                                                echo "<td>".$linha['regiao']."</td>";
                                                echo "<td> ".$linha['data_cadastro']."</td>";
                                                echo "<td>".$linha['nome']."</td>";
                                            echo "</tr>";
                                        }
                                    ?>      
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Export Datatable End -->
                    
                    <div class="title pb-20 pt-20">
                        <h2 class="h3 mb-0"> Posts </h2>
                    </div>
                    <!-- Export Datatable start -->
                    <div class="card-box mb-30">
                        <div class="pb-20">
                            <table class="table hover multiple-select-row data-table-export nowrap">
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">Nome</th>
                                        <th>Descrição</th>
                                        <th>Especificações</th>
                                        <th>Itens Inclusos</th>
                                        <th>Categoria</th>
                                        <th>Data de Publicação</th>
                                        <th>Autor</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>                                    
                                    <?php
                                        $consulta = "SELECT * FROM produto";

                                        foreach ($conexao -> query($consulta) as $linha) {                                            
                                            echo "<tr>";
                                                echo "<td> ".$linha['nome_produto']."</td>";
                                                echo "<td>".$linha['descricao_produto']."</td>";
                                                echo "<td> ".$linha['especificacoes']."</td>";
                                                echo "<td>".$linha['itens_inclusos']."</td>";
                                                echo "<td> ".$linha['categoria']."</td>";
                                                echo "<td>".$linha['data_publicacao']."</td>";
                                                echo "<td>".$linha['autor']."</td>";    
                                    ?>            
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                                <i class="dw dw-more"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td> 
                                                </tr>  
                                    <?php
                                        }
                                    ?>                          
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Export Datatable End -->
                    
                    

                    <div class="footer-wrap pd-20 mb-20 card-box">
                        &copy;<script>document.write(new Date().getFullYear());</script> <strong>Jobei</strong>. Todos os Direitos Reservados
                    </div>
                </div>
            </div>
        </main>     

        <script src="./../assets/js/core.js"></script>
		<script src="./../assets/js/script.min.js"></script>
		<script src="./../assets/js/process.js"></script>
		<script src="./../assets/js/layout-settings.js"></script>
        <script src="./../assets/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
        <script src="./../assets/plugins/highcharts-6.0.7/code/highcharts.js"></script>
        <script src="./../assets/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
        <script src="./../assets/js/dashboard2.js"></script>

        <!-- Datatable Setting and buttons for Export -->        
        <script src="./../assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="./../assets/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="./../assets/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="./../assets/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        
        <script src="./../assets/plugins/datatables/js/dataTables.buttons.min.js"></script>
        <script src="./../assets/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="./../assets/plugins/datatables/js/buttons.print.min.js"></script>
        <script src="./../assets/plugins/datatables/js/buttons.html5.min.js"></script>
        <script src="./../assets/plugins/datatables/js/buttons.flash.min.js"></script>
        <script src="./../assets/plugins/datatables/js/pdfmake.min.js"></script>
        <script src="./../assets/plugins/datatables/js/vfs_fonts.js"></script>
        
        <script src="./../assets/js/datatable-setting.js"></script>
    </body>
</html>
