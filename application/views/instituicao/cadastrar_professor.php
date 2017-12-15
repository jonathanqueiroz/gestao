<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php // echo form_open('Pessoa/dados_adolescente'); ?>
<form action="<?php echo base_url('Instituicao/cadastrarProfessor'); ?>" method="post">
	<?php echo validation_errors(); ?>
	<div class="row passo1 form_cadastro form_box">
			<br>
			<div class="col s12"><h4>Dados Professor</h4><br></div>	
			<div class="col s12 l6" >
				<label for="nome">Nome Completo:</label>
				<input type="text" name="nome" placeholder="Nome"   />
			</div>
			<div class="col s12 l2 " >
				<label for="cpf">CPF:</label>	
				<input type="text" name="cpf" placeholder="CPF"  />
			</div>
			<div class="col s12 l2 " >
				<label for="nascimento">Data Nascimento:</label>	
				<input type="date" name="nascimento" placeholder="Data Nascimento"  />
			</div>
			<div class="col s12 l2 " >
				<label for="sexo">Sexo:</label>	
				<select name="sexo">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Feminino">Feminino</option>
				<option value="Masculino">Masculino</option>
				</select>
			</div>
			<div class="col s12 l5 ">
				<label for="endereco">Endereço:</label>
				<input type="text" name="endereco" placeholder="Endereço"  />
			</div>
			<div class="col s12 l2 " >
				<label for="numero">Número:</label>
				<input type="text" name="numero" placeholder="Número"  />
			</div>
			<div class="col s12 l3 ">
				<label for="complemento">Complemento:</label>
				<input type="text" name="complemento" placeholder="Complemento"  />
			</div>
			<div class="col s12 l2 ">
				<label for="cep">CEP:</label>	
				<input type="text" name="cep" placeholder="CEP"  />
			</div>
			<div class="col s12 l4 ">
				<label for="municipio">Município:</label>	
				<input type="text" name="municipio" placeholder="Município"  />
			</div>
			<div class="col s12 l2 ">
				<label for="uf">UF:</label>	
				<select name="uf" id="uf">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<?php foreach ($estados as $estado) { ?>
					<option value="<?php echo $estado['id_estado'];?>"><?php echo $estado['sigla'];?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col s12 l2 " >
				<label for="telefone">Telefone:</label>	
				<input type="text" name="telefone" placeholder="Telefone"  />
			</div>
			<div class="col s12 l4 ">
				<label for="email">E-mail:</label>	
				<input type="email" name="email" placeholder="E-mail"  />
			</div>

			<div class="col s12 l3 " >
				<label for="matricula">Matricula:</label>
				<input type="text" name="matricula" placeholder="Matricula"  />
			</div>
			<div class="col s12 l5 " >
				<label for="lattes">Currículo Lattes:</label>
				<input type="text" name="lattes" placeholder="Currículo Lattes"  />
			</div>
			<div class="col s12 l4 ">
				<label for="departamento">Departamento:</label>	
				<select name="departamento">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<?php foreach ($departamentos as $departamento) { ?>
					<option value="<?php echo $departamento['id_departamento'];?>"><?php echo $departamento['nome'];?></option>
					<?php } ?>
				</select>
			</div>
			
			<div class="col s12 l3 " >
				<label for="situacao">Situação Contratual:</label>	
				<select name="situacao">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<?php foreach ($situacao_contratual as $situacao) { ?>
					<option value="<?php echo $situacao['id_situacao'];?>"><?php echo $situacao['nome'];?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col s12 l5 " >
				<label for="area">Área de Atuação:</label>	
				<input type="text" name="area" placeholder="Área de Atuação"  />
			</div>
			<div class="col s12 "></div>
			<div class="col l12 s12">
			<br>
			<button class="btn waves-effect waves-light blue" type="submit" >Salvar</button>
			<br><br>
		</div>
			<br>
			<br>
	</div>
	<br>
		
		<!-- BLOCO 2-->
<?php form_close(); ?>