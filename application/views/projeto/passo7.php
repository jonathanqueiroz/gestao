<style type="text/css">
label {
    display:block;
}
ul {
    list-style: none;
    display: block;
}
.form_ul  li {
    float: left;
    display: block;
    width: 75px;
    text-align: center;
}
</style>
<?php echo form_open('Pessoa/stepSeven'); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="grid-x grid-container">
		<div class="small-12"><h4>Situação Psicoemocional e Físico</h4><br></div>
		<div class="small-12 cell">1. Psicoemocional: <br></div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="imagem_corporal">1.1 Imagem Corporal </label>
			<select name="imagem_corporal" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Conforme">Conforme</option>
				<option value="Causa preocupação">Causa preocupação</option>
				<option value="Impede relação com os outros">Impede relação com os outros</option>
			</select> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="auto_percepcao">1.2 Auto Percepção </label>
			<select name="auto_percepcao" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Triste">Triste</option>
				<option value="Nervoso">Nervoso</option>
				<option value="Alegre">Alegre</option>
				<option value="Muito tímido">Muito tímido</option>
				<option value="Outro">Outro</option>
			</select> 	
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="adulto_referencia">1.3 Adulto de Referência </label>
			<select name="adulto_referencia" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Pai">Pai</option>
				<option value="Mãe">Mãe</option>
				<option value="Outro Familiar">Outro Familiar</option>
				<option value="Professor">Professor</option>
				<option value="Fora de Casa">Fora de Casa</option>
				<option value="Nenhum">Nenhum</option>
			</select> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="projeto_vida">1.4 Projeto de Vida</label>
			<select name="projeto_vida" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Claro">Claro</option>
				<option value="Confuso">Confuso</option>
				<option value="Ausente">Ausente</option>
			</select>  
			</ul>
		</div>

		<div class="small-12 cell"><br>2. Exame Físico <br></div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="aspecto_geral">2.1 Aspecto Geral </label>
			<li>Normal<br><input type="radio" name="aspecto_geral" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="aspecto_geral" value="Anormal" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="peso">2.2 Peso (kg)</label>
			<input type="number" min="0" step="0.1" name="peso" required="required" />
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="altura">2.1 Altura (cm) </label>
			<input type="number" min="0" name="altura" required="required" />
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="centil_peso_idade"> 2.3 Centil Peso/Idade</label>
			<input type="number" min="0" step="0.1" name="centil_peso_idade" required="required" />
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="centil_altura_idade">2.4 Centil Altura/Idade </label>
			<input type="number" min="0" step="0.1" name="centil_altura_idade" required="required" />
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="centil_peso_altura">2.5 Centil Peso/Altura </label>
			<input type="number" min="0" step="0.1" name="centil_peso_altura" required="required" />
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="pele_anexos">2.6 Pele e Anexos </label>
			<li>Normal<br><input type="radio" name="pele_anexos" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="pele_anexos" value="Anormal" /></li> 
			</ul>
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="cabeca">2.7 Cabeça</label>
			<li>Normal<br><input type="radio" name="cabeca" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="cabeca" value="Anormal" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="acuidade_visual">2.8 Acuidade Visual</label>
			<li>Normal<br><input type="radio" name="acuidade_visual" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="acuidade_visual" value="Anormal" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="acuidade_auditiva">2.9 Acuidade Auditiva</label>
			<li>Normal<br><input type="radio" name="acuidade_auditiva" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="acuidade_auditiva" value="Anormal" /></li>  
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="bocas_dentes">2.10 Bocas e Dentes</label>
			<li>Normal<br><input type="radio" name="bocas_dentes" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="bocas_dentes" value="Anormal" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="pescoco_tireoide">2.11 Pescoço e Tireoíde</label>
			<li>Normal<br><input type="radio" name="pescoco_tireoide" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="pescoco_tireoide" value="Anormal" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="torax_mamas">2.12 Tórax e Mamas</label>
			<li>Normal<br><input type="radio" name="torax_mamas" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="torax_mamas" value="Anormal" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="cardiovascular">2.13 Cárdiovascular</label>
			<li>Normal<br><input type="radio" name="cardiovascular" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="cardiovascular" value="Anormal" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="pressao_arterial">2.5 Pressão Arterial </label>
			<input type="text"  name="pressao_arterial" required="required" />
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="frequencia_cardiaca">2.5 Frequência Cardíaca </label>
			<input type="number" min="0" name="frequencia_cardiaca" required="required" />
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="abdomen">2.13 Abdômen</label>
			<li>Normal<br><input type="radio" name="abdomen" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="abdomen" value="Anormal" /></li>  
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="geniturinario">2.13 Geniturinário</label>
			<li>Normal<br><input type="radio" name="geniturinario" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="geniturinario" value="Anormal" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="coluna">2.13 Coluna</label>
			<li>Normal<br><input type="radio" name="coluna" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="coluna" value="Anormal" /></li>  
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="extremidades">2.13 Extremidades</label>
			<li>Normal<br><input type="radio" name="extremidades" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="extremidades" value="Anormal" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="neurologicos">2.13 Neurológicos</label>
			<li>Normal<br><input type="radio" name="neurologicos" value="Normal" required="required" /></li> 
			<li>Anormal <br><input type="radio" name="neurologicos" value="Anormal" /></li> 
			</ul>
		</div>
		<div class="small-12 cell">
			<br>
			<input type="submit" value="Salvar" class="button large color_button">
		</div>
	</div>
</div>