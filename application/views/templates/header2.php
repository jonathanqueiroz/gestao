<html>
        <head>
            <link rel="stylesheet" href="<?php echo site_url('./css/foundation.css'); ?>" />
            <link rel="stylesheet" href="<?php echo site_url('./css/tcc.css'); ?>" />
            <script src="<?php echo site_url('./js/vendor/jquery.js'); ?>"></script>
            <script src="<?php echo site_url('./js/vendor/what-input.js'); ?>"></script>
            <script src="<?php echo site_url('./js/vendor/foundation.min.js'); ?>"></script>
            <script>
              $(document).foundation();
            </script>   
                <title>Gestão de Projetos</title>
        </head>
        <body>
            <div class="grid-x toolbar_">
                <div class="large-8 cell"><h2>Gestão</h2></div>
                <?php if (!isset($_SESSION['usuario'])) 
                { ?>
                    <div class="large-4 cell menu_toolbar">
                        <ul><li><a href="<?php echo site_url('projeto'); ?>">Home</a></li><li><a href="<?php echo site_url('pessoa'); ?>">Pessoas</a></li><li><a href="<?php echo site_url('projeto/create'); ?>">Add Projeto</a></li><li><a href="<?php echo site_url('usuario'); ?>">Login</a></li></ul>
                    </div>
                <?php }
                else { ?>
                    <div class="large-3 cell menu_toolbar">
                        <ul><li><a href="<?php echo site_url('projeto'); ?>">Home</a></li><li><a href="<?php echo site_url('pessoa'); ?>">Pessoas</a></li><li><a href="<?php echo site_url('projeto/create'); ?>">Add Projeto</a></li><a href="<?php echo site_url('usuario/logoff'); ?>">Logoff</a></li></ul>
                    </div>
                <?php } ?>
            </div>
            
            <div class="grid-container conteudo">

