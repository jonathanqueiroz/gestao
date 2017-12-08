<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php echo form_open('Pessoa/edit_emocional_fisico/'.$id); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Situação Psicoemocional e Físico</h4><br></div>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="col s12 l12 texto">1. Psicoemocional: <br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="imagem_corporal">1.1 Imagem Corporal </label class="texto">
			<select name="imagem_corporal" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Conforme" <?php if ($form7->imagem_corporal == 'Conforme'){ ?> selected="selected" <?php } ?> >Conforme</option>
				<option value="Causa preocupação" <?php if ($form7->imagem_corporal == 'Causa preocupação'){ ?> selected="selected" <?php } ?> >Causa preocupação</option>
				<option value="Impede relação com os outros" <?php if ($form7->imagem_corporal == 'Impede relação com os outros'){ ?> selected="selected" <?php } ?> >Impede relação com os outros</option>
			</select> 
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="auto_percepcao">1.2 Auto Percepção </label class="texto">
			<select name="auto_percepcao" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Triste" <?php if ($form7->auto_percepcao == 'Triste'){ ?> selected="selected" <?php } ?> >Triste</option>
				<option value="Nervoso" <?php if ($form7->auto_percepcao == 'Nervoso'){ ?> selected="selected" <?php } ?> >Nervoso</option>
				<option value="Alegre" <?php if ($form7->auto_percepcao == 'Alegre'){ ?> selected="selected" <?php } ?> >Alegre</option>
				<option value="Muito tímido" <?php if ($form7->auto_percepcao == 'Muito tímido'){ ?> selected="selected" <?php } ?> >Muito tímido</option>
				<option value="Outro" <?php if ($form7->auto_percepcao == 'Outro'){ ?> selected="selected" <?php } ?> >Outro</option>
			</select> 	
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="adulto_referencia">1.3 Adulto de Referência </label class="texto">
			<select name="adulto_referencia" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Pai" <?php if ($form7->adulto_referencia == 'Pai'){ ?> selected="selected" <?php } ?> >Pai</option>
				<option value="Mãe" <?php if ($form7->adulto_referencia == 'Mãe'){ ?> selected="selected" <?php } ?> >Mãe</option>
				<option value="Outro Familiar" <?php if ($form7->adulto_referencia == 'Outro Familiar'){ ?> selected="selected" <?php } ?> >Outro Familiar</option>
				<option value="Professor" <?php if ($form7->adulto_referencia == 'Professor'){ ?> selected="selected" <?php } ?> >Professor</option>
				<option value="Fora de Casa" <?php if ($form7->adulto_referencia == 'Fora de Casa'){ ?> selected="selected" <?php } ?> >Fora de Casa</option>
				<option value="Nenhum" <?php if ($form7->adulto_referencia == 'Nenhum'){ ?> selected="selected" <?php } ?> >Nenhum</option>
			</select> 
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="projeto_vida">1.4 Projeto de Vida</label class="texto">
			<select name="projeto_vida" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Claro" <?php if ($form7->projeto_vida == 'Claro'){ ?> selected="selected" <?php } ?> >Claro</option>
				<option value="Confuso" <?php if ($form7->projeto_vida == 'Confuso'){ ?> selected="selected" <?php } ?> >Confuso</option>
				<option value="Ausente" <?php if ($form7->projeto_vida == 'Ausente'){ ?> selected="selected" <?php } ?> >Ausente</option>
			</select>  
		</div>
		<div class="col s12 l12 texto"><br>2. Exame Físico <br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="peso">2.1 Peso (kg)</label class="texto">
			<input type="number" min="0" step="0.1" name="peso" required="required" value="<?php echo $form7->peso; ?>" />
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="altura">2.2 Altura (cm) </label class="texto">
			<input type="number" min="0" name="altura" required="required" value="<?php echo $form7->altura; ?>" />
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="centil_peso_idade"> 2.3 Centil Peso/Idade</label class="texto">
			<input type="number" min="0" step="0.1" name="centil_peso_idade" required="required" value="<?php echo $form7->centil_peso_idade; ?>" />
		</div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="centil_altura_idade">2.4 Centil Altura/Idade </label class="texto">
			<input type="number" min="0" step="0.1" name="centil_altura_idade" required="required" value="<?php echo $form7->centil_altura_idade; ?>" />
		</div>
		<div class="col s12 l3" >
			<br>
			<label class="texto" for="centil_peso_altura">2.5 Centil Peso/Altura </label class="texto">
			<input type="number" min="0" step="0.1" name="centil_peso_altura" required="required" value="<?php echo $form7->centil_peso_altura; ?>" />
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="aspecto_geral">2.6 Aspecto Geral </label class="texto">
			<p><input class="with-gap" name="aspecto_geral" type="radio" value="Normal" id="e7_0" required <?php if($form7->aspecto_geral == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_0">Normal</label></p>
			<p><input class="with-gap" name="aspecto_geral" type="radio" value="Anormal"  id="e7_01" <?php if($form7->aspecto_geral == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_01">Anormal</label></p> 
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="pele_anexos">2.7 Pele e Anexos </label class="texto">
			<p><input class="with-gap" name="pele_anexos" type="radio" value="Normal" id="e7_1" required <?php if($form7->pele_anexos == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_1">Normal</label></p>
			<p><input class="with-gap" name="pele_anexos" type="radio" value="Anormal"  id="e7_2" <?php if($form7->pele_anexos == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_2">Anormal</label></p> 
			<br> 
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="cabeca">2.8 Cabeça</label class="texto">
			<p><input class="with-gap" name="cabeca" type="radio" value="Normal" id="e7_3" required <?php if($form7->cabeca == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_3">Normal</label></p>
			<p><input class="with-gap" name="cabeca" type="radio" value="Anormal"  id="e7_4" <?php if($form7->cabeca == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_4">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="acuidade_visual">2.9 Acuidade Visual</label class="texto">
			<p><input class="with-gap" name="acuidade_visual" type="radio" value="Normal" id="e7_5" required <?php if($form7->acuidade_visual == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_5">Normal</label></p>
			<p><input class="with-gap" name="acuidade_visual" type="radio" value="Anormal"  id="e7_6" <?php if($form7->acuidade_visual == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_6">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="acuidade_auditiva">2.10 Acuidade Auditiva</label class="texto">
			<p><input class="with-gap" name="acuidade_auditiva" type="radio" value="Normal" id="e7_7" required <?php if($form7->acuidade_auditiva == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_7">Normal</label></p>
			<p><input class="with-gap" name="acuidade_auditiva" type="radio" value="Anormal"  id="e7_8" <?php if($form7->acuidade_auditiva == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_8">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="bocas_dentes">2.11 Bocas e Dentes</label class="texto">
			<p><input class="with-gap" name="bocas_dentes" type="radio" value="Normal" id="e7_9" required <?php if($form7->bocas_dentes == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_9">Normal</label></p>
			<p><input class="with-gap" name="bocas_dentes" type="radio" value="Anormal"  id="e7_10" <?php if($form7->bocas_dentes == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_10">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="pescoco_tireoide">2.12 Pescoço e Tireoíde</label class="texto">
			<p><input class="with-gap" name="pescoco_tireoide" type="radio" value="Normal" id="e7_11" required <?php if($form7->pescoco_tireoide == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_11">Normal</label></p>
			<p><input class="with-gap" name="pescoco_tireoide" type="radio" value="Anormal"  id="e7_12" <?php if($form7->pescoco_tireoide == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_12">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="torax_mamas">2.13 Tórax e Mamas</label class="texto">
			<p><input class="with-gap" name="torax_mamas" type="radio" value="Normal" id="e7_13" required <?php if($form7->torax_mamas == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_13">Normal</label></p>
			<p><input class="with-gap" name="torax_mamas" type="radio" value="Anormal"  id="e7_14" <?php if($form7->torax_mamas == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_14">Anormal</label></p>
			<br> 
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="cardiovascular">2.14 Cárdiovascular</label class="texto">
			<p><input class="with-gap" name="cardiovascular" type="radio" value="Normal" id="e7_15" required <?php if($form7->cardiovascular == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_15">Normal</label></p>
			<p><input class="with-gap" name="cardiovascular" type="radio" value="Anormal"  id="e7_16" <?php if($form7->cardiovascular == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_16">Anormal</label></p>
			<br>			
		</div>
		<div class="col s12 l2 " >
			<br>			
			<label class="texto" for="abdomen">2.15 Abdômen</label class="texto">
			<p><input class="with-gap" name="abdomen" type="radio" value="Normal" id="e7_17" required <?php if($form7->abdomen == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_17">Normal</label></p>
			<p><input class="with-gap" name="abdomen" type="radio" value="Anormal"  id="e7_18" <?php if($form7->abdomen == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_18">Anormal</label></p>
			<br>
			
		</div>
		<div class="col s12 l2  " >
			<br>		
			<label class="texto" for="geniturinario">2.16 Geniturinário</label class="texto">
			<p><input class="with-gap" name="geniturinario" type="radio" value="Normal" id="e7_19" required <?php if($form7->geniturinario == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_19">Normal</label></p>
			<p><input class="with-gap" name="geniturinario" type="radio" value="Anormal"  id="e7_20" <?php if($form7->geniturinario == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_20">Anormal</label></p> 
			<br>			
		</div>
		<div class="col s12 l2  " >
			<br>			
			<label class="texto" for="coluna">2.17 Coluna</label class="texto">
			<p><input class="with-gap" name="coluna" type="radio" value="Normal" id="e7_21" required <?php if($form7->coluna == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_21">Normal</label></p>
			<p><input class="with-gap" name="coluna" type="radio" value="Anormal"  id="e7_22" <?php if($form7->coluna == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_22">Anormal</label></p>  	
			<br>		
		</div>
		<div class="col s12 l2  " >
			<br>		
			<label class="texto" for="extremidades">2.18 Extremidades</label class="texto">
			<p><input class="with-gap" name="extremidades" type="radio" value="Normal" id="e7_23" required <?php if($form7->extremidades == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_23">Normal</label></p>
			<p><input class="with-gap" name="extremidades" type="radio" value="Anormal"  id="e7_24" <?php if($form7->extremidades == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_24">Anormal</label></p> 
			<br>			
		</div>
		<div class="col s12 l2  " >
			<br>			
			<label class="texto" for="neurologicos">2.19 Neurológicos</label class="texto">
			<p><input class="with-gap" name="neurologicos" type="radio" value="Normal" id="e7_25" required <?php if($form7->neurologicos == 'Normal'){ ?> checked <?php } ?> />
			<label for="e7_25">Normal</label></p>
			<p><input class="with-gap" name="neurologicos" type="radio" value="Anormal"  id="e7_26" <?php if($form7->neurologicos == 'Anormal'){ ?> checked <?php } ?> />
			<label for="e7_26">Anormal</label></p>
			<br>			
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="pressao_arterial">2.20 Pressão Arterial </label class="texto">
			<input type="text"  name="pressao_arterial" required="required" value="<?php echo $form7->pressao_arterial; ?>" />			
		</div>
		<div class="col s12 l3  " >
			<br>			
			<label class="texto" for="frequencia_cardiaca">2.21 Frequência Cardíaca </label class="texto">
			<input type="number" min="0" name="frequencia_cardiaca" required="required" value="<?php echo $form7->frequencia_cardiaca; ?>" />			
		</div>
		<div class="col l12 s12">
			<br>
			<button class="btn waves-effect waves-light blue" type="submit" name="action">Salvar</button>
			<br><br>
		</div>
	</div>
</div>
</form>