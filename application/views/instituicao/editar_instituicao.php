<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<form action="<?php echo base_url('Instituicao/atualizarInstituicao/'.$id); ?>" method="post">
	<?php echo validation_errors(); ?>
	<div class="row passo1 form_cadastro form_box">
			<br>
			<div class="col s12"><h4>Cadastrar Instituição</h4><br></div>	
			<div class="col s12 l6">
				<label for="nome">Nome da Instituição:</label>
				<input type="text" name="nome" placeholder="Nome"  value="<?php echo $instituicao->nome; ?>" />
			</div>
			<div class="col s12 l2 ">
				<label for="sigla">Sigla:</label>	
				<input type="text" name="sigla" placeholder="Sigla" value="<?php echo $instituicao->sigla; ?>" />
			</div>
			<div class="col s12 l3 " >
				<label for="cnpj">CNPJ:</label>	
				<input type="text" name="cnpj" placeholder="CNPJ"  value="<?php echo $instituicao->cnpj; ?>"/>
			</div>
			<div class="col s12 l4 " >
				<label for="representante">Representante Legal:</label>	
				<input type="text" name="representante" placeholder="Representante Legal"  value="<?php echo $instituicao->representante; ?>"/>
			</div>
			<div class="col s12 l5 " >
				<label for="endereco">Endereço:</label>
				<input type="text" name="endereco" placeholder="Endereço"  value="<?php echo $instituicao->endereco; ?>"/>
			</div>
			<div class="col s12 l2 " >
				<label for="numero">Número:</label>
				<input type="text" name="numero" placeholder="Número"  value="<?php echo $instituicao->numero; ?>"/>
			</div>
			<div class="col s12 l3 " >
				<label for="complemento">Complemento:</label>
				<input type="text" name="complemento" placeholder="Complemento"  value="<?php echo $instituicao->complemento; ?>"/>
			</div>
			<div class="col s12 l2 " >
				<label for="cep">CEP:</label>	
				<input type="text" name="cep" placeholder="CEP"  value="<?php echo $instituicao->cep; ?>"/>
			</div>
			<div class="col s12 l4 " >
				<label for="municipio">Município:</label>	
				<input type="text" name="municipio" placeholder="Município" value="<?php echo $instituicao->municipio; ?>"/>
			</div>
			<div class="col s12 l2 " >
				<label for="uf">UF:</label>	
				<select name="uf" id="uf">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="1">Feminino</option>
				<option value="2">Masculino</option>
				</select>
			</div>
			<div class="col s12 l2 " >
				<label for="telefone">Telefone:</label>	
				<input type="text" name="telefone" placeholder="Telefone"  value="<?php echo $instituicao->telefone; ?>"/>
			</div>
			<div class="col s12 l4 " >
				<label for="email">E-mail:</label>	
				<input type="email" name="email" placeholder="E-mail" value="<?php echo $instituicao->email; ?>" />
			</div>
			<div class="col s12 l5 ">
				<label for="sitio">Sítio:</label>	
				<input type="text" name="sitio" placeholder="Sítio"  value="<?php echo $instituicao->sitio; ?>"/>
			</div>
			<div class="col s12 l6 " >
				<label for="categoria_adm">Categoria Administrativa:</label>	
				<input type="text" name="categoria_adm" placeholder="Categoria Administrativa"  value="<?php echo $instituicao->categoria_adm; ?>"/>
			</div>
			<div class="col s12 l5 " >
				<label for="reitor">Reitor / Dirigente Principal:</label>	
				<input type="text" name="reitor" placeholder="Reitor / Dirigente Principal" value="<?php echo $instituicao->reitor; ?>" />
			</div>
			<div class="col s12 l5 " >
				<label for="credenciamento">Tipo de Credenciamento::</label>	
				<input type="text" name="credenciamento" placeholder="Tipo de Credenciamento" value="<?php echo $instituicao->credenciamento; ?>" />
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