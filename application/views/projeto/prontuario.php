<div>
	<?php echo form_open(''); ?>
		<h2>Cadastro Pessoa</h2>
		<div class="step1 form_cadastro form_box">
			<br>
			<div class="grid-x grid-container">
				<div class="small-5 cell " style="margin-right: 10px">
					<label for="nome">Nome Completo:</label>
					<input type="text" name="nome" placeholder="Nome" />
				</div>
				<div class="small-2 cell" style="margin-right: 10px">
					<label for="rg">RG:</label>	
					<input type="text" name="rg" placeholder="RG" />
				</div>
				<div class="small-2 cell" style="margin-right: 10px">
					<label for="nascimento">Data Nascimento:</label>	
					<input type="date" name="nascimento" placeholder="Data Nascimento" />
				</div>
				<div class="small-2 cell" style="margin-right: 10px">
					<label for="sexo">Sexo:</label>
					<select name="sexo" id="">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="feminino">Feminino</option>
					<option value="masculino">Masculino</option>
					</select>	
				</div>
				<div class="small-6 cell" style="margin-right: 30px">
					<label for="endereco">Endereço Completo:</label>
					<input type="text" name="endereco" placeholder="Endereço" />
				</div>
				<div class="small-5 cell" style="margin-right: 10px">
					<label for="cidade">Cidade:</label>	
					<input type="text" name="cidade" placeholder="Cidade" />
				</div>

				<div class="small-3 cell" style="margin-right: 10px">
					<label for="pt_ref">Ponto de Referência:</label>	
					<input type="text" name="pt_ref" placeholder="Ponto de Referência" />
				</div>
				<div class="small-2 cell" style="margin-right: 10px">
					<label for="cep">CEP:</label>	
					<input type="text" name="cep" placeholder="CEP" />
				</div>
				<div class="small-2 cell" style="margin-right: 10px">
					<label for="telefone">Telefone:</label>	
					<input type="text" name="telefone" placeholder="Telefone" />
				</div>
				
				<div class="small-4 cell" style="margin-right: 10px">
					<label for="lugar">Lugar Nascimento:</label>	
					<input type="text" name="lugar" placeholder="Lugar Nascimento" />
				</div>
				<div class="small-5 cell" style="margin-right: 30px">
					<label for="filiacao">Filiação Mãe:</label>	
					<input type="text" name="filiacao" placeholder="Filiação Mãe" />
				</div>
				<div class="small-6 cell" style="margin-right: 10px">
					<label for="pai">Pai:</label>	
					<input type="text" name="pai" placeholder="Pai" />
				</div>
				<div class="small-5 cell" style="margin-right: 10px">
					<label for="responsavel">Responsável:</label>	
					<input type="text" name="responsavel" placeholder="Responsável" />
				</div>
				<div class="small-5 cell" style="margin-right: 10px">
					<label for="estado_civil">Estado Civil:</label>
					<select name="estado_civil" id="">
						<option value="" disabled="disabled" selected="selected">Selecione</option>
						<option value="feminino">Solteiro</option>
						<option value="masculino">União Estável</option>
						<option value="masculino">Separado</option>
					</select>	
				</div>
				<div class="small-5 cell" style="margin-right: 10px">
					<label for="acompanhante">Acompanhante:</label>	
					<select name="acompanhante" id="">
						<option value="" disabled="disabled" selected="selected">Selecione</option>
						<option value="sozinho">Sozinho</option>
						<option value="mae">Mãe</option>
						<option value="pai">Pai</option>
						<option value="ambos">Pais</option>
						<option value="companheiro">Companheiro(a)</option>
						<option value="amigo">Amigo(a)</option>
						<option value="parente">Parente</option>
						<option value="outros">Outros</option>
					</select>	
				</div>
				<div class="small-auto cell"></div><br>
				<div>
					<input type="button" value="Próximo" class="button large color_button button_passo2">
				</div>
			</div>
		</div>
		<br>
		<div class="step2 form_cadastro form_box">
			<br>
			<div class="grid-x grid-container">
				<div class="small-5 cell " style="margin-right: 10px">
					<label for="motivo_a">Motivos da Consulta (Segundo o Adolescente):</label>
					<textarea name="motivo_a" cols="30" rows="3" placeholder="Motivos da Consulta (Segundo o Adolescente)"></textarea> 
				</div>
				<div class="small-5 cell " style="margin-right: 10px">
					<label for="motivo_b">Motivos da Consulta (Segundo o Acompanhante):</label>
					<textarea name="motivo_b" cols="30" rows="3" placeholder="Motivos da Consulta (Segundo o Acompanhante)"></textarea> 
				</div>
				<div class="small-5 cell " style="margin-right: 10px">
					<label for="obs_motivos">Observações Importantes</label>
					<textarea name="obs_motivos" cols="30" rows="3" placeholder="Observações Importantes"></textarea> 
				</div>
				<div class="small-5"></div>
				<div class="small-5 cell " style="margin-right: 10px">
					<label for="obs_motivos">Código(s) Motivo(s) do Adolescente (Separe por vírgulas caso exista mais de um)</label>
					<input type="text" name="cod_a" placeholder="Código(s) Motivo(s) do Adolescente" />
				</div>
				<div class="small-5 cell " style="margin-right: 10px">
					<label for="obs_motivos">Código(s) Motivo(s) do Acompanhante (Separe por vírgulas caso exista mais de um)</label>
					<input type="text" name="cod_b" placeholder="Código(s) Motivo(s) do Acompanhante" /> 
				</div>
				<div class="small-12"><br><h4>Antecedentes Pessoais</h4><br></div>	
				<div class="small-3 cell " style="margin-right: 0px">
					<label for="perinatais">Perinatais Normais</label>
					<div class="small-12 cell">Sim <br></div> <div class="small-12 cell"><input type="radio" name="perinatais" value="sim" /></div> 
					Não Sei <input type="radio" name="perinatais" value="nao_sei" /> 
					Não <input type="radio" name="perinatais" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<label for="crescimento">Crescimento Normal</label>
					Sim <input type="radio" name="crescimento" value="sim" /> 
					Não Sei <input type="radio" name="crescimento" value="nao_sei" /> 
					Não <input type="radio" name="crescimento" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<label for="vacinas">Vacinas Completas</label>
					Sim <input type="radio" name="vacinas" value="sim" /> 
					Não Sei <input type="radio" name="vacinas" value="nao_sei" /> 
					Não <input type="radio" name="vacinas" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<label for="cronica">Doenças Crônicas</label>
					Sim <input type="radio" name="cronica" value="sim" /> 
					Não Sei <input type="radio" name="cronica" value="nao_sei" /> 
					Não <input type="radio" name="cronica" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="infectocontagiosas">Doenças Infectocontagiosas</label>
					Sim <input type="radio" name="infectocontagiosas" value="sim" /> 
					Não Sei <input type="radio" name="infectocontagiosas" value="nao_sei" /> 
					Não <input type="radio" name="infectocontagiosas" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="infectocontagiosas">Acidentes Intoxicação</label>
					Sim <input type="radio" name="intoxicacao" value="sim" /> 
					Não Sei <input type="radio" name="intoxicacao" value="nao_sei" /> 
					Não <input type="radio" name="intoxicacao" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="cirurgia">Cirurgia/Hospitalização</label>
					Sim <input type="radio" name="cirurgia" value="sim" /> 
					Não Sei <input type="radio" name="cirurgia" value="nao_sei" /> 
					Não <input type="radio" name="cirurgia" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="medicamentos">Uso de Medicamentos/Substâncias</label>
					Sim <input type="radio" name="medicamentos" value="sim" /> 
					Não Sei <input type="radio" name="medicamentos" value="nao_sei" /> 
					Não <input type="radio" name="medicamentos" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="transtornos">Transtornos Psicológicos</label>
					Sim <input type="radio" name="transtornos" value="sim" /> 
					Não Sei <input type="radio" name="transtornos" value="nao_sei" /> 
					Não <input type="radio" name="transtornos" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="maltratos">Maltratos</label>
					Sim <input type="radio" name="maltratos" value="sim" /> 
					Não Sei <input type="radio" name="maltratos" value="nao_sei" /> 
					Não <input type="radio" name="maltratos" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="judiciais">Judiciais</label>
					Sim <input type="radio" name="judiciais" value="sim" /> 
					Não Sei <input type="radio" name="judiciais" value="nao_sei" /> 
					Não <input type="radio" name="judiciais" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="outros_option">Outros</label>
					Sim <input type="radio" name="outros_option" value="sim" /> 
					Não Sei <input type="radio" name="outros_option" value="nao_sei" /> 
					Não <input type="radio" name="outros_option" value="nao" /> 
				</div>
				<div class="small-5 cell" style="margin-right: 10px">
					<br>
					<label for="responsavel">Observações:</label>	
					<textarea name="obs_pessoais" cols="30" rows="3" placeholder="Observações"></textarea> 
				</div>
				<div class="small-12"><br><h4>Antecedentes Familiares</h4><br></div>	
				<div class="small-3 cell " style="margin-right: 0px">
					<label for="diabetes">Diabetes</label>
					Sim <input type="radio" name="diabetes" value="sim" /> 
					Não Sei <input type="radio" name="diabetes" value="nao_sei" /> 
					Não <input type="radio" name="diabetes" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<label for="obesidade">Obesidade</label>
					Sim <input type="radio" name="obesidade" value="sim" /> 
					Não Sei <input type="radio" name="obesidade" value="nao_sei" /> 
					Não <input type="radio" name="obesidade" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<label for="cadiovascular">Cadiovascular</label>
					Sim <input type="radio" name="cadiovascular" value="sim" /> 
					Não Sei <input type="radio" name="cadiovascular" value="nao_sei" /> 
					Não <input type="radio" name="cadiovascular" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<label for="alergia">Alergia</label>
					Sim <input type="radio" name="alergia" value="sim" /> 
					Não Sei <input type="radio" name="alergia" value="nao_sei" /> 
					Não <input type="radio" name="alergia" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="infeccao">Infecções (TBC,VIH,etc)</label>
					Sim <input type="radio" name="infeccao" value="sim" /> 
					Não Sei <input type="radio" name="infeccao" value="nao_sei" /> 
					Não <input type="radio" name="infeccao" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="infectocontagiosas">Acidentes Intoxicação</label>
					Sim <input type="radio" name="intoxicacao" value="sim" /> 
					Não Sei <input type="radio" name="intoxicacao" value="nao_sei" /> 
					Não <input type="radio" name="intoxicacao" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="transtornos_psicologicos">Transtornos Psicológicos</label>
					Sim <input type="radio" name="transtornos_psicologicos" value="sim" /> 
					Não Sei <input type="radio" name="transtornos_psicologicos" value="nao_sei" /> 
					Não <input type="radio" name="transtornos_psicologicos" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="medicamentos">Álcool/Drogas</label>
					Sim <input type="radio" name="alcool" value="sim" /> 
					Não Sei <input type="radio" name="alcool" value="nao_sei" /> 
					Não <input type="radio" name="alcool" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="violencia">Violência Intrafamiliar</label>
					Sim <input type="radio" name="violencia" value="sim" /> 
					Não Sei <input type="radio" name="violencia" value="nao_sei" /> 
					Não <input type="radio" name="violencia" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="mae_adolescente">Mãe Adolescente</label>
					Sim <input type="radio" name="mae_adolescente" value="sim" /> 
					Não Sei <input type="radio" name="mae_adolescente" value="nao_sei" /> 
					Não <input type="radio" name="mae_adolescente" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="judiciais_familia">Judiciais</label>
					Sim <input type="radio" name="judiciais_familia" value="sim" /> 
					Não Sei <input type="radio" name="judiciais_familia" value="nao_sei" /> 
					Não <input type="radio" name="judiciais_familia" value="nao" /> 
				</div>
				<div class="small-3 cell " style="margin-right: 0px">
					<br>
					<label for="outros_familia">Outros</label>
					Sim <input type="radio" name="outros_familia" value="sim" /> 
					Não Sei <input type="radio" name="outros_familia" value="nao_sei" /> 
					Não <input type="radio" name="outros_familia" value="nao" /> 
				</div>
				<div class="small-5 cell" style="margin-right: 10px">
					<br>
					<label for="responsavel">Observações:</label>	
					<textarea name="obs_pessoais" cols="30" rows="3" placeholder="Observações"></textarea>
					<br> 
				</div>
				<div class="small-12 cell">
					<input type="button" value="Próximo" class="button large color_button button_passo2">
				</div>
			</div>
			<br>
			<br>
			<br>
		</div>
		



	<?php form_close(); ?>
</div>