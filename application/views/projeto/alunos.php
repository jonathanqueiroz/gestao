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
		      	<form action="<?php echo base_url('projeto/get_alunos') ?>" method="post">
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
				<?php foreach ($alunos as $aluno) { ?>
			  		<li>
					    <div class="collapsible-header">
					     	<?php echo $aluno['nome']; ?> 
					    </div>
			    		<div class="collapsible-body grey lighten-5">
			    		<div class="row">
				    		<div class="col s6"><p>CPF: <?php echo $aluno['cpf']; ?><br>
				    		Data de Nascimento: <?php $date3 = new DateTime($aluno['nascimento']); echo date_format($date3,"d/m/Y"); ?><br>
				    		Matrícula: <?php echo $aluno['matricula']; ?><br>
				    		Curso: <?php echo $aluno['curso']; ?><br>
				    		</p>
				    		</div>
				    		<div class="col s6">
				    		<p>
				    		<a href="<?php echo base_url('projeto/atualizarAluno/'.$aluno['id_aluno']);?>">Atualizar Informações</a><br>
				    		<a href="<?php echo base_url('Pessoa/cadastro_adolescente/'.$aluno['id_aluno']);?>">Editar Informações</a><br>
				    		</div>
			    		</div>
			  		</li>
				<?php }?>
			</ul>	
		<?php } ?>
		<?php if($this->session->tempdata('resultado') != NULL) {
			$result_adolescentes = $this->session->tempdata('resultado'); ?>
			<ul class="collapsible" data-collapsible="accordion">
				<?php foreach ($result_adolescentes as $aluno) { ?>
			  		<li>
					    <div class="collapsible-header">
					     	<?php echo $aluno['nome']; ?> 
					    </div>
			    		<div class="collapsible-body grey lighten-5">
			    		<div class="row">
				    		<div class="col s6"><p>CPF: <?php echo $aluno['cpf']; ?><br>
				    		Data de Nascimento: <?php $date3 = new DateTime($aluno['nascimento']); echo date_format($date3,"d/m/Y"); ?><br>
				    		Matrícula: <?php echo $aluno['matricula']; ?><br>
				    		Curso: <?php echo $aluno['curso']; ?><br>
				    		</p>
				    		</div>
				    		<div class="col s6">
				    		<p>
				    		<a href="<?php echo base_url('projeto/atualizarAluno/'.$aluno['id_aluno']);?>">Atualizar Informações</a><br>
				    		<a href="<?php echo base_url('Pessoa/cadastro_adolescente/'.$aluno['id_aluno']);?>">Editar Informações</a><br>
				    		</div>
			    		</div>
			  		</li>
				<?php } ?>
			</ul>
		<?php }
		$this->session->unmark_temp('resultado'); ?>
		<a class="btn-floating btn-large waves-effect waves-light red" href="<?php echo site_url('projeto/cadastrarAluno'); ?>"><i class="material-icons">add</i></a>
	</div>
</div>

</div>
