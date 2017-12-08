<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<form action="" method="post">
	<div class="row passo1 form_cadastro form_box">
			<br>
			<div class="col s12"><h4>Dados Adolescente</h4><br></div>
			<input type="hidden" name="id" value="<?php echo $form1->id_pessoa; ?>" />	
			<div class="col s12 l5" style="margin-right: 10px">
				<label for="nome">Nome Completo:</label>
				<input type="text" name="nome" placeholder="Nome"  required="required" value="<?php if (isset($form1->nome)) { echo $form1->nome;	
				} ?>" />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="rg">RG:</label>	
				<input type="text" name="rg" placeholder="RG" required="required" value="<?php if (isset($form1->rg)) { echo $form1->rg;	
				} ?>" />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="nascimento">Data Nascimento:</label>
				<input type="date" name="nascimento" placeholder="Data Nascimento" required="required" value="<?php if (isset($form1->nascimento)) { echo $form1->nascimento;	
				} ?>"/>
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="sexo">Sexo:</label>	
				<select name="sexo" required="required" id="sexo">
				<option value="" disabled="disabled" selected="selected"
				>Selecione</option>
				<option value="feminino" <?php if ($form1->sexo == 'feminino'){ ?> selected="selected" <?php } ?>>Feminino</option>
				<option value="masculino" <?php if ($form1->sexo == 'masculino'){ ?> selected="selected" <?php } ?>>Masculino</option>
				</select>
			</div>
			<div class="col s12 l6 " style="margin-right: 30px">
				<label for="endereco">Endereço Completo:</label>
				<input type="text" name="endereco" placeholder="Endereço" required="required" value="<?php if (isset($form1->endereco)) { echo $form1->endereco;	
				} ?>" />
			</div>
			<div class="col s12 l5 " style="margin-right: 10px">
				<label for="cidade">Cidade:</label>	
				<input type="text" name="cidade" placeholder="Cidade" required="required" value="<?php if (isset($form1->cidade)) { echo $form1->cidade;	
				} ?>" />
			</div>

			<div class="col s12 l3 " style="margin-right: 10px">
				<label for="pt_ref">Ponto de Referência:</label>
				<input type="text" name="pt_ref" placeholder="Ponto de Referência" required="required" value="<?php if (isset($form1->pt_ref)) { echo $form1->pt_ref;	
				} ?>" />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="cep">CEP:</label>	
				<input type="text" name="cep" placeholder="CEP" required="required" value="<?php if (isset($form1->cep)) { echo $form1->cep;	
				} ?>" />
			</div>
			<div class="col s12 l2 " style="margin-right: 10px">
				<label for="telefone">Telefone:</label>	
				<input type="text" name="telefone" placeholder="Telefone" required="required" value="<?php if (isset($form1->telefone)) { echo $form1->telefone;	
				} ?>" />
			</div>
			
			<div class="col s12 l4 " style="margin-right: 10px">
				<label for="local_nascimento">Local Nascimento:</label>	
				<input type="text" name="local_nascimento" placeholder="Local Nascimento" required="required" value="<?php if (isset($form1->local_nascimento)) { echo $form1->local_nascimento;	
				} ?>" />
			</div>
			<div class="col s12 l5 " style="margin-right: 30px">
				<label for="filiacao_mae">Filiação mãe:</label>	
				<input type="text" name="filiacao_mae" placeholder="Filiação mãe" required="required" value="<?php if (isset($form1->filiacao_mae)) { echo $form1->filiacao_mae;	
				} ?>" />
			</div>
			<div class="col s12 l6 " style="margin-right: 10px">
				<label for="filiacao_pai">Filiação pai:</label>	
				<input type="text" name="filiacao_pai" placeholder="Filiação pai" required="required" value="<?php if (isset($form1->filiacao_pai)) { echo $form1->filiacao_pai;	
				} ?>" />
			</div>
			<div class="col s12 l5 " style="margin-right: 10px">
				<label for="responsavel">Responsável:</label>	
				<input type="text" name="responsavel" placeholder="Responsável" required="required" value="<?php if (isset($form1->responsavel)) { echo $form1->responsavel;	
				} ?>" />
			</div>
			<div class="col s12 l5 " style="margin-right: 10px">
				<label for="estado_civil">Estado Civil:</label>
				<select name="estado_civil" id="" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Solteiro" <?php if ($form1->estado_civil == 'Solteiro'){ ?> selected="selected" <?php } ?> >Solteiro</option>
					<option value="União Estável" <?php if ($form1->estado_civil == 'União Estável'){ ?> selected="selected" <?php } ?> >União Estável</option>
					<option value="Separado" <?php if ($form1->estado_civil == 'Separado'){ ?> selected="selected" <?php } ?> >Separado</option>
				</select>	
			</div>
			<div class="col s12 l5 " style="margin-right: 10px">
				<label for="acompanhante">Acompanhante:</label>	
				<select name="acompanhante" id="" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="sozinho" <?php if ($form1->acompanhante == 'sozinho'){ ?> selected="selected" <?php } ?> >Sozinho</option>
					<option value="mae" <?php if ($form1->acompanhante == 'mae'){ ?> selected="selected" <?php } ?> >Mãe</option>
					<option value="pai" <?php if ($form1->acompanhante == 'pai'){ ?> selected="selected" <?php } ?> >Pai</option>
					<option value="ambos" <?php if ($form1->acompanhante == 'ambos'){ ?> selected="selected" <?php } ?> >Pais</option>
					<option value="companheiro" <?php if ($form1->acompanhante == 'companheiro'){ ?> selected="selected" <?php } ?> >Companheiro(a)</option>
					<option value="amigo" <?php if ($form1->acompanhante == 'amigo'){ ?> selected="selected" <?php } ?> >Amigo(a)</option>
					<option value="parente" <?php if ($form1->acompanhante == 'parente'){ ?> selected="selected" <?php } ?> >Parente</option>
					<option value="outros" <?php if ($form1->acompanhante == 'outros'){ ?> selected="selected" <?php } ?> >Outros</option>
				</select>	
			</div>
			<div class="col s12 "></div>
			<div class="col l12 s12">
			<br>
			<button class="btn waves-effect waves-light blue" type="submit" name="edit1" formaction="<?php echo base_url('Pessoa/edit_dados_adolescente/'.$id);?>">Salvar</button>
			<br><br>
		</div>
			<br>
			<br>
	</div>
	<br>
		
		<!-- BLOCO 2-->
<?php form_close(); ?>