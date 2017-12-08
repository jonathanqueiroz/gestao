<?php //echo form_open('Pessoa/antecedentes/'.$id); ?>
<form action="<?php echo base_url('Pessoa/antecedentes/'.$id); ?>" method="post" name="form2" id="form2">
	<div class="form_cadastro form_box">
		<?php echo validation_errors(); ?>
		<br>
		<div class="row">
			<div class="col s12"><br><h4>1. Consulta Principal</h4></div>
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			<div class="col s12 l5  " style="margin-right: 10px"
				<label class="texto" for="motivo_adolescente">1.1 Motivos da Consulta (Segundo o Adolescente):</label>
				<textarea class="materialize-textarea" name="motivo_adolescente" cols="30" rows="3" placeholder="Motivos da Consulta (Segundo o Adolescente)" ></textarea> 
				
			</div>
			<div class="col s12 l5  " >
				<label class="texto" for="motivo_acompanhante">1.2 Motivos da Consulta (Segundo o Acompanhante):</label>
				<textarea class="materialize-textarea" name="motivo_acompanhante" cols="30" rows="3" placeholder="Motivos da Consulta (Segundo o Acompanhante)" ></textarea> 
			</div>
			<div class="col s12 l5  " style="margin-right: 10px">
				<label class="texto" for="cod_adolescente">1.3 Código(s) Motivo(s) do Adolescente (Separe por vírgulas caso exista mais de um)</label>
				<input type="text" name="cod_adolescente" placeholder="Código(s) Motivo(s) do Adolescente"  />
			</div>
			<div class="col s12 l5  " >
				<label class="texto" for="cod_acompanhante">1.4 Código(s) Motivo(s) do Acompanhante (Separe por vírgulas caso exista mais de um)</label>
				<input type="text" name="cod_acompanhante" placeholder="Código(s) Motivo(s) do Acompanhante"  /> 
			</div>
			<div class="col s12 l5  " style="margin-right: 10px">
				<br>
				<label class="texto" for="obs_motivos">Observações Importantes</label>
				<textarea class="materialize-textarea" name="obs_motivos" cols="30" rows="3" placeholder="Observações Importantes" ></textarea> 
			</div>
			<div class="col l5"></div>
			<div class="col l12"><br><h4>2. Antecedentes Pessoais</h4><br></div>	
			<div class="col l2">
				<br>
				<label class="texto" for="perinatais">2.1 Perinatais Normais</label>
				<p><input class="with-gap" name="perinatais" type="radio" value="Sim" id="r2_1"  />
				<label for="r2_1">Sim</label></p>
				<p><input class="with-gap" name="perinatais" type="radio" value="Não"  id="r2_2" />
				<label for="r2_2">Não</label></p>
				<p><input class="with-gap" name="perinatais" type="radio" value="Não Sei"  id="r2_3" />
				<label for="r2_3">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="crescimento">2.2 Crescimento Normal</label>
				<p><input class="with-gap" name="crescimento" type="radio" value="Sim"  id="r2_4"  />
				<label for="r2_4">Sim</label></p>
				<p><input class="with-gap" name="crescimento" type="radio" value="Não"  id="r2_5" />
				<label for="r2_5">Não</label></p>
				<p><input class="with-gap" name="crescimento" type="radio" value="Não Sei"  id="r2_6" />
				<label for="r2_6">Não Sei</label></p>
			</div>
			<div class="col l2" style="margin-right: 0px">
				<br>
				<label class="texto" for="vacinas">2.3 Vacinas Completas</label>
				<p><input class="with-gap" name="vacinas" type="radio" value="Sim"  id="r2_7"  />
				<label for="r2_7">Sim</label></p>
				<p><input class="with-gap" name="vacinas" type="radio" value="Não"  id="r2_8" />
				<label for="r2_8">Não</label></p>
				<p><input class="with-gap" name="vacinas" type="radio" value="Não Sei"  id="r2_9" />
				<label for="r2_9">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="cronica">2.4 Doenças Crônicas</label>
				<p><input class="with-gap" name="cronica" type="radio" value="Sim"  id="r2_10"  />
				<label for="r2_10">Sim</label></p>
				<p><input class="with-gap" name="cronica" type="radio" value="Não"  id="r2_11" />
				<label for="r2_11">Não</label></p>
				<p><input class="with-gap" name="cronica" type="radio" value="Não Sei"  id="r2_12" />
				<label for="r2_12">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="infectocontagiosas">2.5 Doenças Infectocontagiosas</label>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Sim"  id="r2_13"  />
				<label for="r2_13">Sim</label></p>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Não"  id="r2_14" />
				<label for="r2_14">Não</label></p>
				<p><input class="with-gap" name="infectocontagiosas" type="radio" value="Não Sei"  id="r2_15" />
				<label for="r2_15">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="intoxicacao">2.6 Acidentes Intoxicação</label>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Sim"  id="r2_16"  />
				<label for="r2_16">Sim</label></p>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Não"  id="r2_17" />
				<label for="r2_17">Não</label></p>
				<p><input class="with-gap" name="intoxicacao" type="radio" value="Não Sei"  id="r2_18" />
				<label for="r2_18">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="cirurgia">2.7 Cirurgia e/ou Hospitalização</label>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Sim"  id="r2_19"  />
				<label for="r2_19">Sim</label></p>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Não"  id="r2_20" />
				<label for="r2_20">Não</label></p>
				<p><input class="with-gap" name="cirurgia" type="radio" value="Não Sei"  id="r2_21" />
				<label for="r2_21">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="medicamentos">2.8 Uso de Medicamentos ou Substâncias</label>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Sim"  id="r2_22"  />
				<label for="r2_22">Sim</label></p>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Não"  id="r2_23" />
				<label for="r2_23">Não</label></p>
				<p><input class="with-gap" name="medicamentos" type="radio" value="Não Sei"  id="r2_24" />
				<label for="r2_24">Não Sei</label></p>
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="transtornos">2.9 Transtornos Psicológicos</label>
				<p><input class="with-gap" name="transtornos" type="radio" value="Sim"  id="r2_25"  />
				<label for="r2_25">Sim</label></p>
				<p><input class="with-gap" name="transtornos" type="radio" value="Não"  id="r2_26" />
				<label for="r2_26">Não</label></p>
				<p><input class="with-gap" name="transtornos" type="radio" value="Não Sei"  id="r2_27" />
				<label for="r2_27">Não Sei</label></p>
				
			</div>
			<div class="col l2 " style="margin-right: 0px">
				<br>
				<label class="texto" for="maltratos">2.10 Maltratos</label>
				<p><input class="with-gap" name="maltratos" type="radio" value="Sim"  id="r2_28"  />
				<label for="r2_28">Sim</label></p>
				<p><input class="with-gap" name="maltratos" type="radio" value="Não"  id="r2_29" />
				<label for="r2_29">Não</label></p>
				<p><input class="with-gap" name="maltratos" type="radio" value="Não Sei"  id="r2_30" />
				<label for="r2_30">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="judiciais">2.11 Judiciais</label>
				<p><input class="with-gap" name="judiciais" type="radio" value="Sim"  id="r2_31"  />
				<label for="r2_31">Sim</label></p>
				<p><input class="with-gap" name="judiciais" type="radio" value="Não"  id="r2_32" />
				<label for="r2_32">Não</label></p>
				<p><input class="with-gap" name="judiciais" type="radio" value="Não Sei"  id="r2_33" />
				<label for="r2_33">Não Sei</label></p>
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="outros_pessoais">2.12 Outros</label>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Sim"  id="r2_34"  />
				<label for="r2_34">Sim</label></p>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Não"  id="r2_35" />
				<label for="r2_35">Não</label></p>
				<p><input class="with-gap" name="outros_pessoais" type="radio" value="Não Sei"  id="r2_36" />
				<label for="r2_36">Não Sei</label></p>
				 
			</div>
			<div class="col s12"></div>
			<div class="col s12 l4 " style="margin-right: 10px">
				<br>
				<label class="texto" for="obs_pessoais">Observações:</label>	
				<textarea class="materialize-textarea" name="obs_pessoais" cols="30" rows="3" placeholder="Observações" ></textarea> 
			</div>
			<div class="col s12"><br><h4>3. Antecedentes Familiares</h4><br></div>	
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="diabetes">3.1 Diabetes</label>
				<p><input class="with-gap" name="diabetes" type="radio" value="Sim"  id="r2_37"  />
				<label for="r2_37">Sim</label></p>
				<p><input class="with-gap" name="diabetes" type="radio" value="Não"  id="r2_38" />
				<label for="r2_38">Não</label></p>
				<p><input class="with-gap" name="diabetes" type="radio" value="Não Sei"  id="r2_39" />
				<label for="r2_39">Não Sei</label></p>
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="obesidade">3.2 Obesidade</label>
				<p><input class="with-gap" name="obesidade" type="radio" value="Sim"  id="r2_40"  />
				<label for="r2_40">Sim</label></p>
				<p><input class="with-gap" name="obesidade" type="radio" value="Não"  id="r2_41" />
				<label for="r2_41">Não</label></p>
				<p><input class="with-gap" name="obesidade" type="radio" value="Não Sei"  id="r2_42" />
				<label for="r2_42">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				
				<label class="texto" for="cadiovascular">3.3 Cadiovascular</label>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Sim"  id="r2_43"  />
				<label for="r2_43">Sim</label></p>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Não"  id="r2_44" />
				<label for="r2_44">Não</label></p>
				<p><input class="with-gap" name="cadiovascular" type="radio" value="Não Sei"  id="r2_45" />
				<label for="r2_45">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				
				<label class="texto" for="alergia">3.4 Alergia</label>
				<p><input class="with-gap" name="alergia" type="radio" value="Sim"  id="r2_46"  />
				<label for="r2_46">Sim</label></p>
				<p><input class="with-gap" name="alergia" type="radio" value="Não"  id="r2_47" />
				<label for="r2_47">Não</label></p>
				<p><input class="with-gap" name="alergia" type="radio" value="Não Sei"  id="r2_48" />
				<label for="r2_48">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="infeccao">3.5 Infecções (TBC,VIH,etc)</label>
				<p><input class="with-gap" name="infeccao" type="radio" value="Sim"  id="r2_49"  />
				<label for="r2_49">Sim</label></p>
				<p><input class="with-gap" name="infeccao" type="radio" value="Não"  id="r2_50" />
				<label for="r2_50">Não</label></p>
				<p><input class="with-gap" name="infeccao" type="radio" value="Não Sei"  id="r2_51" />
				<label for="r2_51">Não Sei</label></p> 
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<label class="texto" for="infectocontagiosas_familiar">3.6 Acidentes Intoxicação</label>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Sim"  id="r2_52"  />
				<label for="r2_52">Sim</label></p>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Não"  id="r2_53" />
				<label for="r2_53">Não</label></p>
				<p><input class="with-gap" name="infectocontagiosas_familiar" type="radio" value="Não Sei"  id="r2_54" />
				<label for="r2_54">Não Sei</label></p>
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="transtornos_psicologicos">3.7 Transtornos Psicológicos</label>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Sim"  id="r2_55"  />
				<label for="r2_55">Sim</label></p>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Não"  id="r2_56" />
				<label for="r2_56">Não</label></p>
				<p><input class="with-gap" name="transtornos_psicologicos" type="radio" value="Não Sei"  id="r2_57" />
				<label for="r2_57">Não Sei</label></p>  
					
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="alcool">3.8 Álcool/Drogas</label>
				<p><input class="with-gap" name="alcool" type="radio" value="Sim"  id="r2_60"  />
				<label for="r2_60">Sim</label></p>
				<p><input class="with-gap" name="alcool" type="radio" value="Não"  id="r2_61" />
				<label for="r2_61">Não</label></p>
				<p><input class="with-gap" name="alcool" type="radio" value="Não Sei"  id="r2_62" />
				<label for="r2_62">Não Sei</label></p> 
				
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="violencia">3.9 Violência Intrafamiliar</label>
				<p><input class="with-gap" name="violencia" type="radio" value="Sim"  id="r2_63"  />
				<label for="r2_63">Sim</label></p>
				<p><input class="with-gap" name="violencia" type="radio" value="Não"  id="r2_64" />
				<label for="r2_64">Não</label></p>
				<p><input class="with-gap" name="violencia" type="radio" value="Não Sei"  id="r2_65" />
				<label for="r2_65">Não Sei</label></p> 		
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="mae_adolescente">3.10 Mãe Adolescente</label>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Sim"  id="r2_66"  />
				<label for="r2_66">Sim</label></p>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Não"  id="r2_67" />
				<label for="r2_67">Não</label></p>
				<p><input class="with-gap" name="mae_adolescente" type="radio" value="Não Sei"  id="r2_68" />
				<label for="r2_68">Não Sei</label></p>	
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="judiciais_familiar">3.11 Judiciais</label>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Sim"  id="r2_69"  />
				<label for="r2_69">Sim</label></p>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Não"  id="r2_70" />
				<label for="r2_70">Não</label></p>
				<p><input class="with-gap" name="judiciais_familiar" type="radio" value="Não Sei"  id="r2_71" />
				<label for="r2_71">Não Sei</label></p> 
				 
			</div>
			<div class="col l2  " style="margin-right: 0px">
				<br>
				<label class="texto" for="outros_familiar">3.12 Outros</label>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Sim"  id="r2_72"  />
				<label for="r2_72">Sim</label></p>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Não"  id="r2_73" />
				<label for="r2_73">Não</label></p>
				<p><input class="with-gap" name="outros_familiar" type="radio" value="Não Sei"  id="r2_74" />
				<label for="r2_74">Não Sei</label></p>	 
			</div>
			<div class="col l12"></div>
			<div class="col s12 l4 ">
				<br>
				<label class="texto" for="obs_familiar">Observações:</label>	
				<textarea class="materialize-textarea" name="obs_familiar" cols="30" rows="3" ></textarea>
				<br> 
			</div>
			<div class="col s12 ">
				 <button class="btn waves-effect waves-light blue" formaction="<?php echo base_url('Pessoa/antecedentes/'.$id);?>" type="submit" name="form2">Salvar</button>
				<br><br>
			</div>
		</div>
		<br>
	</div>
</form>
<?php //echo form_close(); ?>