<html>
        <head>
            <link rel="stylesheet" href="<?php echo site_url('./css/materialize.min.css'); ?>" media="screen,projection" />
            <link rel="stylesheet" href="<?php echo site_url('./css/folha1.css'); ?>" />
            <link rel="stylesheet" href="<?php echo site_url('./css/folha2.css'); ?>" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Gestão de Projetos</title>
        </head>
        <body>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url('js/materialize.min.js'); ?>"></script>
             <script>$(".button-collapse").sideNav();</script>
            <nav>
                <div class="nav-wrapper blue">
                    <a href="http://www.uesc.br" target="_blank" class="brand-logo"><img src="<?php echo site_url('./img/logo-uesc.png'); ?>" alt=""  height="60px"/></a><b style="margin-left: 110px;">Gestão de Projetos de Extensão</b>
                    <ul class="right hide-on-med-and-down">
                        <b><li><a href="<?php echo site_url('projeto'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('pessoa'); ?>">Pessoas</a></li>
                        <li><a href="<?php echo site_url('projeto/create'); ?>">Add Projeto</a></li>
                        <?php if (!isset($_SESSION['usuario'])) 
                        { ?>
                        <li><a href="<?php echo site_url('usuario'); ?>">Login</a></li>
                        <?php }
                        else { ?>
                        <li><a href="<?php echo site_url('usuario/logoff'); ?>">Logoff</a></li>
                        <?php } ?>
                        </b>
                    </ul>
                </div>
            </nav>
            <main class="conteudo">
            
            


