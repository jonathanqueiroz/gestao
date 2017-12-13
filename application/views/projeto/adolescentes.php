<style>
    nav .input-field label{
        top:-10px;
    }
</style> 
<div class="">
<div class="row">
	<h4 style="text-align: center;">Jovens</h4>
	<div class="col s12 l10 push-l1">
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
				    		Data de Nascimento: <?php $date3 = new DateTime($adolescente['nascimento']); echo date_format($date3,"d/m/Y"); ?><br>
				    		Telefone: <?php echo $adolescente['telefone']; ?><br>
				    		Mãe: <?php echo $adolescente['filiacao_mae']; ?><br>
				    		Pai: <?php echo $adolescente['filiacao_pai']; ?></p></div>
				    		<div class="col s6">
				    		<p>
				    		Status do Cadastro: <?php  ?><br>
				    		Data de Criação: <?php $date = new DateTime($adolescente['data_criacao']); echo date_format($date,"d/m/Y");?><br>
				    		Última Atualização: <?php $date2 = new DateTime($adolescente['data_atualizacao']); echo date_format($date2,"d/m/Y"); ?><br>
				    		<a href="<?php echo base_url('Pessoa/observacoes/'.$adolescente['id_pessoa']);?>">Adicionar Observações</a><br>
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
				    		Status do Cadastro: <?php  ?><br>
				    		Data de Criação: <?php $date = new DateTime($adolescente['data_criacao']); echo date_format($date,"d/m/Y");?><br>
				    		Última Atualização: <?php $date2 = new DateTime($adolescente['data_atualizacao']); echo date_format($date2,"d/m/Y"); ?><br>
				    		<a href="<?php echo base_url('Pessoa/observacoes/'.$adolescente['id_pessoa']);?>">Adicionar Observações</a><br>
				    		<a href="<?php echo base_url('Pessoa/cadastro_adolescente/'.$adolescente['id_pessoa']);?>">Editar Informações</a><br>
				    		</div>
			    		</div>
			  		</li>
				<?php } ?>
			</ul>
		<?php }
		$this->session->unmark_temp('resultado'); ?>
		<a class="btn-floating btn-large waves-effect waves-light red" href="<?php echo site_url('Pessoa/cadastro_adolescente'); ?>"><i class="material-icons">add</i></a>
	</div>
</div>

</div>
