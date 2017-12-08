<?php $atributo2 = array('id' => 'edit2', 'name' => 'form2');
	echo form_open('Pessoa/edit_antecedentes/'.$id, $atributo2); ?>
	<div class="form_cadastro form_box">
		<?php echo validation_errors();?>
		<br>
		<div class="row">
			<div class="col s12"><br><h4>1. Consulta Principal</h4></div>
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			<div class="col s12 l5  " style="margin-right: 10px">
				<label class="texto" for="motivo_adolescente">1.1 Motivos da Consulta (Segundo o Adolescente):</label>
				<textarea class="materialize-textarea" name="motivo_adolescente" cols="30" rows="3" placeholder="Motivos da Consulta (Segundo o Adolescente)" required="required"><?php echo $form2->motivo_adolescente ?></textarea> 
				
			</div>
			<div class="col s12 l5  " style="margin-right: 10px">
				<label class="texto" for="motivo_acompanhante">1.2 Motivos da Consulta (Segundo o Acompanhante):</label>
				<textarea class="materialize-textarea" name="motivo_acompanhante" cols="30" rows="3" placeholder="Motivos da Consulta (Segundo o Acompanhante)" required="required"><?php echo $form2->motivo_acompanhante ?></textarea> 
			</div>
			<div class="col s12 l5  " style="margin-right: 10px">
				<label class="texto" for="cod_adolescente">1.3 Código(s) Motivo(s) do Adolescente (Separe por vírgulas caso exista mais de um)</label>
				<input type="text" name="cod_adolescente" placeholder="Código(s) Motivo(s) do Adolescente" required="required" value="<?php echo $form2->cod_adolescente; ?>" />
			</div>
			<div class="col s12 l5" style="margin-right: 10px">
				<label class="texto" for="cod_acompanhante">1.4 Código(s) Motivo(s) do Acompanhante (Separe por vírgulas caso exista mais de um)</label>
				<input type="text" name="cod_acompanhante" placeholder="Código(s) Motivo(s) do Acompanhante" required="required" value="<?php echo $form2->cod_acompanhante; ?>" /> 
			</div>
			<div class="col s12 l5" style="margin-right: 10px">
				<br>
				<label class="texto" for="obs_motivos">Observações Importantes</label>
				<textarea class="materialize-textarea" name="obs_motivos" cols="30" rows="3" placeholder="Observações Importantes" required="required"><?php echo $form2->obs_motivos ?></textarea> 
			</div>
			<div class="col l5"></div>
			<div class="col l12"><br><h4>2. Antecedentes Pessoais</h4><br></div>	
			<div class="col l2">
				<br>
				<label class="texto" for="perinatais">2.1 Perinatais Normais</label>
				<p><input class="with-gap" name="perinatais" type="radio" value="Sim" id="e2_1" <?php if($form2->perinatais == 'Sim'){ ?> checked <?php } ?> required />
				<label for="e2_1">Sim</label></p>
				<p><input class="with-gap" name="perinatais" type="radio" value="Não"  id="e2_2" <?php if($form2->perinatais == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_2">Não</label></p>
				<p><input class="with-gap" name="perinatais" type="radio" value="Não Sei"  id="e2_3" <?php if($form2->perinatais == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_3">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="crescimento">2.2 Crescimento Normal</label>
				<p><input class="with-gap" name="crescimento" type="radio" value="Sim"  id="e2_4" required <?php if($form2->crescimento == 'Sim'){ ?> checked <?php } ?>
/>
				<label for="e2_4">Sim</label></p>
				<p><input class="with-gap" name="crescimento" type="radio" value="Não"  id="e2_5" <?php if($form2->crescimento == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_5">Não</label></p>
				<p><input class="with-gap" name="crescimento" type="radio" value="Não Sei"  id="e2_6" <?php if($form2->crescimento == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_6">Não Sei</label></p>
			</div>
			<div class="col l2" style="margin-right: 0px">
				<br>
				<label class="texto" for="vacinas">2.3 Vacinas Completas</label>
				<p><input class="with-gap" name="vacinas" type="radio" value="Sim"  id="e2_7" required <?php if($form2->vacinas == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_7">Sim</label></p>
				<p><input class="with-gap" name="vacinas" type="radio" value="Não"  id="e2_8" <?php if($form2->vacinas == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_8">Não</label></p>
				<p><input class="with-gap" name="vacinas" type="radio" value="Não Sei"  id="e2_9" <?php if($form2->vacinas == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_9">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="cronica">2.4 Doenças Crônicas</label>
				<p><input class="with-gap" name="cronica" type="radio" value="Sim"  id="e2_10" required <?php if($form2->cronica == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_10">Sim</label></p>
				<p><input class="with-gap" name="cronica" type="radio" value="Não"  id="e2_11" <?php if($form2->cronica == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_11">Não</label></p>
				<p><input class="with-gap" name="cronica" type="radio" value="Não Sei"  id="e2_12" <?php if($form2->cronica == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_12">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="infectocontagiosas">2.5 Doenças Infectocontagiosas</label>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Sim"  id="e2_13" required <?php if($form2->infectocontagiosas == 'Sim'){ ?> checked <?php } ?>
 />
				<label for="e2_13">Sim</label></p>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Não"  id="e2_14" <?php if($form2->infectocontagiosas == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_14">Não</label></p>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Não Sei"  id="e2_15" <?php if($form2->infectocontagiosas == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_15">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="intoxicacao">2.6 Acidentes Intoxicação</label>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Sim"  id="e2_16" required <?php if($form2->intoxicacao == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_16">Sim</label></p>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Não"  id="e2_17" <?php if($form2->intoxicacao == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_17">Não</label></p>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Não Sei"  id="e2_18" <?php if($form2->intoxicacao == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_18">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="cirurgia">2.7 Cirurgia e/ou Hospitalização</label>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Sim"  id="e2_19" required <?php if($form2->cirurgia == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_19">Sim</label></p>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Não"  id="e2_20" <?php if($form2->cirurgia == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_20">Não</label></p>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Não Sei"  id="e2_21" <?php if($form2->cirurgia == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_21">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="medicamentos">2.8 Uso de Medicamentos ou Substâncias</label>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Sim"  id="e2_22" required <?php if($form2->medicamentos == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_22">Sim</label></p>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Não"  id="e2_23" <?php if($form2->medicamentos == 'Não'){ ?> checked <?php } ?>
 />
				<label for="e2_23">Não</label></p>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Não Sei"  id="e2_24" <?php if($form2->medicamentos == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_24">Não Sei</label></p>
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="transtornos">2.9 Transtornos Psicológicos</label>
				<p><input class="with-gap" name="transtornos" type="radio" value="Sim"  id="e2_25" required <?php if($form2->transtornos == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_25">Sim</label></p>
				<p><input class="with-gap" name="transtornos" type="radio" value="Não"  id="e2_26" <?php if($form2->transtornos == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_26">Não</label></p>
				<p><input class="with-gap" name="transtornos" type="radio" value="Não Sei"  id="e2_27" <?php if($form2->transtornos == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_27">Não Sei</label></p>
				
			</div>
			<div class="col l2 " style="margin-right: 0px">
				<br>
				<label class="texto" for="maltratos">2.10 Maltratos</label>
				<p><input class="with-gap" name="maltratos" type="radio" value="Sim"  id="e2_28" required <?php if($form2->maltratos == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_28">Sim</label></p>
				<p><input class="with-gap" name="maltratos" type="radio" value="Não"  id="e2_29" <?php if($form2->maltratos == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_29">Não</label></p>
				<p><input class="with-gap" name="maltratos" type="radio" value="Não Sei"  id="e2_30" <?php if($form2->maltratos == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_30">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="judiciais">2.11 Judiciais</label>
				<p><input class="with-gap" name="judiciais" type="radio" value="Sim"  id="e2_31" required <?php if($form2->judiciais == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_31">Sim</label></p>
				<p><input class="with-gap" name="judiciais" type="radio" value="Não"  id="e2_32" <?php if($form2->judiciais == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_32">Não</label></p>
				<p><input class="with-gap" name="judiciais" type="radio" value="Não Sei"  id="e2_33" <?php if($form2->judiciais == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_33">Não Sei</label></p>
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="outros_pessoais">2.12 Outros</label>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Sim"  id="e2_34" required <?php if($form2->outros_pessoais == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_34">Sim</label></p>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Não"  id="e2_35" <?php if($form2->outros_pessoais == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_35">Não</label></p>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Não Sei"  id="e2_36" <?php if($form2->outros_pessoais == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_36">Não Sei</label></p>
				 
			</div>
			<div class="col s12"></div>
			<div class="col s12 l4 " style="margin-right: 10px">
				<br>
				<label class="texto" for="obs_pessoais">Observações:</label>	
				<textarea class="materialize-textarea" name="obs_pessoais" cols="30" rows="3" placeholder="Observações" required="required"><?php echo $form2->obs_pessoais; ?></textarea> 
			</div>
			<div class="col s12"><br><h4>3. Antecedentes Familiares</h4><br></div>	
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="diabetes">3.1 Diabetes</label>
				<p><input class="with-gap" name="diabetes" type="radio" value="Sim"  id="e2_37" required <?php if($form2->diabetes == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_37">Sim</label></p>
				<p><input class="with-gap" name="diabetes" type="radio" value="Não"  id="e2_38" <?php if($form2->diabetes == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_38">Não</label></p>
				<p><input class="with-gap" name="diabetes" type="radio" value="Não Sei"  id="e2_39" <?php if($form2->diabetes == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_39">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="obesidade">3.2 Obesidade</label>
				<p><input class="with-gap" name="obesidade" type="radio" value="Sim"  id="e2_40" required <?php if($form2->obesidade == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_40">Sim</label></p>
				<p><input class="with-gap" name="obesidade" type="radio" value="Não"  id="e2_41" <?php if($form2->obesidade == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_41">Não</label></p>
				<p><input class="with-gap" name="obesidade" type="radio" value="Não Sei"  id="e2_42" <?php if($form2->obesidade == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_42">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				
				<label class="texto" for="cadiovascular">3.3 Cadiovascular</label>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Sim"  id="e2_43" required <?php if($form2->cadiovascular == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_43">Sim</label></p>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Não"  id="e2_44" <?php if($form2->cadiovascular == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_44">Não</label></p>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Não Sei"  id="e2_45" <?php if($form2->cadiovascular == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_45">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				
				<label class="texto" for="alergia">3.4 Alergia</label>
				<p><input class="with-gap" name="alergia" type="radio" value="Sim"  id="e2_46" required <?php if($form2->alergia == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_46">Sim</label></p>
				<p><input class="with-gap" name="alergia" type="radio" value="Não"  id="e2_47" <?php if($form2->alergia == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_47">Não</label></p>
				<p><input class="with-gap" name="alergia" type="radio" value="Não Sei"  id="e2_48" <?php if($form2->alergia == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_48">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="infeccao">3.5 Infecções (TBC,VIH,etc)</label>
				<p><input class="with-gap" name="infeccao" type="radio" value="Sim"  id="e2_49" required <?php if($form2->infeccao == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_49">Sim</label></p>
				<p><input class="with-gap" name="infeccao" type="radio" value="Não"  id="e2_50" <?php if($form2->infeccao == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_50">Não</label></p>
				<p><input class="with-gap" name="infeccao" type="radio" value="Não Sei"  id="e2_51" <?php if($form2->infeccao == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_51">Não Sei</label></p> 
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="infectocontagiosas_familiar">3.6 Acidentes Intoxicação</label>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Sim"  id="e2_52" required <?php if($form2->infectocontagiosas_familiar == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_52">Sim</label></p>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Não"  id="e2_53" <?php if($form2->infectocontagiosas_familiar == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_53">Não</label></p>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Não Sei"  id="e2_54" <?php if($form2->infectocontagiosas_familiar == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_54">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="transtornos_psicologicos">3.7 Transtornos Psicológicos</label>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Sim"  id="e2_55" required <?php if($form2->transtornos_psicologicos == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_55">Sim</label></p>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Não"  id="e2_56" <?php if($form2->transtornos_psicologicos == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_56">Não</label></p>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Não Sei"  id="e2_57" <?php if($form2->transtornos_psicologicos == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_57">Não Sei</label></p>  
					
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="alcool">3.8 Álcool/Drogas</label>
				<p><input class="with-gap" name="alcool" type="radio" value="Sim"  id="e2_60" required <?php if($form2->alcool == 'Sim'){ ?> checked <?php } ?>
 />
				<label for="e2_60">Sim</label></p>
				<p><input class="with-gap" name="alcool" type="radio" value="Não"  id="e2_61" <?php if($form2->alcool == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_61">Não</label></p>
				<p><input class="with-gap" name="alcool" type="radio" value="Não Sei"  id="e2_62" <?php if($form2->alcool == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_62">Não Sei</label></p> 
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="violencia">3.9 Violência Intrafamiliar</label>
				<p><input class="with-gap" name="violencia" type="radio" value="Sim"  id="e2_63" required <?php if($form2->violencia == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_63">Sim</label></p>
				<p><input class="with-gap" name="violencia" type="radio" value="Não"  id="e2_64" <?php if($form2->violencia == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_64">Não</label></p>
				<p><input class="with-gap" name="violencia" type="radio" value="Não Sei"  id="e2_65" <?php if($form2->violencia == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_65">Não Sei</label></p> 		
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="mae_adolescente">3.10 Mãe Adolescente</label>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Sim"  id="e2_66" required <?php if($form2->mae_adolescente == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_66">Sim</label></p>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Não"  id="e2_67" <?php if($form2->mae_adolescente == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_67">Não</label></p>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Não Sei"  id="e2_68" <?php if($form2->mae_adolescente == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_68">Não Sei</label></p>	
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="judiciais_familiar">3.11 Judiciais</label>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Sim"  id="e2_69" required <?php if($form2->judiciais_familiar == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_69">Sim</label></p>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Não"  id="e2_70" <?php if($form2->judiciais_familiar == 'Não'){ ?> checked <?php } ?>
 />
				<label for="e2_70">Não</label></p>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Não Sei"  id="e2_71" <?php if($form2->judiciais_familiar == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_71">Não Sei</label></p> 
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="outros_familiar">3.12 Outros</label>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Sim"  id="e2_72" required <?php if($form2->outros_familiar == 'Sim'){ ?> checked <?php } ?> />
				<label for="e2_72">Sim</label></p>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Não"  id="e2_73" <?php if($form2->outros_familiar == 'Não'){ ?> checked <?php } ?> />
				<label for="e2_73">Não</label></p>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Não Sei"  id="e2_74" <?php if($form2->outros_familiar == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="e2_74">Não Sei</label></p>	 
			</div>
			<div class="col l12"></div>
			<div class="col s12 l4 ">
				<br>
				<label class="texto" for="obs_familiar">Observações:</label>	
				<textarea class="materialize-textarea" name="obs_familiar" cols="30" rows="3" required="required"><?php echo $form2->obs_familiar; ?></textarea>
				<br> 
			</div>
			<div class="col s12 ">
				 <button class="btn waves-effect waves-light blue" type="submit" name="edit2" formaction="<?php echo base_url('Pessoa/edit_antecedentes/'.$id);?>">Salvar</button>
				<br><br>
			</div>
		</div>
		<br>
	</div>
<?php echo form_close(); ?>