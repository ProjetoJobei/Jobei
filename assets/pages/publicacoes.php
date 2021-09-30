<?php
    session_start();
    require('./../../conecta.php');   

    $consulta = "SELECT * FROM usuario WHERE email = '{$_SESSION['email']}'";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Publicações | <?php echo $_SESSION['nome'] ?> </title>
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
                            <a class="dropdown-item" href="./perfil.php#setting" data-toggle="tab" role="tab"> <i class="dw dw-settings2"></i> Configurações </a> 
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
                <a href="./../../restrict/dashboard.php"> <img src="./../img/icons/logo-secundario.png" alt="" class="light-logo"> </a>
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                                <div class="pd-20 card-box height-100-p">                                   

                                    <div class="card-box mb-30">
                                        <h2 class="h4 pd-20">Best Selling Products</h2>
                                        <table class="data-table table nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="table-plus datatable-nosort">Product</th>
                                                    <th>Name</th>
                                                    <th>Color</th>
                                                    <th>Size</th>
                                                    <th>Price</th>
                                                    <th>Oty</th>
                                                    <th class="datatable-nosort">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-plus">
                                                        <img src="vendors/images/product-1.jpg" width="70" height="70" alt="">
                                                    </td>
                                                    <td>
                                                        <h5 class="font-16">Shirt</h5>
                                                        by John Doe
                                                    </td>
                                                    <td>Black</td>
                                                    <td>M</td>
                                                    <td>$1000</td>
                                                    <td>1</td>
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
                                                <tr>
                                                    <td class="table-plus">
                                                        <img src="vendors/images/product-2.jpg" width="70" height="70" alt="">
                                                    </td>
                                                    <td>
                                                        <h5 class="font-16">Boots</h5>
                                                        by Lea R. Frith
                                                    </td>
                                                    <td>brown</td>
                                                    <td>9UK</td>
                                                    <td>$900</td>
                                                    <td>1</td>
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
                                                <tr>
                                                    <td class="table-plus">
                                                        <img src="vendors/images/product-3.jpg" width="70" height="70" alt="">
                                                    </td>
                                                    <td>
                                                        <h5 class="font-16">Hat</h5>
                                                        by Erik L. Richards
                                                    </td>
                                                    <td>Orange</td>
                                                    <td>M</td>
                                                    <td>$100</td>
                                                    <td>4</td>
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
                                                <tr>
                                                    <td class="table-plus">
                                                        <img src="vendors/images/product-4.jpg" width="70" height="70" alt="">
                                                    </td>
                                                    <td>
                                                        <h5 class="font-16">Long Dress</h5>
                                                        by Renee I. Hansen
                                                    </td>
                                                    <td>Gray</td>
                                                    <td>L</td>
                                                    <td>$1000</td>
                                                    <td>1</td>
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
                                                <tr>
                                                    <td class="table-plus">
                                                        <img src="vendors/images/product-5.jpg" width="70" height="70" alt="">
                                                    </td>
                                                    <td>
                                                        <h5 class="font-16">Blazer</h5>
                                                        by Vicki M. Coleman
                                                    </td>
                                                    <td>Blue</td>
                                                    <td>M</td>
                                                    <td>$1000</td>
                                                    <td>1</td>
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
                                            </tbody>
                                        </table>
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