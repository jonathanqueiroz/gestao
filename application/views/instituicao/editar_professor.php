<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php // echo form_open('Pessoa/dados_adolescente'); ?>
<form action="<?php echo base_url('instituicao/atualizarProfessor/'.$id); ?>" method="post">
	<?php echo validation_errors(); ?>
	<div class="row passo1 form_cadastro form_box">
			<br>
			<div class="col s12"><h4>Dados Professor</h4><br></div>	
			<div class="col s12 l6" >
				<label for="nome">Nome Completo:</label>
				<input type="text" name="nome" placeholder="Nome" value="<?php echo $professor->nome; ?>" />
			</div>
			<div class="col s12 l2 " >
				<label for="cpf">CPF:</label>	
				<input type="text" name="cpf" placeholder="CPF" value="<?php echo $professor->cpf; ?>" />
			</div>
			<div class="col s12 l2 " >
				<label for="nascimento">Data Nascimento:</label>
				<input type="date" name="nascimento" placeholder="Data Nascimento" value="<?php echo $professor->nascimento; ?>" />
			</div>
			<div class="col s12 l2 " >
				<label for="sexo">Sexo:</label>	
				<select name="sexo" id="sexo">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Feminino">Feminino</option>
				<option value="Masculino">Masculino</option>
				</select>
			</div>
			<div class="col s12 l5 ">
				<label for="endereco">Endereço:</label>
				<input type="text" name="endereco" placeholder="Endereço" value="<?php echo $professor->endereco; ?>" />
			</div>
			<div class="col s12 l2 " >
				<label for="numero">Número:</label>
				<input type="text" name="numero" placeholder="Número" value="<?php echo $professor->numero; ?>" />
			</div>
			<div class="col s12 l3 ">
				<label for="complemento">Complemento:</label>
				<input type="text" name="complemento" placeholder="Complemento" value="<?php echo $professor->complemento; ?>" />
			</div>
			<div class="col s12 l2 ">
				<label for="cep">CEP:</label>	
				<input type="text" name="cep" placeholder="CEP" value="<?php echo $professor->cep; ?>" />
			</div>
			<div class="col s12 l4 ">
				<label for="municipio">Município:</label>	
				<input type="text" name="municipio" placeholder="Município" value="<?php echo $professor->municipio; ?>" />
			</div>
			<div class="col s12 l2 ">
				<label for="uf">UF:</label>	
				<select name="uf">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="1">Rio Grande do Norte</option>
				<option value="2">Mato Grosso do Sul</option>
				</select>
			</div>
			<div class="col s12 l2 " >
				<label for="telefone">Telefone:</label>	
				<input type="text" name="telefone" placeholder="Telefone" value="<?php echo $professor->telefone; ?>" />
			</div>
			<div class="col s12 l4 ">
				<label for="email">E-mail:</label>	
				<input type="email" name="email" placeholder="E-mail" value="<?php echo $professor->email; ?>" />
			</div>

			<div class="col s12 l3 " >
				<label for="matricula">Matricula:</label>
				<input type="text" name="matricula" placeholder="Matricula" value="<?php echo $professor->matricula; ?>" />
			</div>
			<div class="col s12 l5 " >
				<label for="lattes">Currículo Lattes:</label>
				<input type="text" name="lattes" placeholder="Currículo Lattes" value="<?php echo $professor->lattes; ?>" />
			</div>
			<div class="col s12 l4 ">
				<label for="departamento">Departamento:</label>	
				<select name="departamento">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="1">Departamento de Ciências Exatas e Tecnológicas</option>
				<option value="2">2</option>
				</select>
			</div>
			
			<div class="col s12 l3 " >
				<label for="situacao">Situação Contratual:</label>	
				<input type="text" name="situacao" placeholder="Situação Contratual" value="<?php echo $professor->situacao; ?>" />
			</div>
			<div class="col s12 l5 " >
				<label for="area">Área de Atuação:</label>	
				<input type="text" name="area" placeholder="Área de Atuação" value="<?php echo $professor->area; ?>" />
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
<p style="margin-left: 50px;"><a class="btn-floating btn-large waves-effect waves-light red" href="<?php echo site_url('instituicao/professores'); ?>"><i class="material-icons">arrow_back</i></a></p>