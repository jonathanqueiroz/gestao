<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php echo form_open('Pessoa/emocional_fisico'); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Situação Psicoemocional e Físico</h4><br></div>
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
			<?php var_dump($form7->peso); ?>
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
			<p><input class="with-gap" name="aspecto_geral" type="radio" value="Normal" id="r0" required <?php if($form7->aspecto_geral == 'Normal'){ ?> checked <?php } ?> />
			<label for="r0">Normal</label></p>
			<p><input class="with-gap" name="aspecto_geral" type="radio" value="Anormal"  id="r01" <?php if($form7->aspecto_geral == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r01">Anormal</label></p> 
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="pele_anexos">2.7 Pele e Anexos </label class="texto">
			<p><input class="with-gap" name="pele_anexos" type="radio" value="Normal" id="r1" required <?php if($form7->pele_anexos == 'Normal'){ ?> checked <?php } ?> />
			<label for="r1">Normal</label></p>
			<p><input class="with-gap" name="pele_anexos" type="radio" value="Anormal"  id="r2" <?php if($form7->pele_anexos == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r2">Anormal</label></p> 
			<br> 
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="cabeca">2.8 Cabeça</label class="texto">
			<p><input class="with-gap" name="cabeca" type="radio" value="Normal" id="r3" required <?php if($form7->cabeca == 'Normal'){ ?> checked <?php } ?> />
			<label for="r3">Normal</label></p>
			<p><input class="with-gap" name="cabeca" type="radio" value="Anormal"  id="r4" <?php if($form7->cabeca == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r4">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="acuidade_visual">2.9 Acuidade Visual</label class="texto">
			<p><input class="with-gap" name="acuidade_visual" type="radio" value="Normal" id="r5" required <?php if($form7->acuidade_visual == 'Normal'){ ?> checked <?php } ?> />
			<label for="r5">Normal</label></p>
			<p><input class="with-gap" name="acuidade_visual" type="radio" value="Anormal"  id="r6" <?php if($form7->acuidade_visual == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r6">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="acuidade_auditiva">2.10 Acuidade Auditiva</label class="texto">
			<p><input class="with-gap" name="acuidade_auditiva" type="radio" value="Normal" id="r7" required <?php if($form7->acuidade_auditiva == 'Normal'){ ?> checked <?php } ?> />
			<label for="r7">Normal</label></p>
			<p><input class="with-gap" name="acuidade_auditiva" type="radio" value="Anormal"  id="r8" <?php if($form7->acuidade_auditiva == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r8">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="bocas_dentes">2.11 Bocas e Dentes</label class="texto">
			<p><input class="with-gap" name="bocas_dentes" type="radio" value="Normal" id="r9" required <?php if($form7->bocas_dentes == 'Normal'){ ?> checked <?php } ?> />
			<label for="r9">Normal</label></p>
			<p><input class="with-gap" name="bocas_dentes" type="radio" value="Anormal"  id="r10" <?php if($form7->bocas_dentes == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r10">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="pescoco_tireoide">2.12 Pescoço e Tireoíde</label class="texto">
			<p><input class="with-gap" name="pescoco_tireoide" type="radio" value="Normal" id="r11" required <?php if($form7->pescoco_tireoide == 'Normal'){ ?> checked <?php } ?> />
			<label for="r11">Normal</label></p>
			<p><input class="with-gap" name="pescoco_tireoide" type="radio" value="Anormal"  id="r12" <?php if($form7->pescoco_tireoide == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r12">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="torax_mamas">2.13 Tórax e Mamas</label class="texto">
			<p><input class="with-gap" name="torax_mamas" type="radio" value="Normal" id="r13" required <?php if($form7->torax_mamas == 'Normal'){ ?> checked <?php } ?> />
			<label for="r13">Normal</label></p>
			<p><input class="with-gap" name="torax_mamas" type="radio" value="Anormal"  id="r14" <?php if($form7->torax_mamas == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r14">Anormal</label></p>
			<br> 
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="cardiovascular">2.14 Cárdiovascular</label class="texto">
			<p><input class="with-gap" name="cardiovascular" type="radio" value="Normal" id="r15" required <?php if($form7->cardiovascular == 'Normal'){ ?> checked <?php } ?> />
			<label for="r15">Normal</label></p>
			<p><input class="with-gap" name="cardiovascular" type="radio" value="Anormal"  id="r16" <?php if($form7->cardiovascular == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r16">Anormal</label></p>
			<br>			
		</div>
		<div class="col s12 l2 " >
			<br>			
			<label class="texto" for="abdomen">2.15 Abdômen</label class="texto">
			<p><input class="with-gap" name="abdomen" type="radio" value="Normal" id="r17" required <?php if($form7->abdomen == 'Normal'){ ?> checked <?php } ?> />
			<label for="r17">Normal</label></p>
			<p><input class="with-gap" name="abdomen" type="radio" value="Anormal"  id="r18" <?php if($form7->abdomen == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r18">Anormal</label></p>
			<br>
			
		</div>
		<div class="col s12 l2  " >
			<br>		
			<label class="texto" for="geniturinario">2.16 Geniturinário</label class="texto">
			<p><input class="with-gap" name="geniturinario" type="radio" value="Normal" id="r19" required <?php if($form7->geniturinario == 'Normal'){ ?> checked <?php } ?> />
			<label for="r19">Normal</label></p>
			<p><input class="with-gap" name="geniturinario" type="radio" value="Anormal"  id="r20" <?php if($form7->geniturinario == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r20">Anormal</label></p> 
			<br>			
		</div>
		<div class="col s12 l2  " >
			<br>			
			<label class="texto" for="coluna">2.17 Coluna</label class="texto">
			<p><input class="with-gap" name="coluna" type="radio" value="Normal" id="r21" required <?php if($form7->coluna == 'Normal'){ ?> checked <?php } ?> />
			<label for="r21">Normal</label></p>
			<p><input class="with-gap" name="coluna" type="radio" value="Anormal"  id="r22" <?php if($form7->coluna == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r22">Anormal</label></p>  	
			<br>		
		</div>
		<div class="col s12 l2  " >
			<br>		
			<label class="texto" for="extremidades">2.18 Extremidades</label class="texto">
			<p><input class="with-gap" name="extremidades" type="radio" value="Normal" id="r23" required <?php if($form7->extremidades == 'Normal'){ ?> checked <?php } ?> />
			<label for="r23">Normal</label></p>
			<p><input class="with-gap" name="extremidades" type="radio" value="Anormal"  id="r24" <?php if($form7->extremidades == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r24">Anormal</label></p> 
			<br>			
		</div>
		<div class="col s12 l2  " >
			<br>			
			<label class="texto" for="neurologicos">2.19 Neurológicos</label class="texto">
			<p><input class="with-gap" name="neurologicos" type="radio" value="Normal" id="r25" required <?php if($form7->neurologicos == 'Normal'){ ?> checked <?php } ?> />
			<label for="r25">Normal</label></p>
			<p><input class="with-gap" name="neurologicos" type="radio" value="Anormal"  id="r26" <?php if($form7->neurologicos == 'Anormal'){ ?> checked <?php } ?> />
			<label for="r26">Anormal</label></p>
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