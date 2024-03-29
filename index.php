<?php include_once 'config.php'; ?>
<?php //habilitando o cors
    header("Access-Control-Allow-Origin: *");
?>

<!doctype html>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156459776-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-156459776-1');
        </script>

        <meta charset="utf-8">
        <title>Grupo UniQ - Alto Padrão</title>
        <meta http-equiv="content-language" content="pt-br">
        <meta name="title" content="Grupo Uniq - Alto Padrão">
        <meta name="author" content="@jlbnunes">
        <meta name="generator" content="VsCode">
        <meta name="description" content="UniQ Alto padrão - Sua casa do seu jeito">
        <meta name="application-name" content="Alto padrão">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="Keywords" description="grupo uniq, Grupo UniQ - Alto Padrão, moveis planejados, tudo para seu lar,dar obra aos moveis, moveis alto padrão, moveis, pedidos, planejados, corporativo, construcao, home, solar  ">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <meta name="geo.region" content="BR-RJ" >
        <meta name="geo.placename" content="Rio de Janeiro" >
        <meta name="geo.position" content="-22.903052;-43.18617" >
        <meta name="ICBM" content="-22.903052, -43.18617">
        <meta name="robots" content="index, follow">
        <meta property="og:image" content="assets/images/uniq-altopadrao.png" />
        <meta property="og:image:width" content="432" />
        <meta property="og:image:height" content="415" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
        <link rel="shortcut icon" href="assets/images/slogan/shout.png" type="image/png">
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:600&display=swap" rel="stylesheet">
        
    </head>
    <body  onselect="return false" ondragstart="return false">
    <!-- oncontextmenu="return false" -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3 box-shadow mb-5">
            <a class="navbar-brand ml-md-5"  href="<?=LINK?>">
                <img src="assets/images/slogan/slogan.png" style="width:200px;height:50px;" />
            </a>
            <buttom class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </buttom>
            <div class="navbar-collapse collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="#quem" class="nav-link b-link d-none">Quem somos</a>
                    </li>
                    <li class="navbar-item">
                        <a href="planejados" class="nav-link b-link">Planejados</a>
                    </li>
                    <li class="navbar-item">
                        <a href="moveis" class="nav-link b-link">Movéis</a>
                    </li>
                    <li class="navbar-item">
                        <a href="corporativo" class="nav-link b-link">Corporativo</a>
                    </li>
                    <li class="navbar-item">
                        <a href="construcao" class="nav-link b-link">Construção e Serviços</a>
                    </li>
                    <li class="navbar-item">
                        <a href="solar" class="nav-link b-link">Energia Solar</a>
                    </li>
                    <li class="navbar-item" data-menu="suave">
                        <a  href="#pedidos" class="nav-link b-link">Pedidos</a>
                    </li>                           
                </ul>
            </div>
        </nav>
        <?php
            $url = (isset($_GET['url'])) ? $_GET['url']:'home.php';
            $url = array_filter(explode('/',$url));
            var_dump($url);
        
        $file = $url[0].'.php';
        
        if(is_file($file)) {
            include $file;
        }else{
            include 'home.php';
        }
        ?>
        <div class="container-fluid py-5" id="pedidos">
            <div class="container">
                <div class="text-center">
                    <h5 class="h1">Pedidos</h5>  
                </div>
                <form id="jcontrol" class="nf rounded p-4 box-shadow text-white" action="<?= HOME ?>/js/requisicao/requisicao.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome"><b>Nome</b></label>
                            <input type="text" class="form-control" id="nome" name="nome" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email"> <b>Email</b></label>
                            <input type="text" class="form-control" id="email" name="email" required/>
                        </div>
                    </div>
                    <label for="selecao"><b>Qual serviço quer atendimento ?</b></label>
                    <select class="form-control form-control-sm" name="selecao">
                        <option value="0">Selecione o tipo de serviço</option>
                        <option value="Moveis planejados">Moveis planejados</option>
                        <option value="Coportativo">Coportativo</option>
                        <option value="Construção e serviços">Construção e serviços</option>
                        <option value="Energia Solar">Energia Solar</option>
                    </select>
                    <div class="form-group">
                        <label for="Mensagem"><b>Mensagens</b></label>
                        <textarea class="form-control" name="mensagem" id="Mensagem" row="5"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" method="POST">Enviar</button>
                    </div>
                    <!--Sucesso no envio-->
                    <div class="j_seletor alert alert-success" id="j_sucesso" role="alert" >
                        <h4 class="alert-heading">Enviado com Sucesso!</h4>
                        <p>Dentro de alguns dias entraremos em contato com você, temos uma equipe especilizada para etende-lo. Obrigado pela preferência.</p>
                        <hr>
                        <p class="mb-0">Fique avontade, para conhecer mais sobre nossa empresa e parceiros.</p>
                    </div>
                    <!--Erro-->
                    <div class="j_seletor alert alert-danger" id="j_error" role="alert">
                        Tente novamente, houve um erro!
                        Regarregue a pagina.
                        Caso error persiste, ligue para nós.
                    </div>
                    <!--Enviando-->
                    <div class="d-flex justify-content-center" >
                        <div class="j_seletor spinner-border" role="status" id="j_enviando">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <section class="text-dark py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- <address class="col-sm-6 col-lg-4">
                        <h4 class="h3">São Paulo</h4>
                        <ul class="list-unstyled">
                            <li>Cel.:<a href="tel:(11)94016-2666">(11)94016-2666</a></li>
                            <li>Whatsapp:<a href="https://wa.me/5511940162666">(11)94016-2666</a></li>
                            <li>E-mail:<a href="email:contato@grupouniq.com.br">contato@grupouniq.com.br</a></li>
                        </ul>
                    </address> -->
                    <address class="col-sm-6 col-lg-4">
                        <h4 class="h3">Rio de Janeiro</h4>
                        <ul class="list-unstyled">
                            <li>Cel.:<a href="tel:(21)98177-5661">(21)98177-5661</a></li>
                            <li>Whatsapp:<a href="https://wa.me/5511940162666">(21)98177-5661</a></li>
                            <li>E-mail:<a href="emailto:contato@grupouniq.com.br">contato@grupouniq.com.br</a></li>
                        </ul>
                    </address>
                    <address class="col-sm-6 col-lg-4">
                        <h4 class="h3">Espírito Santo</h4>
                        <ul class="list-unstyled">
                            <li>Cel.:<a href="tel:(27)98177-5661">(27)99966-9634</a></li>
                            <li>Whatsapp:<a href="https://wa.me/5527999669634">(27)99966-9634</a></li>
                            <li>E-mail:<a href="mailto:falcao.es@grupouniq.com.br">falcao.es@grupouniq.com.br</a></li>
                        </ul>
                    </address>
                    <address class="col-sm-6 col-lg-4">
                        <h7 class="h3">Siga-nos nas redes </h7>
                        <a class="btn btn-light-warning" style="max-width:140px;"  href="https://www.facebook.com/uniqrjsp">
                            <img src="assets/images/icones/facebook.png" class="control-ico">    
                        </a>
                        <a class="btn btn-light-warning" style="max-width:140px;"  href="https://www.instagram.com/uniqaltopadrao">
                            <img src="assets/images/icones/instagram.png" class="control-ico">    
                        </a>                  
                    </address>
                </div>
            </div>                
        </section>
        <footer class="bg-light mb-0 pb-0 " style="overflow:hidden;">
            <div class="text-center">
                <h5 class="display-5">Grupo Uni<code class="l">Q</code> 2020. © Alguns direitos reservados </h5>
                <hr>
                <p class="mb-2 pb-0">
                    Desenvolvido por 
                    <!-- <b>▬Develops  <a class="link" href="http://woza.com.br"><kbd>woza</Kbd> </a>▬</b> -->
                    <b>▬Develops  <kbd>Jorge Nunes</Kbd>▬</b>
                </p>
            </div>     
        </footer>
        <script type="text/javascript" src="assets/js/jquery-3.4.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="module" src="assets/js/script.js"></script>
        <script>
            
        </script>
    </body>
</html>