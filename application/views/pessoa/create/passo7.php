<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php echo form_open('Pessoa/emocional_fisico/'.$id); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Situação Psicoemocional e Físico</h4><br></div>
		<input type="hidden" name="id" value="<?php if(isset($id)) echo $id; ?>" />
		<div class="col s12 l12 texto">1. Psicoemocional: <br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="imagem_corporal">1.1 Imagem Corporal </label class="texto">
			<select name="imagem_corporal" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Conforme">Conforme</option>
				<option value="Causa preocupação">Causa preocupação</option>
				<option value="Impede relação com os outros">Impede relação com os outros</option>
			</select> 
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="auto_percepcao">1.2 Auto Percepção </label class="texto">
			<select name="auto_percepcao" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Triste">Triste</option>
				<option value="Nervoso">Nervoso</option>
				<option value="Alegre">Alegre</option>
				<option value="Muito tímido">Muito tímido</option>
				<option value="Outro">Outro</option>
			</select> 	
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="adulto_referencia">1.3 Adulto de Referência </label class="texto">
			<select name="adulto_referencia" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Pai">Pai</option>
				<option value="Mãe">Mãe</option>
				<option value="Outro Familiar">Outro Familiar</option>
				<option value="Professor">Professor</option>
				<option value="Fora de Casa">Fora de Casa</option>
				<option value="Nenhum">Nenhum</option>
			</select> 
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="projeto_vida">1.4 Projeto de Vida</label class="texto">
			<select name="projeto_vida" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Claro">Claro</option>
				<option value="Confuso">Confuso</option>
				<option value="Ausente">Ausente</option>
			</select>  
		</div>
		<div class="col s12 l12 texto"><br>2. Exame Físico <br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="peso">2.1 Peso (kg)</label class="texto">
			<input type="number" min="0" step="0.1" name="peso" required="required" />
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="altura">2.2 Altura (cm) </label class="texto">
			<input type="number" min="0" name="altura" required="required" />
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="centil_peso_idade"> 2.3 Centil Peso/Idade</label class="texto">
			<input type="number" min="0" step="0.1" name="centil_peso_idade" required="required" />
		</div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="centil_altura_idade">2.4 Centil Altura/Idade </label class="texto">
			<input type="number" min="0" step="0.1" name="centil_altura_idade" required="required" />
		</div>
		<div class="col s12 l3" >
			<br>
			<label class="texto" for="centil_peso_altura">2.5 Centil Peso/Altura </label class="texto">
			<input type="number" min="0" step="0.1" name="centil_peso_altura" required="required" />
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="aspecto_geral">2.6 Aspecto Geral </label class="texto">
			<p><input class="with-gap" name="aspecto_geral" type="radio" value="Normal" id="r0" required />
			<label for="r0">Normal</label></p>
			<p><input class="with-gap" name="aspecto_geral" type="radio" value="Anormal"  id="r01" />
			<label for="r01">Anormal</label></p> 
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="pele_anexos">2.7 Pele e Anexos </label class="texto">
			<p><input class="with-gap" name="pele_anexos" type="radio" value="Normal" id="r1" required />
			<label for="r1">Normal</label></p>
			<p><input class="with-gap" name="pele_anexos" type="radio" value="Anormal"  id="r2" />
			<label for="r2">Anormal</label></p> 
			<br> 
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="cabeca">2.8 Cabeça</label class="texto">
			<p><input class="with-gap" name="cabeca" type="radio" value="Normal" id="r3" required />
			<label for="r3">Normal</label></p>
			<p><input class="with-gap" name="cabeca" type="radio" value="Anormal"  id="r4" />
			<label for="r4">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="acuidade_visual">2.9 Acuidade Visual</label class="texto">
			<p><input class="with-gap" name="acuidade_visual" type="radio" value="Normal" id="r5" required />
			<label for="r5">Normal</label></p>
			<p><input class="with-gap" name="acuidade_visual" type="radio" value="Anormal"  id="r6" />
			<label for="r6">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="acuidade_auditiva">2.10 Acuidade Auditiva</label class="texto">
			<p><input class="with-gap" name="acuidade_auditiva" type="radio" value="Normal" id="r7" required />
			<label for="r7">Normal</label></p>
			<p><input class="with-gap" name="acuidade_auditiva" type="radio" value="Anormal"  id="r8" />
			<label for="r8">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="bocas_dentes">2.11 Bocas e Dentes</label class="texto">
			<p><input class="with-gap" name="bocas_dentes" type="radio" value="Normal" id="r9" required />
			<label for="r9">Normal</label></p>
			<p><input class="with-gap" name="bocas_dentes" type="radio" value="Anormal"  id="r10" />
			<label for="r10">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="pescoco_tireoide">2.12 Pescoço e Tireoíde</label class="texto">
			<p><input class="with-gap" name="pescoco_tireoide" type="radio" value="Normal" id="r11" required />
			<label for="r11">Normal</label></p>
			<p><input class="with-gap" name="pescoco_tireoide" type="radio" value="Anormal"  id="r12" />
			<label for="r12">Anormal</label></p>
			<br>
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="torax_mamas">2.13 Tórax e Mamas</label class="texto">
			<p><input class="with-gap" name="torax_mamas" type="radio" value="Normal" id="r13" required />
			<label for="r13">Normal</label></p>
			<p><input class="with-gap" name="torax_mamas" type="radio" value="Anormal"  id="r14" />
			<label for="r14">Anormal</label></p>
			<br> 
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="cardiovascular">2.14 Cárdiovascular</label class="texto">
			<p><input class="with-gap" name="cardiovascular" type="radio" value="Normal" id="r15" required />
			<label for="r15">Normal</label></p>
			<p><input class="with-gap" name="cardiovascular" type="radio" value="Anormal"  id="r16" />
			<label for="r16">Anormal</label></p>
			<br>			
		</div>
		<div class="col s12 l2 " >
			<br>			
			<label class="texto" for="abdomen">2.15 Abdômen</label class="texto">
			<p><input class="with-gap" name="abdomen" type="radio" value="Normal" id="r17" required />
			<label for="r17">Normal</label></p>
			<p><input class="with-gap" name="abdomen" type="radio" value="Anormal"  id="r18" />
			<label for="r18">Anormal</label></p>
			<br>
			
		</div>
		<div class="col s12 l2  " >
			<br>		
			<label class="texto" for="geniturinario">2.16 Geniturinário</label class="texto">
			<p><input class="with-gap" name="geniturinario" type="radio" value="Normal" id="r19" required />
			<label for="r19">Normal</label></p>
			<p><input class="with-gap" name="geniturinario" type="radio" value="Anormal"  id="r20" />
			<label for="r20">Anormal</label></p> 
			<br>			
		</div>
		<div class="col s12 l2  " >
			<br>			
			<label class="texto" for="coluna">2.17 Coluna</label class="texto">
			<p><input class="with-gap" name="coluna" type="radio" value="Normal" id="r21" required />
			<label for="r21">Normal</label></p>
			<p><input class="with-gap" name="coluna" type="radio" value="Anormal"  id="r22" />
			<label for="r22">Anormal</label></p>  	
			<br>		
		</div>
		<div class="col s12 l2  " >
			<br>		
			<label class="texto" for="extremidades">2.18 Extremidades</label class="texto">
			<p><input class="with-gap" name="extremidades" type="radio" value="Normal" id="r23" required />
			<label for="r23">Normal</label></p>
			<p><input class="with-gap" name="extremidades" type="radio" value="Anormal"  id="r24" />
			<label for="r24">Anormal</label></p> 
			<br>			
		</div>
		<div class="col s12 l2  " >
			<br>			
			<label class="texto" for="neurologicos">2.19 Neurológicos</label class="texto">
			<p><input class="with-gap" name="neurologicos" type="radio" value="Normal" id="r25" required />
			<label for="r25">Normal</label></p>
			<p><input class="with-gap" name="neurologicos" type="radio" value="Anormal"  id="r26" />
			<label for="r26">Anormal</label></p>
			<br>			
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="pressao_arterial">2.20 Pressão Arterial </label class="texto">
			<input type="text"  name="pressao_arterial" required="required" />			
		</div>
		<div class="col s12 l3  " >
			<br>			
			<label class="texto" for="frequencia_cardiaca">2.21 Frequência Cardíaca </label class="texto">
			<input type="number" min="0" name="frequencia_cardiaca" required="required" />			
		</div>
		<div class="col l12 s12">
			<br>
			<button class="btn waves-effect waves-light blue" type="submit" name="action">Salvar</button>
			<br><br>
		</div>
	</div>
</div>