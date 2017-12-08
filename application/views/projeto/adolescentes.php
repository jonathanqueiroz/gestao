<div class="row">
	<h4 style="text-align: center;">Adolescentes</h4>
	<div class="col s12 l10">
		<nav>
			<div class="nav-wrapper blue">
		      	<form action="<?php echo base_url('pessoa/get_adolescente') ?>" method="post">
			        <div class="input-field">
			        	<input id="search" type="search" name="nome" placeholder="Pesquise um Jovem Cadastrado">
			        	<label class="label-icon" for="search"><i class="material-icons">search</i></label>
			        	<i class="material-icons">close</i>
			        </div>
		      	</form>
		    </div>
		</nav>
		<?php if ($this->session->tempdata('resultado') == NULL) { ?>
			<ul class="collapsible" data-collapsible="accordion">
				<?php foreach ($adolescentes as $adolescente) { ?>
			  		<li>
					    <div class="collapsible-header">
					     	<?php echo $adolescente['nome']; ?> 
					    </div>
			    		<div class="collapsible-body grey lighten-5">
			    		<div class="row">
				    		<div class="col s6"><p>RG: <?php echo $adolescente['rg']; ?><br>
				    		Data de Nascimento: <?php echo $adolescente['nascimento']; ?><br>
				    		Telefone: <?php echo $adolescente['telefone']; ?><br>
				    		Mãe: <?php echo $adolescente['filiacao_mae']; ?><br>
				    		Pai: <?php echo $adolescente['filiacao_pai']; ?></p></div>
				    		<div class="col s6">
				    		<p>
				    		<a href="<?php echo base_url('');?>">Atualizar Status</a><br>
				    		<a href="<?php echo base_url('Pessoa/cadastro_adolescente/'.$adolescente['id_pessoa']);?>">Editar Informações</a><br>
				    		</div>
			    		</div>
			  		</li>
				<?php }?>
			</ul>	
		<?php } ?>
		<?php if($this->session->tempdata('resultado') != NULL) {
			$result_adolescentes = $this->session->tempdata('resultado'); ?>
			<ul class="collapsible" data-collapsible="accordion">
				<?php foreach ($result_adolescentes as $adolescente) { ?>
			  		<li>
					    <div class="collapsible-header">
					     	<?php echo $adolescente['nome']; ?> 
					    </div>
			    		<div class="collapsible-body grey lighten-5">
			    		<div class="row">
				    		<div class="col s6"><p>RG: <?php echo $adolescente['rg']; ?><br>
				    		Data de Nascimento: <?php echo $adolescente['nascimento']; ?><br>
				    		Telefone: <?php echo $adolescente['telefone']; ?><br>
				    		Mãe: <?php echo $adolescente['filiacao_mae']; ?><br>
				    		Pai: <?php echo $adolescente['filiacao_pai']; ?></p></div>
				    		<div class="col s6">
				    		<p>
				    		<a href="<?php echo base_url('');?>">Atualizar Status</a><br>
				    		<a href="<?php echo base_url('Pessoa/cadastro_adolescente/'.$adolescente['id_pessoa']);?>">Editar Informações</a><br>
				    		</div>
			    		</div>
			  		</li>
				<?php } ?>
			</ul>
		<?php }
		$this->session->unmark_temp('resultado'); ?>
	</div>
</div>


