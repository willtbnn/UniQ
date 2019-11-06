<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Grupo UniQ - Alto Padrão</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="Grupo UniQ" description="Móveis planejados, Móveis, Casa Planejada, Alto padrão, UniQ construtora, UniQ planejados">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:600&display=swap" rel="stylesheet">        
        <link rel="shortcut icon" href="assets/images/slogan/shout.png" type="image/png">
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3 box-shadow mb-5">
            <a class="navbar-brand ml-md-5" href="https://grupouniq.com.br"><img src="assets/images/slogan/slogan.png" style="width:200px;height:50px;" /></a>
            <buttom class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </buttom>
            <div class="navbar-collapse collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="#quem" class="nav-link b-link">Quem somos</a>
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
                    <li class="navbar-item">
                    <a href="pedidos" class="btn btn-trans btn-outline-warning bgf ml-md-2">Orçamento</a>
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
        <section class="text-dark py-5">
            <div class="container">
                <div class="row">
                    <address class="col-sm-6 col-lg-4">
                        <h4 class="h3">São Paulo</h4>
                        <ul class="list-unstyled">
                            <li>Tel.:<a href="tel:(11)5531-4889">(11)5531-4889</a></li>
                            <li>Cel.:<a href="tel:(11)94016-2666">(11)94016-2666</a></li>
                            <li>Whatsapp:<a href="tel:(11)94016-2666">(11)94016-2666</a></li>
                            <li>E-mail:<a href="email:contato@grupouniq.com.br">contato@grupouniq.com.br</a></li>
                        </ul>
                    </address>
                    <address class="col-sm-6 col-lg-4">
                        <h4 class="h3">Rio de Janeiro</h4>
                        <ul class="list-unstyled">
                            <li>Cel.:<a href="tel:(21)98177-5661">(21)98177-5661</a></li>
                            <li>Whatsapp:<a href="tel:(21)98177-5661">(21)98177-5661</a></li>
                            <li>E-mail:<a href="email:contato@grupouniq.com.br">contato@grupouniq.com.br</a></li>
                        </ul>
                    </address>
                    <address class="cols-sm-12 col-lg-4">
                        <h7 class="h3">Siga-nos nas redes </h7>
                        <a class="btn btn-light-warning" style="max-width:140px;"  href="https://www.facebook.com/uniqrjsp">
                            <img src="assets/images/facebook.png" class="control-ico">    
                        </a>
                        <a class="btn btn-light-warning" style="max-width:140px;"  href="https://www.instagram.com/grupo_uniq/?hl=pt-br">
                            <img src="assets/images/instagram.png" class="control-ico">    
                        </a>                  
                    </address>
                </div>
            </div>                
        </section>
        <footer class="bg-light mb-0 pb-0" style="overflow:hidden;">
            <div class="text-center">
                <h5 class="display-5">Grupo Uni<code class="l">Q</code> © 2019. Alguns direitos reservados </h5>
                <hr>
                <p class="mb-0 pb-0">
                    Desenvolvido por 
                    <b>▬Develops <kbd>WRD</Kbd>▬</b>
                </p>
            </div>     
        </footer>
        <script type="text/javascript" src="assets/js/jquery-3.4.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>
</html>