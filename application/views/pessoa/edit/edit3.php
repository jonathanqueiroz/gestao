<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php echo form_open('Pessoa/edit_situacao_familiar/'.$id); ?>
<?php echo validation_errors(); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Situação Familiar</h4><br></div>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="col l12 texto">1. Convive com: <br><br></div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_pai">1.1 Mãe </label>
			<p><input class="with-gap" name="convive_mae" type="radio" value="Não" id="r1" required <?php if($form3->convive_mae == 'Não'){ ?> checked <?php } ?> />
			<label for="r1">Não</label></p>
			<p><input class="with-gap" name="convive_mae" type="radio" value="Na Casa"  id="r2" <?php if($form3->convive_mae == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="r2">Na Casa</label></p>
			<p><input class="with-gap" name="convive_mae" type="radio" value="No Quarto"  id="r3" <?php if($form3->convive_mae == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="r3">No Quarto</label></p>
			<br>
		</div>
		<div class="col s12 l2 " >
			<label class="texto" for="convive_pai">1.2 Pai </label>
			<p><input class="with-gap" name="convive_pai" type="radio" value="Não" id="r4" required <?php if($form3->convive_pai == 'Não'){ ?> checked <?php } ?> />
			<label for="r4">Não</label></p>
			<p><input class="with-gap" name="convive_pai" type="radio" value="Na Casa"  id="r5" <?php if($form3->convive_pai == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="r5">Na Casa</label></p>
			<p><input class="with-gap" name="convive_pai" type="radio" value="No Quarto"  id="r6" <?php if($form3->convive_pai == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="r6">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_madrasta">1.3 Madrasta </label>
			<p><input class="with-gap" name="convive_madrasta" type="radio" value="Não" id="r7" required <?php if($form3->convive_madrasta == 'Não'){ ?> checked <?php } ?> />
			<label for="r7">Não</label></p>
			<p><input class="with-gap" name="convive_madrasta" type="radio" value="Na Casa"  id="r8" <?php if($form3->convive_madrasta == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="r8">Na Casa</label></p>
			<p><input class="with-gap" name="convive_madrasta" type="radio" value="No Quarto"  id="r9" <?php if($form3->convive_madrasta == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="r9">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_padrastro">1.4 Padrasto </label>
			<p><input class="with-gap" name="convive_padrastro" type="radio" value="Não" id="r10" required <?php if($form3->convive_padrastro == 'Não'){ ?> checked <?php } ?> />
			<label for="r10">Não</label></p>
			<p><input class="with-gap" name="convive_padrastro" type="radio" value="Na Casa"  id="r11" <?php if($form3->convive_padrastro == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="r11">Na Casa</label></p>
			<p><input class="with-gap" name="convive_padrastro" type="radio" value="No Quarto"  id="r12" <?php if($form3->convive_padrastro == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="r12">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_irmao">1.5 Irmão(ã)(s) </label>
			<p><input class="with-gap" name="convive_irmao" type="radio" value="Não" id="r13" required <?php if($form3->convive_irmao == 'Não'){ ?> checked <?php } ?> />
			<label for="r13">Não</label></p>
			<p><input class="with-gap" name="convive_irmao" type="radio" value="Na Casa"  id="r14" <?php if($form3->convive_irmao == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="r14">Na Casa</label></p>
			<p><input class="with-gap" name="convive_irmao" type="radio" value="No Quarto"  id="r15" <?php if($form3->convive_irmao == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="r15">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_filho">1.6 Filho(s)</label>
			<p><input class="with-gap" name="convive_filho" type="radio" value="Não" id="r16" required <?php if($form3->convive_filho == 'Não'){ ?> checked <?php } ?> />
			<label for="r16">Não</label></p>
			<p><input class="with-gap" name="convive_filho" type="radio" value="Na Casa"  id="r17" <?php if($form3->convive_filho == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="r17">Na Casa</label></p>
			<p><input class="with-gap" name="convive_filho" type="radio" value="No Quarto"  id="r18" <?php if($form3->convive_filho == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="r18">No Quarto</label></p>
			<br>
		</div>
		<div class="col l12 s12"><br></div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_companheiro">1.7 Companheiro(a) </label>
			<p><input class="with-gap" name="convive_companheiro" type="radio" value="Não" id="r19" required <?php if($form3->convive_companheiro == 'Não'){ ?> checked <?php } ?> />
			<label for="r19">Não</label></p>
			<p><input class="with-gap" name="convive_companheiro" type="radio" value="Na Casa"  id="r20" <?php if($form3->convive_companheiro == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="r20">Na Casa</label></p>
			<p><input class="with-gap" name="convive_companheiro" type="radio" value="No Quarto"  id="r21" <?php if($form3->convive_companheiro == 'No Quarto'){ ?> checked <?php } ?>/>
			<label for="r21">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >		
			<label class="texto" for="convive_outros">1.8 Outros </label>
			<p><input class="with-gap" name="convive_outros" type="radio" value="Não" id="r22" required <?php if($form3->convive_outros == 'Não'){ ?> checked <?php } ?> />
			<label for="r22">Não</label></p>
			<p><input class="with-gap" name="convive_outros" type="radio" value="Na Casa"  id="r23" <?php if($form3->convive_outros == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="r23">Na Casa</label></p>
			<p><input class="with-gap" name="convive_outros" type="radio" value="No Quarto"  id="r24" <?php if($form3->convive_outros == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="r24">No Quarto</label></p>
			<br>
		</div>
		<div class="col l12 s12 texto"><br>2. Vive: <br></div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="vive_instituicao">2.1 Em instituição </label>
			<p><input class="with-gap" name="vive_instituicao" type="radio" value="Sim" id="r25" required <?php if($form3->vive_instituicao == 'Sim'){ ?> checked <?php } ?> />
			<label for="r25">Sim</label></p>
			<p><input class="with-gap" name="vive_instituicao" type="radio" value="Não"  id="r26" <?php if($form3->vive_instituicao == 'Não'){ ?> checked <?php } ?>/>
			<label for="r26">Não</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="vive_rua">2.2 Na rua </label>
			<p><input class="with-gap" name="vive_rua" type="radio" value="Sim" id="r27" required <?php if($form3->vive_rua == 'Sim'){ ?> checked <?php } ?> />
			<label for="r27">Sim</label></p>
			<p><input class="with-gap" name="vive_rua" type="radio" value="Não"  id="r28" <?php if($form3->vive_rua == 'Não'){ ?> checked <?php } ?> />
			<label for="r28">Não</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="vive_sozinho">2.3 Sozinho </label>
			<p><input class="with-gap" name="vive_sozinho" type="radio" value="Sim" id="r29" required <?php if($form3->vive_sozinho == 'Sim'){ ?> checked <?php } ?> />
			<label for="r29">Sim</label></p>
			<p><input class="with-gap" name="vive_sozinho" type="radio" value="Não"  id="r30" <?php if($form3->vive_sozinho == 'Não'){ ?> checked <?php } ?> />
			<label for="r30">Não</label></p>
			<br>
		</div>

		<!-- -->
		<div class="col l12 s12 texto"><br>3. Nível de instrução <br></div>
		<div class="col l4 " style="margin-right: 10px">
			<br>
			<label class="texto" for="instrucao_pai">3.1 Pai ou Substituto:</label>
			<select name="instrucao_pai" id="" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Analfabeto" <?php if ($form3->instrucao_pai == 'Analfabeto'){ ?> selected="selected" <?php } ?> >Analfabeto</option>
					<option value="1º Grau Incompleto" <?php if ($form3->instrucao_pai == '1º Grau Incompleto'){ ?> selected="selected" <?php } ?> >1º Grau Incompleto</option>
					<option value="1º Grau Completo" <?php if ($form3->instrucao_pai == '1º Grau Completo'){ ?> selected="selected" <?php } ?> >1º Grau Completo</option>
					<option value="Segundo Grau / Técnico Incompleto" <?php if ($form3->instrucao_pai == 'Segundo Grau / Técnico Incompleto'){ ?> selected="selected" <?php } ?> >2º Grau / Técnico Completo</option>
					<option value="2º Grau / Técnico Incompleto" <?php if ($form3->instrucao_pai == '2º Grau / Técnico Incompleto'){ ?> selected="selected" <?php } ?> >2º Grau / Técnico Incompleto</option>
					<option value="Universitário" <?php if ($form3->instrucao_pai == 'Universitário'){ ?> selected="selected" <?php } ?> >Universitário</option>
			</select>	
		</div>
		<div class="col l4 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="instrucao_mae">3.2 Mãe ou Substituta:</label>
			<select name="instrucao_mae" id="" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Analfabeto" <?php if ($form3->instrucao_mae == 'Analfabeto'){ ?> selected="selected" <?php } ?> >Analfabeto</option>
					<option value="1º Grau Incompleto" <?php if ($form3->instrucao_mae == '1º Grau Incompleto'){ ?> selected="selected" <?php } ?> >1º Grau Incompleto</option>
					<option value="1º Grau Completo" <?php if ($form3->instrucao_mae == '1º Grau Completo'){ ?> selected="selected" <?php } ?> >1º Grau Completo</option>
					<option value="Segundo Grau / Técnico Incompleto" <?php if ($form3->instrucao_mae == 'Segundo Grau / Técnico Incompleto'){ ?> selected="selected" <?php } ?> >2º Grau / Técnico Completo</option>
					<option value="2º Grau / Técnico Incompleto" <?php if ($form3->instrucao_mae == '2º Grau / Técnico Incompleto'){ ?> selected="selected" <?php } ?> >2º Grau / Técnico Incompleto</option>
					<option value="Universitário" <?php if ($form3->instrucao_mae == 'Universitário'){ ?> selected="selected" <?php } ?> >Universitário</option>
			</select>	
		</div>

		<div class="col l12 s12 texto"><br>4. Tipo de Trabalho <br></div>
		<div class="col l4 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="tipo_trabalho_pai">4.1 Pai ou Substituto:</label>
			<select name="tipo_trabalho_pai" id="" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Nenhum" <?php if ($form3->tipo_trabalho_pai == 'Nenhum'){ ?> selected="selected" <?php } ?> >Nenhum</option>
					<option value="Não Estável" <?php if ($form3->tipo_trabalho_pai == 'Não Estável'){ ?> selected="selected" <?php } ?> >Não Estável</option>
					<option value="Estável" <?php if ($form3->tipo_trabalho_pai == 'Estável'){ ?> selected="selected" <?php } ?> >Estável</option>
			</select>	
		</div>
		<div class="col l4 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="tipo_trabalho_mae">4.2 Mãe ou Substituta:</label>
			<select name="tipo_trabalho_mae" id="" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Nenhum" <?php if ($form3->tipo_trabalho_mae == 'Nenhum'){ ?> selected="selected" <?php } ?> >Nenhum</option>
					<option value="Não Estável" <?php if ($form3->tipo_trabalho_mae == 'Não Estável'){ ?> selected="selected" <?php } ?> >Não Estável</option>
					<option value="Estável" <?php if ($form3->tipo_trabalho_mae == 'Estável'){ ?> selected="selected" <?php } ?> >Estável</option>
			</select>
			</select>	
		</div>
		<div class="col l12 s12 texto"><br>5. Ocupação <br></div>
		<div class="col l3 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="ocupacao_pai">5.1 Pai: </label>
			<input type="text" name="ocupacao_pai" placeholder="Ocupação ou Não Corresponde" required="required" value="<?php echo $form3->ocupacao_pai; ?>" />	
		</div>
		<div class="col l3 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="ocupacao_mae">5.2 Mãe: </label>
			<input type="text" name="ocupacao_mae" placeholder="Ocupação ou Não Corresponde" required="required" value="<?php echo $form3->ocupacao_mae; ?>" />	
		</div>
		<div class="col l3 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="ocupacao_responsavel">5.3 Responsável: </label>
			<input type="text" name="ocupacao_responsavel" placeholder="Ocupação ou Não Corresponde" required="required" value="<?php echo $form3->ocupacao_responsavel; ?>" />	
		</div>
		<div class="col l12 s12">
			<br>
			<label class="texto" for="percepcao">6. Percepção Familiar do Adolescente: </label>
			<p><input class="with-gap" name="percepcao" type="radio" value="Boa"  id="r31" required <?php if($form3->percepcao == 'Boa'){ ?> checked <?php } ?> />
			<label for="r31">Boa</label></p>
			<p><input class="with-gap" name="percepcao" type="radio" value="Regular"  id="r32" <?php if($form3->percepcao == 'Regular'){ ?> checked <?php } ?> />
			<label for="r32">Regular</label></p>
			<p><input class="with-gap" name="percepcao" type="radio" value="Ruim"  id="r33" <?php if($form3->percepcao == 'Ruim'){ ?> checked <?php } ?> />
			<label for="r33">Ruim</label></p>
			<p><input class="with-gap" name="percepcao" type="radio" value="Não Há"  id="r34" <?php if($form3->percepcao == 'Não Há'){ ?> checked <?php } ?> />
			<label for="r34">Não Há</label></p>    	
		</div>
		<div class="col l12 s12 texto"><br>7. Condições de Moradia <br></div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_energia">7.1 Energia Elétrica </label>
			<p><input class="with-gap" name="condicoes_energia" type="radio" value="Sim"  id="r35" required <?php if($form3->condicoes_energia == 'Sim'){ ?> checked <?php } ?> />
			<label for="r35">Sim</label></p>
			<p><input class="with-gap" name="condicoes_energia" type="radio" value="Não"  id="r36" <?php if($form3->condicoes_energia == 'Não'){ ?> checked <?php } ?> />
			<label for="r36">Não</label></p>			
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_lixo">7.2 Coleta de Lixo </label>
			<p><input class="with-gap" name="condicoes_lixo" type="radio" value="Sim"  id="r37" required <?php if($form3->condicoes_lixo == 'Sim'){ ?> checked <?php } ?> />
			<label for="r37">Sim</label></p>
			<p><input class="with-gap" name="condicoes_lixo" type="radio" value="Não"  id="r38" <?php if($form3->condicoes_lixo == 'Não'){ ?> checked <?php } ?> />
			<label for="r38">Não</label></p>	
		</div>
		<div class="col l2 s12" >
			<br>
			
			<label class="texto" for="condicoes_agua">7.3 Água </label>
			<p><input class="with-gap" name="condicoes_agua" type="radio" value="Na Casa"  id="r39" required <?php if($form3->condicoes_agua == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="r39">Na Casa</label></p>
			<p><input class="with-gap" name="condicoes_agua" type="radio" value="Fora da Casa"  id="r40" <?php if($form3->condicoes_agua == 'Fora da Casa'){ ?> checked <?php } ?> />
			<label for="r40">Fora da Casa</label></p>		
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_dejetos">7.4 Dejetos </label>
			<p><input class="with-gap" name="condicoes_dejetos" type="radio" value="Na Casa"  id="r41" required <?php if($form3->condicoes_dejetos == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="r41">Na Casa</label></p>
			<p><input class="with-gap" name="condicoes_dejetos" type="radio" value="Fora da Casa"  id="r42" <?php if($form3->condicoes_dejetos == 'Fora da Casa'){ ?> checked <?php } ?> />
			<label for="r42">Fora da Casa</label></p> 
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_quarto">7.5 Compartilha o Quarto </label>
			<p><input class="with-gap" name="condicoes_quarto" type="radio" value="Sim"  id="r43" required <?php if($form3->condicoes_quarto == 'Sim'){ ?> checked <?php } ?> />
			<label for="r43">Sim</label></p>
			<p><input class="with-gap" name="condicoes_quarto" type="radio" value="Não"  id="r44" <?php if($form3->condicoes_quarto == 'Não'){ ?> checked <?php } ?> />
			<label for="r44">Não</label></p>
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_cama">7.6 Compartilha a Cama </label>
			<p><input class="with-gap" name="condicoes_cama" type="radio" value="Sim"  id="r45" required <?php if($form3->condicoes_cama == 'Sim'){ ?> checked <?php } ?> />
			<label for="r45">Sim</label></p>
			<p><input class="with-gap" name="condicoes_cama" type="radio" value="Não"  id="r46" <?php if($form3->condicoes_cama == 'Não'){ ?> checked <?php } ?> />
			<label for="r46">Não</label></p> 
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_habitacao">7.7 Tipo de Habitação </label>
			<p><input class="with-gap" name="condicoes_habitacao" type="radio" value="Próprio"  id="r47" required <?php if($form3->condicoes_habitacao == 'Próprio'){ ?> checked <?php } ?> />
			<label for="r47">Próprio</label></p>
			<p><input class="with-gap" name="condicoes_habitacao" type="radio" value="Alugado"  id="r48" <?php if($form3->condicoes_habitacao == 'Alugado'){ ?> checked <?php } ?> />
			<label for="r48">Alugado</label></p> 
			<p><input class="with-gap" name="condicoes_habitacao" type="radio" value="Cessão"  id="r49" <?php if($form3->condicoes_habitacao == 'Cessão'){ ?> checked <?php } ?> />
			<label for="r49">Cessão</label></p> 
		</div>
		<div class="col l2 s12 " >
			<br>
			<label class="texto" for="condicoes_construcao">7.8 Tipo de Construção </label>
			<p><input class="with-gap" name="condicoes_construcao" type="radio" value="Tijolos"  id="r50" required <?php if($form3->condicoes_construcao == 'Tijolos'){ ?> checked <?php } ?> />
			<label for="r50">Tijolos</label></p>
			<p><input class="with-gap" name="condicoes_construcao" type="radio" value="Madeira"  id="r51" <?php if($form3->condicoes_construcao == 'Madeira'){ ?> checked <?php } ?> />
			<label for="r51">Madeira</label></p> 
			<p><input class="with-gap" name="condicoes_construcao" type="radio" value="Outros"  id="r52" <?php if($form3->condicoes_construcao == 'Outros'){ ?> checked <?php } ?> />
			<label for="r52">Outros</label></p> 
		</div>
		<div class="col l12 s12"><br></div>
		<div class="col l3 s12">
			<br>
			<label class="texto" for="condicoes_numero_quartos">7.9 Número de Quartos</label>
			<input type="number" name="condicoes_numero_quartos" min="1" required="required" value="<?php echo $form3->condicoes_numero_quartos; ?>" />
		</div>
		<div class="col l3 s12" >
			<br>
			<label class="texto" for="condicoes_numero_comodos">7.10 Número de Cômodos</label>
			<input type="number" name="condicoes_numero_comodos" min="1" required="required" value="<?php echo $form3->condicoes_numero_comodos; ?>" />
		</div>
		<div class="col l12 s12"></div>
		<div class="col s5 s12 ">
			<label class="texto" for="observacoes"><br>Observações :</label>
			<textarea class="materialize-textarea" name="observacoes" cols="30" rows="3" placeholder="Observações" required="required"><?php echo $form3->observacoes; ?></textarea> 
			<br><br>
		</div>
		<div class="col l12 s12">
			<button class="btn waves-effect waves-light blue" type="submit" name="action">Salvar</button>
			<br><br>
		</div>
	</div>
	
	
</div>