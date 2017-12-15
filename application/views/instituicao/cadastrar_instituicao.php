<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<form action="<?php echo base_url('Instituicao/cadastrarInstituicao'); ?>" method="post">
	<?php echo validation_errors(); ?>
	<div class="row passo1 form_cadastro form_box">
			<br>
			<div class="col s12"><h4>Cadastrar Instituição</h4><br></div>	
			<div class="col s12 l6">
				<label for="nome">Nome da Instituição:</label>
				<input type="text" name="nome" placeholder="Nome"   />
			</div>
			<div class="col s12 l2 ">
				<label for="sigla">Sigla:</label>	
				<input type="text" name="sigla" placeholder="Sigla"  />
			</div>
			<div class="col s12 l3 " >
				<label for="nascimento">CNPJ:</label>	
				<input type="text" name="cnpj" placeholder="CNPJ"  />
			</div>
			<div class="col s12 l4 " >
				<label for="representante">Representante Legal:</label>	
				<input type="text" name="representante" placeholder="Representante Legal"  />
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
			<div class="col s12 l5 ">
				<label for="sitio">Sítio:</label>	
				<input type="text" name="sitio" placeholder="Sítio"  />
			</div>
			<div class="col s12 l6 " >
				<label for="categoria_adm">Categoria Administrativa:</label>	
				<input type="text" name="categoria_adm" placeholder="Categoria Administrativa"  />
			</div>
			<div class="col s12 l5 ">
				<label for="reitor">Reitor / Dirigente Principal:</label>	
				<input type="text" name="reitor" placeholder="Reitor / Dirigente Principal"  />
			</div>
			<div class="col s12 l5 " >
				<label for="credenciamento">Tipo de Credenciamento::</label>	
				<input type="text" name="credenciamento" placeholder="Tipo de Credenciamento"  />
			</div>
			<div class="col s12 "></div>
			<div class="col l12 s12">
				<br>
				<button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
				<br><br>
			</div>
			<br>
			<br>
	</div>
	<br>
		
		<!-- BLOCO 2-->
<?php form_close(); ?>