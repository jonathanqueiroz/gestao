<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php // echo form_open('Pessoa/dados_adolescente'); ?>
<form action="<?php echo base_url('Pessoa/dados_adolescente'); ?>" method="post" name="form1" id="form1">
	<h2>Cadastro Pessoa</h2>
	<?php echo validation_errors(); ?>
	<div class="row passo1 form_cadastro form_box">
			<br>
			<div class="col s12"><h4>Dados Adolescente</h4><br></div>	
			<div class="col s12 l5" style="margin-right: 10px">
				<label for="nome">Nome Completo:</label>
				<input type="text" name="nome" placeholder="Nome"   />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="rg">RG:</label>	
				<input type="text" name="rg" placeholder="RG"  />
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
				<label for="pt_ref">Ponto de Referência:</label>
				<input type="text" name="pt_ref" placeholder="Ponto de Referência"  />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="cep">CEP:</label>	
				<input type="text" name="cep" placeholder="CEP"  />
			</div>
			<div class="col s12 l2 " >
				<label for="telefone">Telefone:</label>	
				<input type="text" name="telefone" placeholder="Telefone"  />
			</div>
			
			<div class="col s4 " style="margin-right: 10px">
				<label for="local_nascimento">Local Nascimento:</label>	
				<input type="text" name="local_nascimento" placeholder="Local Nascimento"  />
			</div>
			<div class="col s12 l5 " style="margin-right: 30px">
				<label for="filiacao_mae">Filiação mãe:</label>	
				<input type="text" name="filiacao_mae" placeholder="Filiação mãe"  />
			</div>
			<div class="col s12 l6 " style="margin-right: 10px">
				<label for="filiacao_pai">Filiação pai:</label>	
				<input type="text" name="filiacao_pai" placeholder="Filiação pai"  />
			</div>
			<div class="col s12 l5 " style="margin-right: 10px">
				<label for="responsavel">Responsável:</label>	
				<input type="text" name="responsavel" placeholder="Responsável"  />
			</div>
			<div class="col s12 l5 " style="margin-right: 10px">
				<label for="estado_civil">Estado Civil:</label>
				<select name="estado_civil" id="" >
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Solteiro">Solteiro</option>
					<option value="União Estável">União Estável</option>
					<option value="Separado">Separado</option>
				</select>	
			</div>
			<div class="col s12 l5 " style="margin-right: 10px">
				<label for="acompanhante">Acompanhante:</label>	
				<select name="acompanhante" id="" >
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="sozinho">Sozinho</option>
					<option value="mae">Mãe</option>
					<option value="pai">Pai</option>
					<option value="ambos">Pais</option>
					<option value="companheiro">Companheiro(a)</option>
					<option value="amigo">Amigo(a)</option>
					<option value="parente">Parente</option>
					<option value="outros">Outros</option>
				</select>	
			</div>
			<div class="col s12 "></div>
			<div class="col l12 s12">
			<br>
			<button class="btn waves-effect waves-light blue" type="submit" name="form1" formaction="<?php echo base_url('Pessoa/dados_adolescente');?>">Salvar</button>
			<br><br>
		</div>
			<br>
			<br>
	</div>
	<br>
		
		<!-- BLOCO 2-->
<?php form_close(); ?>