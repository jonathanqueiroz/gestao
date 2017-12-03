<?php echo form_open('Pessoa/stepTwo'); ?>
	<div class="form_cadastro form_box">
		<?php echo validation_errors(); ?>
		<br>
		<div class="row">
			<div class="col s12"><br><h4>1. Consulta Principal</h4></div>
			<div class="col s5  " style="margin-right: 10px">
				<label class="texto" for="motivo_adolescente">1.1 Motivos da Consulta (Segundo o Adolescente):</label>
				<textarea class="materialize-textarea" name="motivo_adolescente" cols="30" rows="3" placeholder="Motivos da Consulta (Segundo o Adolescente)" required="required"></textarea> 
				
			</div>
			<div class="col s5  " style="margin-right: 10px">
				<label class="texto" for="motivo_acompanhante">1.2 Motivos da Consulta (Segundo o Acompanhante):</label>
				<textarea class="materialize-textarea" name="motivo_acompanhante" cols="30" rows="3" placeholder="Motivos da Consulta (Segundo o Acompanhante)" required="required"></textarea> 
			</div>
			<div class="col s5  " style="margin-right: 10px">
				<label class="texto" for="cod_adolescente">1.3 Código(s) Motivo(s) do Adolescente (Separe por vírgulas caso exista mais de um)</label>
				<input type="text" name="cod_adolescente" placeholder="Código(s) Motivo(s) do Adolescente" required="required" />
			</div>
			<div class="col s5  " style="margin-right: 10px">
				<label class="texto" for="cod_acompanhante">1.4 Código(s) Motivo(s) do Acompanhante (Separe por vírgulas caso exista mais de um)</label>
				<input type="text" name="cod_acompanhante" placeholder="Código(s) Motivo(s) do Acompanhante" required="required" /> 
			</div>
			<div class="col s5  " style="margin-right: 10px">
				<br>
				<label class="texto" for="obs_motivos">Observações Importantes</label>
				<textarea class="materialize-textarea" name="obs_motivos" cols="30" rows="3" placeholder="Observações Importantes" required="required"></textarea> 
			</div>
			<div class="col l5"></div>
			<div class="col l12"><br><h4>2. Antecedentes Pessoais</h4><br></div>	
			<div class="col l2">
				<br>
				<label class="texto" for="perinatais">2.1 Perinatais Normais</label>
				<p><input class="with-gap" name="perinatais" type="radio" value="Sim" id="r1" required />
				<label for="r1">Sim</label></p>
				<p><input class="with-gap" name="perinatais" type="radio" value="Não"  id="r2" />
				<label for="r2">Não</label></p>
				<p><input class="with-gap" name="perinatais" type="radio" value="Não Sei"  id="r3" />
				<label for="r3">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="crescimento">2.2 Crescimento Normal</label>
				<p><input class="with-gap" name="crescimento" type="radio" value="Sim"  id="r4" required />
				<label for="r4">Sim</label></p>
				<p><input class="with-gap" name="crescimento" type="radio" value="Não"  id="r5" />
				<label for="r5">Não</label></p>
				<p><input class="with-gap" name="crescimento" type="radio" value="Não Sei"  id="r6" />
				<label for="r6">Não Sei</label></p>
			</div>
			<div class="col l2" style="margin-right: 0px">
				<br>
				<label class="texto" for="vacinas">2.3 Vacinas Completas</label>
				<p><input class="with-gap" name="vacinas" type="radio" value="Sim"  id="r7" required />
				<label for="r7">Sim</label></p>
				<p><input class="with-gap" name="vacinas" type="radio" value="Não"  id="r8" />
				<label for="r8">Não</label></p>
				<p><input class="with-gap" name="vacinas" type="radio" value="Não Sei"  id="r9" />
				<label for="r9">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="cronica">2.4 Doenças Crônicas</label>
				<p><input class="with-gap" name="cronica" type="radio" value="Sim"  id="r10" required />
				<label for="r10">Sim</label></p>
				<p><input class="with-gap" name="cronica" type="radio" value="Não"  id="r11" />
				<label for="r11">Não</label></p>
				<p><input class="with-gap" name="cronica" type="radio" value="Não Sei"  id="r12" />
				<label for="r12">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="infectocontagiosas">2.5 Doenças Infectocontagiosas</label>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Sim"  id="r13" required />
				<label for="r13">Sim</label></p>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Não"  id="r14" />
				<label for="r14">Não</label></p>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Não Sei"  id="r15" />
				<label for="r15">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="intoxicacao">2.6 Acidentes Intoxicação</label>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Sim"  id="r16" required />
				<label for="r16">Sim</label></p>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Não"  id="r17" />
				<label for="r17">Não</label></p>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Não Sei"  id="r18" />
				<label for="r18">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="cirurgia">2.7 Cirurgia e/ou Hospitalização</label>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Sim"  id="r19" required />
				<label for="r19">Sim</label></p>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Não"  id="r20" />
				<label for="r20">Não</label></p>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Não Sei"  id="r21" />
				<label for="r21">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="medicamentos">2.8 Uso de Medicamentos ou Substâncias</label>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Sim"  id="r22" required />
				<label for="r22">Sim</label></p>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Não"  id="r23" />
				<label for="r23">Não</label></p>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Não Sei"  id="r24" />
				<label for="r24">Não Sei</label></p>
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="transtornos">2.9 Transtornos Psicológicos</label>
				<p><input class="with-gap" name="transtornos" type="radio" value="Sim"  id="r25" required />
				<label for="r25">Sim</label></p>
				<p><input class="with-gap" name="transtornos" type="radio" value="Não"  id="r26" />
				<label for="r26">Não</label></p>
				<p><input class="with-gap" name="transtornos" type="radio" value="Não Sei"  id="r27" />
				<label for="r27">Não Sei</label></p>
				
			</div>
			<div class="col l2 " style="margin-right: 0px">
				<br>
				<label class="texto" for="maltratos">2.10 Maltratos</label>
				<p><input class="with-gap" name="maltratos" type="radio" value="Sim"  id="r28" required />
				<label for="r28">Sim</label></p>
				<p><input class="with-gap" name="maltratos" type="radio" value="Não"  id="r29" />
				<label for="r29">Não</label></p>
				<p><input class="with-gap" name="maltratos" type="radio" value="Não Sei"  id="r30" />
				<label for="r30">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="judiciais">2.11 Judiciais</label>
				<p><input class="with-gap" name="judiciais" type="radio" value="Sim"  id="r31" required />
				<label for="r31">Sim</label></p>
				<p><input class="with-gap" name="judiciais" type="radio" value="Não"  id="r32" />
				<label for="r32">Não</label></p>
				<p><input class="with-gap" name="judiciais" type="radio" value="Não Sei"  id="r33" />
				<label for="r33">Não Sei</label></p>
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="outros_pessoais">2.12 Outros</label>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Sim"  id="r34" required />
				<label for="r34">Sim</label></p>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Não"  id="r35" />
				<label for="r35">Não</label></p>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Não Sei"  id="r36" />
				<label for="r36">Não Sei</label></p>
				 
			</div>
			<div class="col s12"></div>
			<div class="col s4 " style="margin-right: 10px">
				<br>
				<label class="texto" for="obs_pessoais">Observações:</label>	
				<textarea class="materialize-textarea" name="obs_pessoais" cols="30" rows="3" placeholder="Observações" required="required"></textarea> 
			</div>
			<div class="col s12"><br><h4>3. Antecedentes Familiares</h4><br></div>	
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="diabetes">3.1 Diabetes</label>
				<p><input class="with-gap" name="diabetes" type="radio" value="Sim"  id="r37" required />
				<label for="r37">Sim</label></p>
				<p><input class="with-gap" name="diabetes" type="radio" value="Não"  id="r38" />
				<label for="r38">Não</label></p>
				<p><input class="with-gap" name="diabetes" type="radio" value="Não Sei"  id="r39" />
				<label for="r39">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="obesidade">3.2 Obesidade</label>
				<p><input class="with-gap" name="obesidade" type="radio" value="Sim"  id="r40" required />
				<label for="r40">Sim</label></p>
				<p><input class="with-gap" name="obesidade" type="radio" value="Não"  id="r41" />
				<label for="r41">Não</label></p>
				<p><input class="with-gap" name="obesidade" type="radio" value="Não Sei"  id="r42" />
				<label for="r42">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				
				<label class="texto" for="cadiovascular">3.3 Cadiovascular</label>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Sim"  id="r43" required />
				<label for="r43">Sim</label></p>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Não"  id="r44" />
				<label for="r44">Não</label></p>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Não Sei"  id="r45" />
				<label for="r45">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				
				<label class="texto" for="alergia">3.4 Alergia</label>
				<p><input class="with-gap" name="alergia" type="radio" value="Sim"  id="r46" required />
				<label for="r46">Sim</label></p>
				<p><input class="with-gap" name="alergia" type="radio" value="Não"  id="r47" />
				<label for="r47">Não</label></p>
				<p><input class="with-gap" name="alergia" type="radio" value="Não Sei"  id="r48" />
				<label for="r48">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="infeccao">3.5 Infecções (TBC,VIH,etc)</label>
				<p><input class="with-gap" name="infeccao" type="radio" value="Sim"  id="r49" required />
				<label for="r49">Sim</label></p>
				<p><input class="with-gap" name="infeccao" type="radio" value="Não"  id="r50" />
				<label for="r50">Não</label></p>
				<p><input class="with-gap" name="infeccao" type="radio" value="Não Sei"  id="r51" />
				<label for="r51">Não Sei</label></p> 
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="infectocontagiosas_familiar">3.6 Acidentes Intoxicação</label>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Sim"  id="r52" required />
				<label for="r52">Sim</label></p>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Não"  id="r53" />
				<label for="r53">Não</label></p>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Não Sei"  id="r54" />
				<label for="r54">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="transtornos_psicologicos">3.7 Transtornos Psicológicos</label>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Sim"  id="r55" required />
				<label for="r55">Sim</label></p>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Não"  id="r56" />
				<label for="r56">Não</label></p>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Não Sei"  id="r57" />
				<label for="r57">Não Sei</label></p>  
					
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="alcool">3.8 Álcool/Drogas</label>
				<p><input class="with-gap" name="alcool" type="radio" value="Sim"  id="r60" required />
				<label for="r60">Sim</label></p>
				<p><input class="with-gap" name="alcool" type="radio" value="Não"  id="r61" />
				<label for="r61">Não</label></p>
				<p><input class="with-gap" name="alcool" type="radio" value="Não Sei"  id="r62" />
				<label for="r62">Não Sei</label></p> 
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="violencia">3.9 Violência Intrafamiliar</label>
				<p><input class="with-gap" name="violencia" type="radio" value="Sim"  id="r63" required />
				<label for="r63">Sim</label></p>
				<p><input class="with-gap" name="violencia" type="radio" value="Não"  id="r64" />
				<label for="r64">Não</label></p>
				<p><input class="with-gap" name="violencia" type="radio" value="Não Sei"  id="r65" />
				<label for="r65">Não Sei</label></p> 		
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="mae_adolescente">3.10 Mãe Adolescente</label>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Sim"  id="r66" required />
				<label for="r66">Sim</label></p>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Não"  id="r67" />
				<label for="r67">Não</label></p>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Não Sei"  id="r68" />
				<label for="r68">Não Sei</label></p>	
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="judiciais_familiar">3.11 Judiciais</label>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Sim"  id="r69" required />
				<label for="r69">Sim</label></p>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Não"  id="r70" />
				<label for="r70">Não</label></p>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Não Sei"  id="r71" />
				<label for="r71">Não Sei</label></p> 
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="outros_familiar">3.12 Outros</label>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Sim"  id="r72" required />
				<label for="r72">Sim</label></p>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Não"  id="r73" />
				<label for="r73">Não</label></p>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Não Sei"  id="r74" />
				<label for="r74">Não Sei</label></p>	 
			</div>
			<div class="col l12"></div>
			<div class="col s4 ">
				<br>
				<label class="texto" for="obs_familiar">Observações:</label>	
				<textarea class="materialize-textarea" name="obs_familiar" cols="30" rows="3" required="required"></textarea>
				<br> 
			</div>
			<div class="col s12 ">
				 <button class="btn waves-effect waves-light" type="submit" name="action">Salvar</button>
				<br><br>
			</div>
		</div>
		<br>
	</div>
<?php echo form_close(); ?>