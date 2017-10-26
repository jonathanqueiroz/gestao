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
                <div class="large-9 cell"><h2>Gestão</h2></div>
                <?php if (!isset($_SESSION['usuario'])) 
                { ?>
            		<div class="large-3 cell menu_toolbar">
            			<p><a href="<?php echo site_url('projeto'); ?>">Home</a> | <a href="<?php echo site_url('pessoa'); ?>">Pessoas</a> | <a href="<?php echo site_url('projeto/create'); ?>">Add Projeto</a> | <a href="<?php echo site_url('usuario'); ?>">Login</a></p>
            		</div>
				<?php }
				else { ?>
					<div class="large-3 cell menu_toolbar">
            			<p><a href="<?php echo site_url('projeto'); ?>">Home</a> | <a href="<?php echo site_url('pessoa'); ?>">Pessoas</a> | <a href="<?php echo site_url('projeto/create'); ?>">Add Projeto</a> | <a href="<?php echo site_url('usuario/logoff'); ?>">Logoff</a></p>
            		</div>
				<?php } ?>
            </div>   
            <div class="grid-container conteudo">
            

