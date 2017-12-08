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
			<p><input class="with-gap" name="convive_mae" type="radio" value="Não" id="e3_1" required <?php if($form3->convive_mae == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_1">Não</label></p>
			<p><input class="with-gap" name="convive_mae" type="radio" value="Na Casa"  id="e3_2" <?php if($form3->convive_mae == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="e3_2">Na Casa</label></p>
			<p><input class="with-gap" name="convive_mae" type="radio" value="No Quarto"  id="e3_3" <?php if($form3->convive_mae == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="e3_3">No Quarto</label></p>
			<br>
		</div>
		<div class="col s12 l2 " >
			<label class="texto" for="convive_pai">1.2 Pai </label>
			<p><input class="with-gap" name="convive_pai" type="radio" value="Não" id="e3_4" required <?php if($form3->convive_pai == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_4">Não</label></p>
			<p><input class="with-gap" name="convive_pai" type="radio" value="Na Casa"  id="e3_5" <?php if($form3->convive_pai == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="e3_5">Na Casa</label></p>
			<p><input class="with-gap" name="convive_pai" type="radio" value="No Quarto"  id="e3_6" <?php if($form3->convive_pai == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="e3_6">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_madrasta">1.3 Madrasta </label>
			<p><input class="with-gap" name="convive_madrasta" type="radio" value="Não" id="e3_7" required <?php if($form3->convive_madrasta == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_7">Não</label></p>
			<p><input class="with-gap" name="convive_madrasta" type="radio" value="Na Casa"  id="e3_8" <?php if($form3->convive_madrasta == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="e3_8">Na Casa</label></p>
			<p><input class="with-gap" name="convive_madrasta" type="radio" value="No Quarto"  id="e3_9" <?php if($form3->convive_madrasta == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="e3_9">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_padrastro">1.4 Padrasto </label>
			<p><input class="with-gap" name="convive_padrastro" type="radio" value="Não" id="e3_10" required <?php if($form3->convive_padrastro == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_10">Não</label></p>
			<p><input class="with-gap" name="convive_padrastro" type="radio" value="Na Casa"  id="e3_11" <?php if($form3->convive_padrastro == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="e3_11">Na Casa</label></p>
			<p><input class="with-gap" name="convive_padrastro" type="radio" value="No Quarto"  id="e3_12" <?php if($form3->convive_padrastro == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="e3_12">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_irmao">1.5 Irmão(ã)(s) </label>
			<p><input class="with-gap" name="convive_irmao" type="radio" value="Não" id="e3_13" required <?php if($form3->convive_irmao == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_13">Não</label></p>
			<p><input class="with-gap" name="convive_irmao" type="radio" value="Na Casa"  id="e3_14" <?php if($form3->convive_irmao == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="e3_14">Na Casa</label></p>
			<p><input class="with-gap" name="convive_irmao" type="radio" value="No Quarto"  id="e3_15" <?php if($form3->convive_irmao == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="e3_15">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_filho">1.6 Filho(s)</label>
			<p><input class="with-gap" name="convive_filho" type="radio" value="Não" id="e3_16" required <?php if($form3->convive_filho == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_16">Não</label></p>
			<p><input class="with-gap" name="convive_filho" type="radio" value="Na Casa"  id="e3_17" <?php if($form3->convive_filho == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="e3_17">Na Casa</label></p>
			<p><input class="with-gap" name="convive_filho" type="radio" value="No Quarto"  id="e3_18" <?php if($form3->convive_filho == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="e3_18">No Quarto</label></p>
			<br>
		</div>
		<div class="col l12 s12"><br></div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_companheiro">1.7 Companheiro(a) </label>
			<p><input class="with-gap" name="convive_companheiro" type="radio" value="Não" id="e3_19" required <?php if($form3->convive_companheiro == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_19">Não</label></p>
			<p><input class="with-gap" name="convive_companheiro" type="radio" value="Na Casa"  id="e3_20" <?php if($form3->convive_companheiro == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="e3_20">Na Casa</label></p>
			<p><input class="with-gap" name="convive_companheiro" type="radio" value="No Quarto"  id="e3_21" <?php if($form3->convive_companheiro == 'No Quarto'){ ?> checked <?php } ?>/>
			<label for="e3_21">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >		
			<label class="texto" for="convive_outros">1.8 Outros </label>
			<p><input class="with-gap" name="convive_outros" type="radio" value="Não" id="e3_22" required <?php if($form3->convive_outros == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_22">Não</label></p>
			<p><input class="with-gap" name="convive_outros" type="radio" value="Na Casa"  id="e3_23" <?php if($form3->convive_outros == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="e3_23">Na Casa</label></p>
			<p><input class="with-gap" name="convive_outros" type="radio" value="No Quarto"  id="e3_24" <?php if($form3->convive_outros == 'No Quarto'){ ?> checked <?php } ?> />
			<label for="e3_24">No Quarto</label></p>
			<br>
		</div>
		<div class="col l12 s12 texto"><br>2. Vive: <br></div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="vive_instituicao">2.1 Em instituição </label>
			<p><input class="with-gap" name="vive_instituicao" type="radio" value="Sim" id="e3_25" required <?php if($form3->vive_instituicao == 'Sim'){ ?> checked <?php } ?> />
			<label for="e3_25">Sim</label></p>
			<p><input class="with-gap" name="vive_instituicao" type="radio" value="Não"  id="e3_26" <?php if($form3->vive_instituicao == 'Não'){ ?> checked <?php } ?>/>
			<label for="e3_26">Não</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="vive_rua">2.2 Na rua </label>
			<p><input class="with-gap" name="vive_rua" type="radio" value="Sim" id="e3_27" required <?php if($form3->vive_rua == 'Sim'){ ?> checked <?php } ?> />
			<label for="e3_27">Sim</label></p>
			<p><input class="with-gap" name="vive_rua" type="radio" value="Não"  id="e3_28" <?php if($form3->vive_rua == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_28">Não</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="vive_sozinho">2.3 Sozinho </label>
			<p><input class="with-gap" name="vive_sozinho" type="radio" value="Sim" id="e3_29" required <?php if($form3->vive_sozinho == 'Sim'){ ?> checked <?php } ?> />
			<label for="e3_29">Sim</label></p>
			<p><input class="with-gap" name="vive_sozinho" type="radio" value="Não"  id="e3_30" <?php if($form3->vive_sozinho == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_30">Não</label></p>
			<br>
		</div>

		<!-- -->
		<div class="col l12 s12 texto"><br>3. Nível de instrução <br></div>
		<div class="col l4 " style="margin-right: 10px">
			<br>
			<label class="texto" for="instrucao_pai">3.1 Pai ou Substituto:</label>
			<select name="instrucao_pai" id="S3_1" required="required">
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
			<select name="instrucao_mae" id="S3_2" required="required">
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
			<select name="tipo_trabalho_pai" id="S3_3" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Nenhum" <?php if ($form3->tipo_trabalho_pai == 'Nenhum'){ ?> selected="selected" <?php } ?> >Nenhum</option>
					<option value="Não Estável" <?php if ($form3->tipo_trabalho_pai == 'Não Estável'){ ?> selected="selected" <?php } ?> >Não Estável</option>
					<option value="Estável" <?php if ($form3->tipo_trabalho_pai == 'Estável'){ ?> selected="selected" <?php } ?> >Estável</option>
			</select>	
		</div>
		<div class="col l4 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="tipo_trabalho_mae">4.2 Mãe ou Substituta:</label>
			<select name="tipo_trabalho_mae" id="S3_4" required="required">
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
			<p><input class="with-gap" name="percepcao" type="radio" value="Boa"  id="e3_31" required <?php if($form3->percepcao == 'Boa'){ ?> checked <?php } ?> />
			<label for="e3_31">Boa</label></p>
			<p><input class="with-gap" name="percepcao" type="radio" value="Regular"  id="e3_32" <?php if($form3->percepcao == 'Regular'){ ?> checked <?php } ?> />
			<label for="e3_32">Regular</label></p>
			<p><input class="with-gap" name="percepcao" type="radio" value="Ruim"  id="e3_33" <?php if($form3->percepcao == 'Ruim'){ ?> checked <?php } ?> />
			<label for="e3_33">Ruim</label></p>
			<p><input class="with-gap" name="percepcao" type="radio" value="Não Há"  id="e3_34" <?php if($form3->percepcao == 'Não Há'){ ?> checked <?php } ?> />
			<label for="e3_34">Não Há</label></p>    	
		</div>
		<div class="col l12 s12 texto"><br>7. Condições de Moradia <br></div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_energia">7.1 Energia Elétrica </label>
			<p><input class="with-gap" name="condicoes_energia" type="radio" value="Sim"  id="e3_35" required <?php if($form3->condicoes_energia == 'Sim'){ ?> checked <?php } ?> />
			<label for="e3_35">Sim</label></p>
			<p><input class="with-gap" name="condicoes_energia" type="radio" value="Não"  id="e3_36" <?php if($form3->condicoes_energia == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_36">Não</label></p>			
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_lixo">7.2 Coleta de Lixo </label>
			<p><input class="with-gap" name="condicoes_lixo" type="radio" value="Sim"  id="e3_37" required <?php if($form3->condicoes_lixo == 'Sim'){ ?> checked <?php } ?> />
			<label for="e3_37">Sim</label></p>
			<p><input class="with-gap" name="condicoes_lixo" type="radio" value="Não"  id="e3_38" <?php if($form3->condicoes_lixo == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_38">Não</label></p>	
		</div>
		<div class="col l2 s12" >
			<br>
			
			<label class="texto" for="condicoes_agua">7.3 Água </label>
			<p><input class="with-gap" name="condicoes_agua" type="radio" value="Na Casa"  id="e3_39" required <?php if($form3->condicoes_agua == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="e3_39">Na Casa</label></p>
			<p><input class="with-gap" name="condicoes_agua" type="radio" value="Fora da Casa"  id="e3_40" <?php if($form3->condicoes_agua == 'Fora da Casa'){ ?> checked <?php } ?> />
			<label for="e3_40">Fora da Casa</label></p>		
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_dejetos">7.4 Dejetos </label>
			<p><input class="with-gap" name="condicoes_dejetos" type="radio" value="Na Casa"  id="e3_41" required <?php if($form3->condicoes_dejetos == 'Na Casa'){ ?> checked <?php } ?> />
			<label for="e3_41">Na Casa</label></p>
			<p><input class="with-gap" name="condicoes_dejetos" type="radio" value="Fora da Casa"  id="e3_42" <?php if($form3->condicoes_dejetos == 'Fora da Casa'){ ?> checked <?php } ?> />
			<label for="e3_42">Fora da Casa</label></p> 
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_quarto">7.5 Compartilha o Quarto </label>
			<p><input class="with-gap" name="condicoes_quarto" type="radio" value="Sim"  id="e3_43" required <?php if($form3->condicoes_quarto == 'Sim'){ ?> checked <?php } ?> />
			<label for="e3_43">Sim</label></p>
			<p><input class="with-gap" name="condicoes_quarto" type="radio" value="Não"  id="e3_44" <?php if($form3->condicoes_quarto == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_44">Não</label></p>
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_cama">7.6 Compartilha a Cama </label>
			<p><input class="with-gap" name="condicoes_cama" type="radio" value="Sim"  id="e3_45" required <?php if($form3->condicoes_cama == 'Sim'){ ?> checked <?php } ?> />
			<label for="e3_45">Sim</label></p>
			<p><input class="with-gap" name="condicoes_cama" type="radio" value="Não"  id="e3_46" <?php if($form3->condicoes_cama == 'Não'){ ?> checked <?php } ?> />
			<label for="e3_46">Não</label></p> 
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_habitacao">7.7 Tipo de Habitação </label>
			<p><input class="with-gap" name="condicoes_habitacao" type="radio" value="Próprio"  id="e3_47" required <?php if($form3->condicoes_habitacao == 'Próprio'){ ?> checked <?php } ?> />
			<label for="e3_47">Próprio</label></p>
			<p><input class="with-gap" name="condicoes_habitacao" type="radio" value="Alugado"  id="e3_48" <?php if($form3->condicoes_habitacao == 'Alugado'){ ?> checked <?php } ?> />
			<label for="e3_48">Alugado</label></p> 
			<p><input class="with-gap" name="condicoes_habitacao" type="radio" value="Cessão"  id="e3_49" <?php if($form3->condicoes_habitacao == 'Cessão'){ ?> checked <?php } ?> />
			<label for="e3_49">Cessão</label></p> 
		</div>
		<div class="col l2 s12 " >
			<br>
			<label class="texto" for="condicoes_construcao">7.8 Tipo de Construção </label>
			<p><input class="with-gap" name="condicoes_construcao" type="radio" value="Tijolos"  id="e3_50" required <?php if($form3->condicoes_construcao == 'Tijolos'){ ?> checked <?php } ?> />
			<label for="e3_50">Tijolos</label></p>
			<p><input class="with-gap" name="condicoes_construcao" type="radio" value="Madeira"  id="e3_51" <?php if($form3->condicoes_construcao == 'Madeira'){ ?> checked <?php } ?> />
			<label for="e3_51">Madeira</label></p> 
			<p><input class="with-gap" name="condicoes_construcao" type="radio" value="Outros"  id="e3_52" <?php if($form3->condicoes_construcao == 'Outros'){ ?> checked <?php } ?> />
			<label for="e3_52">Outros</label></p> 
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
		<div class="col s12 l6 ">
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
</form>