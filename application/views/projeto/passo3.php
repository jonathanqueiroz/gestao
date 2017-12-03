<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php echo form_open('Pessoa/stepThree'); ?>
<?php echo validation_errors(); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Situação Familiar</h4><br></div>
		<div class="col l12 texto">1. Convive com: <br><br></div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_pai">1.1 Mãe </label>
			<p><input class="with-gap" name="convive_mae" type="radio" value="Não" id="r1" required />
			<label for="r1">Não</label></p>
			<p><input class="with-gap" name="convive_mae" type="radio" value="Na Casa"  id="r2" />
			<label for="r2">Na Casa</label></p>
			<p><input class="with-gap" name="convive_mae" type="radio" value="No Quarto"  id="r3" />
			<label for="r3">No Quarto</label></p>
			<br>
		</div>
		<div class="col s12 l2 " >
			<label class="texto" for="convive_pai">1.2 Pai </label>
			<p><input class="with-gap" name="convive_pai" type="radio" value="Não" id="r4" required />
			<label for="r4">Não</label></p>
			<p><input class="with-gap" name="convive_pai" type="radio" value="Na Casa"  id="r5" />
			<label for="r5">Na Casa</label></p>
			<p><input class="with-gap" name="convive_pai" type="radio" value="No Quarto"  id="r6" />
			<label for="r6">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_madrasta">1.3 Madrasta </label>
			<p><input class="with-gap" name="convive_madrasta" type="radio" value="Não" id="r7" required />
			<label for="r7">Não</label></p>
			<p><input class="with-gap" name="convive_madrasta" type="radio" value="Na Casa"  id="r8" />
			<label for="r8">Na Casa</label></p>
			<p><input class="with-gap" name="convive_madrasta" type="radio" value="No Quarto"  id="r9" />
			<label for="r9">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_padrastro">1.4 Padrasto </label>
			<p><input class="with-gap" name="convive_padrastro" type="radio" value="Não" id="r10" required />
			<label for="r10">Não</label></p>
			<p><input class="with-gap" name="convive_padrastro" type="radio" value="Na Casa"  id="r11" />
			<label for="r11">Na Casa</label></p>
			<p><input class="with-gap" name="convive_padrastro" type="radio" value="No Quarto"  id="r12" />
			<label for="r12">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_irmao">1.5 Irmão(ã)(s) </label>
			<p><input class="with-gap" name="convive_irmao" type="radio" value="Não" id="r13" required />
			<label for="r13">Não</label></p>
			<p><input class="with-gap" name="convive_irmao" type="radio" value="Na Casa"  id="r14" />
			<label for="r14">Na Casa</label></p>
			<p><input class="with-gap" name="convive_irmao" type="radio" value="No Quarto"  id="r15" />
			<label for="r15">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_filho">1.6 Filho(s)</label>
			<p><input class="with-gap" name="convive_filho" type="radio" value="Não" id="r16" required />
			<label for="r16">Não</label></p>
			<p><input class="with-gap" name="convive_filho" type="radio" value="Na Casa"  id="r17" />
			<label for="r17">Na Casa</label></p>
			<p><input class="with-gap" name="convive_filho" type="radio" value="No Quarto"  id="r18" />
			<label for="r18">No Quarto</label></p>
			<br>
		</div>
		<div class="col l12 s12"><br></div>
		<div class="col l2 s12" >
			<label class="texto" for="convive_companheiro">1.7 Companheiro(a) </label>
			<p><input class="with-gap" name="convive_companheiro" type="radio" value="Não" id="r19" required />
			<label for="r19">Não</label></p>
			<p><input class="with-gap" name="convive_companheiro" type="radio" value="Na Casa"  id="r20" />
			<label for="r20">Na Casa</label></p>
			<p><input class="with-gap" name="convive_companheiro" type="radio" value="No Quarto"  id="r21" />
			<label for="r21">No Quarto</label></p>
			<br>
		</div>
		<div class="col l2 s12" >		
			<label class="texto" for="convive_outros">1.8 Outros </label>
			<p><input class="with-gap" name="convive_outros" type="radio" value="Não" id="r22" required />
			<label for="r22">Não</label></p>
			<p><input class="with-gap" name="convive_outros" type="radio" value="Na Casa"  id="r23" />
			<label for="r23">Na Casa</label></p>
			<p><input class="with-gap" name="convive_outros" type="radio" value="No Quarto"  id="r24" />
			<label for="r24">No Quarto</label></p>
			<br>
		</div>
		<div class="col l12 s12 texto"><br>2. Vive: <br></div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="vive_instituicao">2.1 Em instituição </label>
			<p><input class="with-gap" name="vive_instituicao" type="radio" value="Sim" id="r25" required />
			<label for="r25">Sim</label></p>
			<p><input class="with-gap" name="vive_instituicao" type="radio" value="Não"  id="r26" />
			<label for="r26">Não</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="vive_rua">2.2 Na rua </label>
			<p><input class="with-gap" name="vive_rua" type="radio" value="Sim" id="r27" required />
			<label for="r27">Sim</label></p>
			<p><input class="with-gap" name="vive_rua" type="radio" value="Não"  id="r28" />
			<label for="r28">Não</label></p>
			<br>
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="vive_sozinho">2.3 Sozinho </label>
			<p><input class="with-gap" name="vive_sozinho" type="radio" value="Sim" id="r29" required />
			<label for="r29">Sim</label></p>
			<p><input class="with-gap" name="vive_sozinho" type="radio" value="Não"  id="r30" />
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
					<option value="Analfabeto">Analfabeto</option>
					<option value="Primeiro Grau Incompleto">1º Grau Incompleto</option>
					<option value="Primeiro Grau Completo">1º Grau Completo</option>
					<option value="Segundo Grau / Técnico Completo">2º Grau / Técnico Completo</option>
					<option value="Segundo Grau / Técnico Incompleto">2º Grau / Técnico Incompleto</option>
					<option value="Universitário">Universitário</option>
			</select>	
		</div>
		<div class="col l4 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="instrucao_mae">3.2 Mãe ou Substituta:</label>
			<select name="instrucao_mae" id="" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Analfabeto">Analfabeto</option>
					<option value="Primeiro Grau Incompleto">1º Grau Incompleto</option>
					<option value="Primeiro Grau Completo">1º Grau Completo</option>
					<option value="Segundo Grau / Técnico Completo">2º Grau / Técnico Completo</option>
					<option value="Segundo Grau / Técnico Incompleto">2º Grau / Técnico Incompleto</option>
			</select>	
		</div>

		<div class="col l12 s12 texto"><br>4. Tipo de Trabalho <br></div>
		<div class="col l4 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="tipo_trabalho_pai">4.1 Pai ou Substituto:</label>
			<select name="tipo_trabalho_pai" id="" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Nenhum">Nenhum</option>
					<option value="Não Estável">Não Estável</option>
					<option value="Estável">Estável</option>
			</select>	
		</div>
		<div class="col l4 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="tipo_trabalho_mae">4.2 Mãe ou Substituta:</label>
			<select name="tipo_trabalho_mae" id="" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Nenhum">Nenhum</option>
					<option value="Não Estável">Não Estável</option>
					<option value="Estável">Estável</option>
			</select>	
		</div>
		<div class="col l12 s12 texto"><br>5. Ocupação <br></div>
		<div class="col l3 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="ocupacao_pai">5.1 Pai: </label>
			<input type="text" name="ocupacao_pai" placeholder="Ocupação ou Não Corresponde" required="required">	
		</div>
		<div class="col l3 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="ocupacao_mae">5.2 Mãe: </label>
			<input type="text" name="ocupacao_mae" placeholder="Ocupação ou Não Corresponde" required="required">	
		</div>
		<div class="col l3 s12" style="margin-right: 10px">
			<br>
			<label class="texto" for="ocupacao_responsavel">5.3 Responsável: </label>
			<input type="text" name="ocupacao_responsavel" placeholder="Ocupação ou Não Corresponde" required="required">	
		</div>
		<div class="col l12 s12">
			<br>
			<label class="texto" for="percepcao">6. Percepção Familiar do Adolescente: </label>
			<p><input class="with-gap" name="percepcao" type="radio" value="Boa"  id="r31" required />
			<label for="r31">Boa</label></p>
			<p><input class="with-gap" name="percepcao" type="radio" value="Regular"  id="r32" />
			<label for="r32">Regular</label></p>
			<p><input class="with-gap" name="percepcao" type="radio" value="Ruim"  id="r33" />
			<label for="r33">Ruim</label></p>
			<p><input class="with-gap" name="percepcao" type="radio" value="Não Há"  id="r34" />
			<label for="r34">Não Há</label></p>    	
		</div>
		<div class="col l12 s12 texto"><br>7. Condições de Moradia <br></div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_energia">7.1 Energia Elétrica </label>
			<p><input class="with-gap" name="condicoes_energia" type="radio" value="Sim"  id="r35" required />
			<label for="r35">Sim</label></p>
			<p><input class="with-gap" name="condicoes_energia" type="radio" value="Não"  id="r36" />
			<label for="r36">Não</label></p>			
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_lixo">7.2 Coleta de Lixo </label>
			<p><input class="with-gap" name="condicoes_lixo" type="radio" value="Sim"  id="r37" required />
			<label for="r37">Sim</label></p>
			<p><input class="with-gap" name="condicoes_lixo" type="radio" value="Não"  id="r38" />
			<label for="r38">Não</label></p>	
		</div>
		<div class="col l2 s12" >
			<br>
			
			<label class="texto" for="condicoes_agua">7.3 Água </label>
			<p><input class="with-gap" name="condicoes_agua" type="radio" value="Na Casa"  id="r39" required />
			<label for="r39">Na Casa</label></p>
			<p><input class="with-gap" name="condicoes_agua" type="radio" value="Fora da Casa"  id="r40" />
			<label for="r40">Fora da Casa</label></p>		
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_dejetos">7.4 Dejetos </label>
			<p><input class="with-gap" name="condicoes_dejetos" type="radio" value="Na Casa"  id="r41" required />
			<label for="r41">Na Casa</label></p>
			<p><input class="with-gap" name="condicoes_dejetos" type="radio" value="Fora da Casa"  id="r42" />
			<label for="r42">Fora da Casa</label></p> 
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_quarto">7.5 Compartilha o Quarto </label>
			<p><input class="with-gap" name="condicoes_quarto" type="radio" value="Sim"  id="r43" required />
			<label for="r43">Sim</label></p>
			<p><input class="with-gap" name="condicoes_quarto" type="radio" value="Não"  id="r44" />
			<label for="r44">Não</label></p>
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_cama">7.6 Compartilha a Cama </label>
			<p><input class="with-gap" name="condicoes_cama" type="radio" value="Sim"  id="r45" required />
			<label for="r45">Sim</label></p>
			<p><input class="with-gap" name="condicoes_cama" type="radio" value="Não"  id="r46" />
			<label for="r46">Não</label></p> 
		</div>
		<div class="col l2 s12" >
			<br>
			<label class="texto" for="condicoes_habitacao">7.7 Tipo de Habitação </label>
			<p><input class="with-gap" name="condicoes_habitacao" type="radio" value="Próprio"  id="r47" required />
			<label for="r47">Próprio</label></p>
			<p><input class="with-gap" name="condicoes_habitacao" type="radio" value="Alugado"  id="r48" />
			<label for="r48">Alugado</label></p> 
			<p><input class="with-gap" name="condicoes_habitacao" type="radio" value="Cessão"  id="r49" />
			<label for="r49">Cessão</label></p> 
		</div>
		<div class="col l2 s12 " >
			<br>
			<label class="texto" for="condicoes_construcao">7.8 Tipo de Construção </label>
			<p><input class="with-gap" name="condicoes_construcao" type="radio" value="Tijolos"  id="r50" required />
			<label for="r50">Tijolos</label></p>
			<p><input class="with-gap" name="condicoes_construcao" type="radio" value="Madeira"  id="r51" />
			<label for="r51">Madeira</label></p> 
			<p><input class="with-gap" name="condicoes_construcao" type="radio" value="Outros"  id="r52" />
			<label for="r52">Outros</label></p> 
		</div>
		<div class="col l12 s12"><br></div>
		<div class="col l3 s12">
			<br>
			<label class="texto" for="condicoes_numero_quartos">7.9 Número de Quartos</label>
			<input type="number" name="condicoes_numero_quartos" min="1" required="required">
		</div>
		<div class="col l3 s12" >
			<br>
			<label class="texto" for="condicoes_numero_comodos">7.10 Número de Cômodos</label>
			<input type="number" name="condicoes_numero_comodos" min="1" required="required">
		</div>
		<div class="col l12 s12"></div>
		<div class="col s5 s12 ">
			<label class="texto" for="observacoes"><br>Observações :</label>
			<textarea class="materialize-textarea" name="observacoes" cols="30" rows="3" placeholder="Observações" required="required"></textarea> 
			<br><br>
		</div>
		<div class="col l12 s12">
			<button class="btn waves-effect waves-light" type="submit" name="action">Salvar</button>
			<br><br>
		</div>
	</div>
	
	
</div>