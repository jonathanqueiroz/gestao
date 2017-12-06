<?php $atributo2 = array('id' => 'edit2', 'name' => 'form2');
	echo form_open('Pessoa/edit_antecedentes/'.$id, $atributo2); ?>
	<div class="form_cadastro form_box">
		<?php echo validation_errors();?>
		<br>
		<div class="row">
			<div class="col s12"><br><h4>1. Consulta Principal</h4></div>
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			<div class="col s5  " style="margin-right: 10px">
				<label class="texto" for="motivo_adolescente">1.1 Motivos da Consulta (Segundo o Adolescente):</label>
				<textarea class="materialize-textarea" name="motivo_adolescente" cols="30" rows="3" placeholder="Motivos da Consulta (Segundo o Adolescente)" required="required"><?php echo $form2->motivo_adolescente ?></textarea> 
				
			</div>
			<div class="col s5  " style="margin-right: 10px">
				<label class="texto" for="motivo_acompanhante">1.2 Motivos da Consulta (Segundo o Acompanhante):</label>
				<textarea class="materialize-textarea" name="motivo_acompanhante" cols="30" rows="3" placeholder="Motivos da Consulta (Segundo o Acompanhante)" required="required"><?php echo $form2->motivo_acompanhante ?></textarea> 
			</div>
			<div class="col s5  " style="margin-right: 10px">
				<label class="texto" for="cod_adolescente">1.3 Código(s) Motivo(s) do Adolescente (Separe por vírgulas caso exista mais de um)</label>
				<input type="text" name="cod_adolescente" placeholder="Código(s) Motivo(s) do Adolescente" required="required" value="<?php echo $form2->cod_adolescente; ?>" />
			</div>
			<div class="col s5" style="margin-right: 10px">
				<label class="texto" for="cod_acompanhante">1.4 Código(s) Motivo(s) do Acompanhante (Separe por vírgulas caso exista mais de um)</label>
				<input type="text" name="cod_acompanhante" placeholder="Código(s) Motivo(s) do Acompanhante" required="required" value="<?php echo $form2->cod_acompanhante; ?>" /> 
			</div>
			<div class="col s5" style="margin-right: 10px">
				<br>
				<label class="texto" for="obs_motivos">Observações Importantes</label>
				<textarea class="materialize-textarea" name="obs_motivos" cols="30" rows="3" placeholder="Observações Importantes" required="required"><?php echo $form2->obs_motivos ?></textarea> 
			</div>
			<div class="col l5"></div>
			<div class="col l12"><br><h4>2. Antecedentes Pessoais</h4><br></div>	
			<div class="col l2">
				<br>
				<label class="texto" for="perinatais">2.1 Perinatais Normais</label>
				<p><input class="with-gap" name="perinatais" type="radio" value="Sim" id="r1" <?php if($form2->perinatais == 'Sim'){ ?> checked <?php } ?> required />
				<label for="r1">Sim</label></p>
				<p><input class="with-gap" name="perinatais" type="radio" value="Não"  id="r2" <?php if($form2->perinatais == 'Não'){ ?> checked <?php } ?> />
				<label for="r2">Não</label></p>
				<p><input class="with-gap" name="perinatais" type="radio" value="Não Sei"  id="r3" <?php if($form2->perinatais == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r3">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="crescimento">2.2 Crescimento Normal</label>
				<p><input class="with-gap" name="crescimento" type="radio" value="Sim"  id="r4" required <?php if($form2->crescimento == 'Sim'){ ?> checked <?php } ?>
/>
				<label for="r4">Sim</label></p>
				<p><input class="with-gap" name="crescimento" type="radio" value="Não"  id="r5" <?php if($form2->crescimento == 'Não'){ ?> checked <?php } ?> />
				<label for="r5">Não</label></p>
				<p><input class="with-gap" name="crescimento" type="radio" value="Não Sei"  id="r6" <?php if($form2->crescimento == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r6">Não Sei</label></p>
			</div>
			<div class="col l2" style="margin-right: 0px">
				<br>
				<label class="texto" for="vacinas">2.3 Vacinas Completas</label>
				<p><input class="with-gap" name="vacinas" type="radio" value="Sim"  id="r7" required <?php if($form2->vacinas == 'Sim'){ ?> checked <?php } ?> />
				<label for="r7">Sim</label></p>
				<p><input class="with-gap" name="vacinas" type="radio" value="Não"  id="r8" <?php if($form2->vacinas == 'Não'){ ?> checked <?php } ?> />
				<label for="r8">Não</label></p>
				<p><input class="with-gap" name="vacinas" type="radio" value="Não Sei"  id="r9" <?php if($form2->vacinas == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r9">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="cronica">2.4 Doenças Crônicas</label>
				<p><input class="with-gap" name="cronica" type="radio" value="Sim"  id="r10" required <?php if($form2->cronica == 'Sim'){ ?> checked <?php } ?> />
				<label for="r10">Sim</label></p>
				<p><input class="with-gap" name="cronica" type="radio" value="Não"  id="r11" <?php if($form2->cronica == 'Não'){ ?> checked <?php } ?> />
				<label for="r11">Não</label></p>
				<p><input class="with-gap" name="cronica" type="radio" value="Não Sei"  id="r12" <?php if($form2->cronica == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r12">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="infectocontagiosas">2.5 Doenças Infectocontagiosas</label>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Sim"  id="r13" required <?php if($form2->infectocontagiosas == 'Sim'){ ?> checked <?php } ?>
 />
				<label for="r13">Sim</label></p>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Não"  id="r14" <?php if($form2->infectocontagiosas == 'Não'){ ?> checked <?php } ?> />
				<label for="r14">Não</label></p>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Não Sei"  id="r15" <?php if($form2->infectocontagiosas == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r15">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="intoxicacao">2.6 Acidentes Intoxicação</label>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Sim"  id="r16" required <?php if($form2->intoxicacao == 'Sim'){ ?> checked <?php } ?> />
				<label for="r16">Sim</label></p>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Não"  id="r17" <?php if($form2->intoxicacao == 'Não'){ ?> checked <?php } ?> />
				<label for="r17">Não</label></p>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Não Sei"  id="r18" <?php if($form2->intoxicacao == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r18">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="cirurgia">2.7 Cirurgia e/ou Hospitalização</label>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Sim"  id="r19" required <?php if($form2->cirurgia == 'Sim'){ ?> checked <?php } ?> />
				<label for="r19">Sim</label></p>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Não"  id="r20" <?php if($form2->cirurgia == 'Não'){ ?> checked <?php } ?> />
				<label for="r20">Não</label></p>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Não Sei"  id="r21" <?php if($form2->cirurgia == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r21">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="medicamentos">2.8 Uso de Medicamentos ou Substâncias</label>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Sim"  id="r22" required <?php if($form2->medicamentos == 'Sim'){ ?> checked <?php } ?> />
				<label for="r22">Sim</label></p>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Não"  id="r23" <?php if($form2->medicamentos == 'Não'){ ?> checked <?php } ?>
 />
				<label for="r23">Não</label></p>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Não Sei"  id="r24" <?php if($form2->medicamentos == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r24">Não Sei</label></p>
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="transtornos">2.9 Transtornos Psicológicos</label>
				<p><input class="with-gap" name="transtornos" type="radio" value="Sim"  id="r25" required <?php if($form2->transtornos == 'Sim'){ ?> checked <?php } ?> />
				<label for="r25">Sim</label></p>
				<p><input class="with-gap" name="transtornos" type="radio" value="Não"  id="r26" <?php if($form2->transtornos == 'Não'){ ?> checked <?php } ?> />
				<label for="r26">Não</label></p>
				<p><input class="with-gap" name="transtornos" type="radio" value="Não Sei"  id="r27" <?php if($form2->transtornos == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r27">Não Sei</label></p>
				
			</div>
			<div class="col l2 " style="margin-right: 0px">
				<br>
				<label class="texto" for="maltratos">2.10 Maltratos</label>
				<p><input class="with-gap" name="maltratos" type="radio" value="Sim"  id="r28" required <?php if($form2->maltratos == 'Sim'){ ?> checked <?php } ?> />
				<label for="r28">Sim</label></p>
				<p><input class="with-gap" name="maltratos" type="radio" value="Não"  id="r29" <?php if($form2->maltratos == 'Não'){ ?> checked <?php } ?> />
				<label for="r29">Não</label></p>
				<p><input class="with-gap" name="maltratos" type="radio" value="Não Sei"  id="r30" <?php if($form2->maltratos == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r30">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="judiciais">2.11 Judiciais</label>
				<p><input class="with-gap" name="judiciais" type="radio" value="Sim"  id="r31" required <?php if($form2->judiciais == 'Sim'){ ?> checked <?php } ?> />
				<label for="r31">Sim</label></p>
				<p><input class="with-gap" name="judiciais" type="radio" value="Não"  id="r32" <?php if($form2->judiciais == 'Não'){ ?> checked <?php } ?> />
				<label for="r32">Não</label></p>
				<p><input class="with-gap" name="judiciais" type="radio" value="Não Sei"  id="r33" <?php if($form2->judiciais == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r33">Não Sei</label></p>
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="outros_pessoais">2.12 Outros</label>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Sim"  id="r34" required <?php if($form2->outros_pessoais == 'Sim'){ ?> checked <?php } ?> />
				<label for="r34">Sim</label></p>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Não"  id="r35" <?php if($form2->outros_pessoais == 'Não'){ ?> checked <?php } ?> />
				<label for="r35">Não</label></p>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Não Sei"  id="r36" <?php if($form2->outros_pessoais == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r36">Não Sei</label></p>
				 
			</div>
			<div class="col s12"></div>
			<div class="col s4 " style="margin-right: 10px">
				<br>
				<label class="texto" for="obs_pessoais">Observações:</label>	
				<textarea class="materialize-textarea" name="obs_pessoais" cols="30" rows="3" placeholder="Observações" required="required"><?php echo $form2->obs_pessoais; ?></textarea> 
			</div>
			<div class="col s12"><br><h4>3. Antecedentes Familiares</h4><br></div>	
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="diabetes">3.1 Diabetes</label>
				<p><input class="with-gap" name="diabetes" type="radio" value="Sim"  id="r37" required <?php if($form2->diabetes == 'Sim'){ ?> checked <?php } ?> />
				<label for="r37">Sim</label></p>
				<p><input class="with-gap" name="diabetes" type="radio" value="Não"  id="r38" <?php if($form2->diabetes == 'Não'){ ?> checked <?php } ?> />
				<label for="r38">Não</label></p>
				<p><input class="with-gap" name="diabetes" type="radio" value="Não Sei"  id="r39" <?php if($form2->diabetes == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r39">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="obesidade">3.2 Obesidade</label>
				<p><input class="with-gap" name="obesidade" type="radio" value="Sim"  id="r40" required <?php if($form2->obesidade == 'Sim'){ ?> checked <?php } ?> />
				<label for="r40">Sim</label></p>
				<p><input class="with-gap" name="obesidade" type="radio" value="Não"  id="r41" <?php if($form2->obesidade == 'Não'){ ?> checked <?php } ?> />
				<label for="r41">Não</label></p>
				<p><input class="with-gap" name="obesidade" type="radio" value="Não Sei"  id="r42" <?php if($form2->obesidade == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r42">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				
				<label class="texto" for="cadiovascular">3.3 Cadiovascular</label>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Sim"  id="r43" required <?php if($form2->cadiovascular == 'Sim'){ ?> checked <?php } ?> />
				<label for="r43">Sim</label></p>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Não"  id="r44" <?php if($form2->cadiovascular == 'Não'){ ?> checked <?php } ?> />
				<label for="r44">Não</label></p>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Não Sei"  id="r45" <?php if($form2->cadiovascular == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r45">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				
				<label class="texto" for="alergia">3.4 Alergia</label>
				<p><input class="with-gap" name="alergia" type="radio" value="Sim"  id="r46" required <?php if($form2->alergia == 'Sim'){ ?> checked <?php } ?> />
				<label for="r46">Sim</label></p>
				<p><input class="with-gap" name="alergia" type="radio" value="Não"  id="r47" <?php if($form2->alergia == 'Não'){ ?> checked <?php } ?> />
				<label for="r47">Não</label></p>
				<p><input class="with-gap" name="alergia" type="radio" value="Não Sei"  id="r48" <?php if($form2->alergia == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r48">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="infeccao">3.5 Infecções (TBC,VIH,etc)</label>
				<p><input class="with-gap" name="infeccao" type="radio" value="Sim"  id="r49" required <?php if($form2->infeccao == 'Sim'){ ?> checked <?php } ?> />
				<label for="r49">Sim</label></p>
				<p><input class="with-gap" name="infeccao" type="radio" value="Não"  id="r50" <?php if($form2->infeccao == 'Não'){ ?> checked <?php } ?> />
				<label for="r50">Não</label></p>
				<p><input class="with-gap" name="infeccao" type="radio" value="Não Sei"  id="r51" <?php if($form2->infeccao == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r51">Não Sei</label></p> 
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="infectocontagiosas_familiar">3.6 Acidentes Intoxicação</label>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Sim"  id="r52" required <?php if($form2->infectocontagiosas_familiar == 'Sim'){ ?> checked <?php } ?> />
				<label for="r52">Sim</label></p>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Não"  id="r53" <?php if($form2->infectocontagiosas_familiar == 'Não'){ ?> checked <?php } ?> />
				<label for="r53">Não</label></p>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Não Sei"  id="r54" <?php if($form2->infectocontagiosas_familiar == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r54">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="transtornos_psicologicos">3.7 Transtornos Psicológicos</label>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Sim"  id="r55" required <?php if($form2->transtornos_psicologicos == 'Sim'){ ?> checked <?php } ?> />
				<label for="r55">Sim</label></p>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Não"  id="r56" <?php if($form2->transtornos_psicologicos == 'Não'){ ?> checked <?php } ?> />
				<label for="r56">Não</label></p>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Não Sei"  id="r57" <?php if($form2->transtornos_psicologicos == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r57">Não Sei</label></p>  
					
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="alcool">3.8 Álcool/Drogas</label>
				<p><input class="with-gap" name="alcool" type="radio" value="Sim"  id="r60" required <?php if($form2->alcool == 'Sim'){ ?> checked <?php } ?>
 />
				<label for="r60">Sim</label></p>
				<p><input class="with-gap" name="alcool" type="radio" value="Não"  id="r61" <?php if($form2->alcool == 'Não'){ ?> checked <?php } ?> />
				<label for="r61">Não</label></p>
				<p><input class="with-gap" name="alcool" type="radio" value="Não Sei"  id="r62" <?php if($form2->alcool == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r62">Não Sei</label></p> 
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="violencia">3.9 Violência Intrafamiliar</label>
				<p><input class="with-gap" name="violencia" type="radio" value="Sim"  id="r63" required <?php if($form2->violencia == 'Sim'){ ?> checked <?php } ?> />
				<label for="r63">Sim</label></p>
				<p><input class="with-gap" name="violencia" type="radio" value="Não"  id="r64" <?php if($form2->violencia == 'Não'){ ?> checked <?php } ?> />
				<label for="r64">Não</label></p>
				<p><input class="with-gap" name="violencia" type="radio" value="Não Sei"  id="r65" <?php if($form2->violencia == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r65">Não Sei</label></p> 		
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="mae_adolescente">3.10 Mãe Adolescente</label>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Sim"  id="r66" required <?php if($form2->mae_adolescente == 'Sim'){ ?> checked <?php } ?> />
				<label for="r66">Sim</label></p>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Não"  id="r67" <?php if($form2->mae_adolescente == 'Não'){ ?> checked <?php } ?> />
				<label for="r67">Não</label></p>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Não Sei"  id="r68" <?php if($form2->mae_adolescente == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r68">Não Sei</label></p>	
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="judiciais_familiar">3.11 Judiciais</label>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Sim"  id="r69" required <?php if($form2->judiciais_familiar == 'Sim'){ ?> checked <?php } ?> />
				<label for="r69">Sim</label></p>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Não"  id="r70" <?php if($form2->judiciais_familiar == 'Não'){ ?> checked <?php } ?>
 />
				<label for="r70">Não</label></p>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Não Sei"  id="r71" <?php if($form2->judiciais_familiar == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r71">Não Sei</label></p> 
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="outros_familiar">3.12 Outros</label>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Sim"  id="r72" required <?php if($form2->outros_familiar == 'Sim'){ ?> checked <?php } ?> />
				<label for="r72">Sim</label></p>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Não"  id="r73" <?php if($form2->outros_familiar == 'Não'){ ?> checked <?php } ?> />
				<label for="r73">Não</label></p>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Não Sei"  id="r74" <?php if($form2->outros_familiar == 'Não Sei'){ ?> checked <?php } ?> />
				<label for="r74">Não Sei</label></p>	 
			</div>
			<div class="col l12"></div>
			<div class="col s4 ">
				<br>
				<label class="texto" for="obs_familiar">Observações:</label>	
				<textarea class="materialize-textarea" name="obs_familiar" cols="30" rows="3" required="required"><?php echo $form2->obs_familiar; ?></textarea>
				<br> 
			</div>
			<div class="col s12 ">
				 <button class="btn waves-effect waves-light blue" type="submit" name="edit2">Salvar</button>
				<br><br>
			</div>
		</div>
		<br>
	</div>
<?php echo form_close(); ?>