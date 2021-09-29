<?php 
    include './../../conecta.php'; 
    $consulta = "SELECT * FROM produto WHERE cod_produto = 1";    
    $linha = query($consulta);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Jobei </title>
        <meta charset="UTF-8">
        <meta name="descriptison" content="A rede social que te conecta ao trabalho de autônomos da sua região">
        <meta name="keywords" content="job, autonomo, trabalho, freelancer, freela, liberal, profissional, divulgação">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">         
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="True">

        <!-- Favicons-->
        <link rel="icon" href="./../img/icons/logo.png">
        <link rel="apple-touch-icon" href="./../img/icons/logo-quadrada.png">      

        <!-- Vizualização Facebook -->
        <meta property="og:site_name" content="Jobei">
        <meta property="og:url" content="url('http://jobei.atwebpages.com')">  
        <meta property="og:title" content="Jobei">      
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
        <link rel="stylesheet" type="text/css" href="./../css/style.css">
        <link rel="stylesheet" type="text/css" href="./../css/estilo.css">
        
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
        <header class="header container-fluid">              
            <div class="header-left">
                <div class="menu-icon dw dw-menu"></div>   
                <div class="brand-logo">
                    <a href="./../../index.html"> <img src="./../img/icons/logo-secundario.png" alt="Logo"> </a>
                </div>             
            </div>

            <div class="header-right">
                <div class="user-notification">
                    <div class="dropdown"> <a class="dropdown-toggle no-arrow" href="./../../index.html#sobre" data-toggle="right-sidebar"> Sobre a Jobei </a> </div>
                </div>
                <div class="user-notification">
                    <div class="dropdown"> <a class="dropdown-toggle no-arrow" href="./../../index.html#explore" data-toggle="right-sidebar"> Explore </a> </div>
                </div>
                <div class="user-notification">
                    <div class="dropdown"> <a class="dropdown-toggle no-arrow link-disabled" href="./../../index.html#planos" data-toggle="right-sidebar"> Planos </a> </div>
                </div>
                <div class="user-notification">
                    <div class="dropdown"> <a class="dropdown-toggle no-arrow" href="./../../index.html#contato" data-toggle="right-sidebar"> Contato </a> </div>
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
                                            <h3> Admin </h3>
                                            <p> Olá! Se você busca divulgar seu trabalho está no lugar certo. <br> Faça seu cadastro e aproveite! </p>
                                        </a>
                                    </li> 
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
                <div class="user-notification">
                    <div class="dropdown">
                        <a class="dropdown-toggle no-arrow" href="./../../embreve.html" data-toggle="right-sidebar"> <i class="dw dw-user1"></i> Entrar </a> 
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay"></div>
        </header>

        <main> 
            <section class="container-fluid">
                <div class="principal">
                    <div class="min-height-200px">
                        <div class="page-header">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="title"> <h4> <?php echo $linha['nome_produto']; ?> </h4> </div>
                                    <nav aria-label="breadcrumb" role="navigation">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"> <?php echo $linha['autor']; ?> </a></li>
                                            <li class="breadcrumb-item active" aria-current="page"> Detalhes do Produto </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="page">
                            <div class="blog-wrap">
                                <div class="row">
                                    <div class="col-md-9 col-sm-12">
                                        <div class="blog-detail card-box overflow-hidden mb-30">
                                            <div class="blog-img">
                                                <!-- ?php echo $linha['midia_produto']; ?> -->
                                                <img src="./../img/product-img4.jpg" alt="">
                                                <p><small> Imagem meramente ilustrativa </small></p>
                                            </div>
                                            <div class="blog-caption">
                                                <h4 class="mb-10"> <?php echo $linha['nome_produto']; ?> </h4>                                                    
                                                <p>  <?php echo $linha['descricao_produto']; ?>  </p>
                                                
                                                <h5 class="mb-10"> ESPECIFICAÇÕES TÉCNICAS </h5>        
                                                <p>  <?php echo $linha['especificacoes'];?>  </p>
                                                    
                                                <h5 class="mb-10"> ITENS INCLUSOS </h5>
                                                <ul>
                                                    <li> <?php echo $linha['itens_inclusos']; ?> </li>
                                                </ul>  
                                                <br>

                                                <div class="alert alert-danger" role="alert">
                                                    <h4 class="alert-heading h4"> Atenção </h4>
                                                    <p> <?php echo $linha['aviso']; ?> </p>
                                                </div>                                                   
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="col-md-3 col-sm-12">                                            
                                        <div class="card-box mb-30">
                                            <h5 class="pd-20 h5 mb-0"> Recentes </h5>
                                            
                                            <div class="latest-post">
                                            <a href="produto.php?codProduto=<?php echo $linha['cod_produto']; ?>"> 
                                                <ul>
                                                    <?php
                                                        $consulta = "SELECT * FROM produto ORDER BY data_publicacao DESC";
                                                        foreach ($conexao -> query($consulta) as $linha) {
                                                            echo "<li>";
                                                                echo "<h4> ".$linha['nome_produto']."</h4>";
                                                                echo "<span>".$linha['autor']." | ".$linha['data_publicacao']."</span>";
                                                            echo "</li>";
                                                        }
                                                    ?>                                         
                                                </ul> </a>
                                            </div>
                                            
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="footer-wrap pd-20 mb-20 card-box">
				&copy;<strong>Jobei</strong> <script>document.write(new Date().getFullYear());</script>. Todos os Direitos Reservados
			</div>
        </footer>

        <script src="./../js/core.js"></script>
		<script src="./../js/script.min.js"></script>
		<script src="./../js/process.js"></script>
		<script src="./../js/layout-settings.js"></script>
    </body>
</html>
