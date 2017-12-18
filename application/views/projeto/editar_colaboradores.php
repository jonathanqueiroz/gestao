<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php // echo form_open('Pessoa/dados_adolescente'); ?>
<form action="<?php echo base_url('Projeto/atualizarAluno/'.$colaborador->id_aluno); ?>" method="post" name="form1" id="form1">
	<?php echo validation_errors(); ?>
	<div class="row passo1 form_cadastro form_box">
			<br>
			<input type="hidden" value="<?php echo $colaborador->id_aluno; ?>">
			<div class="col s12"><h4>Dados Alunos</h4><br></div>	
			<div class="col s12 l5" style="margin-right: 10px">
				<label for="nome">Nome Completo:</label>
				<input type="text" name="nome" placeholder="Nome" value="<?php echo $colaborador->nome; ?>" />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="cpf">CPF:</label>	
				<input type="text" name="cpf" placeholder="CPF" value="<?php echo $colaborador->cpf; ?>" />
			</div>
			<div class="col s12 l2 " >
				<label for="nascimento">Data Nascimento:</label>	
				<input type="date" name="nascimento" placeholder="Data Nascimento" value="<?php echo $colaborador->nascimento; ?>" />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="sexo">Sexo:</label>	
				<select name="sexo" id="sexo" form="form1">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="feminino">Feminino</option>
				<option value="masculino">Masculino</option>
				</select>
			</div>
			<div class="col s12 l6 " style="margin-right: 30px">
				<label for="endereco">Endereço Completo:</label>
				<input type="text" name="endereco" placeholder="Endereço" value="<?php echo $colaborador->endereco; ?>"/>
			</div>
			<div class="col s12 l5 " style="margin-right: 10px">
				<label for="cidade">Cidade:</label>	
				<input type="text" name="cidade" placeholder="Cidade" value="<?php echo $colaborador->cidade; ?>"/>
			</div>

			<div class="col s12 l3 " style="margin-right: 10px">
				<label for="matricula">Matricula:</label>
				<input type="text" name="matricula" placeholder="Matricula" value="<?php echo $colaborador->matricula; ?>" />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="curso">Curso:</label>	
				<input type="text" name="curso" placeholder="Curso" value="<?php echo $colaborador->curso; ?>" />
			</div>
			<div class="col s12 l2 " >
				<label for="semestre">Semestre:</label>	
				<input type="text" name="semestre" placeholder="Semestre" value="<?php echo $colaborador->semestre; ?>" />
			</div>
			
			<div class="col s4 " style="margin-right: 10px">
				<label for="tipo_bolsa">Tipo de Bolsa:</label>	
				<input type="text" name="tipo_bolsa" placeholder="Tipo de Bolsa" value="<?php echo $colaborador->tipo_bolsa; ?>" />
			</div>
			<div class="col s12 "></div>
			<div class="col l12 s12">
			<br>
			<button class="btn waves-effect waves-light blue" type="submit" name="form1">Salvar</button>
			<br><br>
		</div>
			<br>
			<br>
	</div>
	<br>
		
		<!-- BLOCO 2-->
<?php form_close(); ?>
<p style="margin-left: 50px;"><a class="btn-floating btn-large waves-effect waves-light red" href="<?php echo site_url('projeto/alunos'); ?>"><i class="material-icons">arrow_back</i></a></p>