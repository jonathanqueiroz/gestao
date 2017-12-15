<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php // echo form_open('Pessoa/dados_adolescente'); ?>
<form action="<?php echo base_url('projeto/cadastrarAluno'); ?>" method="post" name="form1" id="form1">
	<?php echo validation_errors(); ?>
	<div class="row passo1 form_cadastro form_box">
			<br>
			<div class="col s12"><h4>Dados Aluno</h4><br></div>	
			<div class="col s12 l5" style="margin-right: 10px">
				<label for="nome">Nome Completo:</label>
				<input type="text" name="nome" placeholder="Nome"   />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="cpf">CPF:</label>	
				<input type="text" name="cpf" placeholder="CPF"  />
			</div>
			<div class="col s12 l2 " >
				<label for="nascimento">Data Nascimento:</label>	
				<input type="date" name="nascimento" placeholder="Data Nascimento"  />
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
				<input type="text" name="endereco" placeholder="Endereço"  />
			</div>
			<div class="col s12 l5 " style="margin-right: 10px">
				<label for="cidade">Cidade:</label>	
				<input type="text" name="cidade" placeholder="Cidade"  />
			</div>

			<div class="col s12 l3 " style="margin-right: 10px">
				<label for="matricula">Matricula:</label>
				<input type="text" name="matricula" placeholder="Matricula"  />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="curso">Curso:</label>	
				<input type="text" name="curso" placeholder="Curso"  />
			</div>
			<div class="col s12 l2 " >
				<label for="semestre">Semestre:</label>	
				<input type="text" name="semestre" placeholder="Semestre"  />
			</div>
			
			<div class="col s4 " style="margin-right: 10px">
				<label for="tipo_bolsa">Tipo de Bolsa:</label>	
				<input type="text" name="tipo_bolsa" placeholder="Tipo de Bolsa"  />
			</div>
			<div class="col s12 l2 " >
				<label for="periodo_entrada">Periodo de Entrada:</label>	
				<input type="date" name="periodo_entrada" placeholder="Periodo de Entrada"  />
			</div>
			<div class="col s12 l2 " >
				<label for="periodo_saida">Periodo de Saída:</label>	
				<input type="date" name="periodo_saida" placeholder="Periodo de Saída"  />
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