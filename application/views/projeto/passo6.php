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
<?php echo form_open('Pessoa/stepSix'); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="grid-x grid-container">
		<div class="small-12"><h4>Gineco-Urologico e Sexualidade</h4><br></div>
		<div class="small-12 cell">1. Gineco-Urologico: <br></div>
		<div class="small-3 cell " >
			<br>
			<ul class="form_ul">
			<label for="menarca_espermarca">1.1 Idade Menarca / Espermarca </label>
			<input type="number" name="menarca_espermarca" min="1" required="required" /> 
			</ul>
		</div>
		<div class="small-5 cell " >
			<br>
			<ul class="form_ul">
			<label for="data_menstruacao">1.2 Data da Última Menstruação </label>
			<input type="text" name="data_menstruacao" placeholder="Entre com a Data, 'Não Lembra' ou 'Não Corresponde'" required="required" />	
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="ciclos">1.3 Ciclos Regulares </label>
			<li>Sim <br><input type="radio" name="ciclos" value="Sim" required="required" /></li> 
			<li>Não <br><input type="radio" name="ciclos" value="Não" /></li> 
			<li>N/C <br><input type="radio" name="ciclos" value="Não Corresponde" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="dismonorreia">1.4 Dismenorréia</label>
			<li>Sim <br><input type="radio" name="dismonorreia" value="Sim" required="required" /></li> 
			<li>Não <br><input type="radio" name="dismonorreia" value="Não" /></li>
			<li>N/C <br><input type="radio" name="dismonorreia" value="Não Corresponde" /></li>  
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="patologico_secrecao">1.5 Fluxo Patológico / Secreção Peniana </label>
			<li>Sim <br><input type="radio" name="patologico_secrecao" value="Sim" required="required" /></li> 
			<li>Não <br><input type="radio" name="patologico_secrecao" value="Não" /></li> 
			<li>N/C <br><input type="radio" name="patologico_secrecao" value="Não Corresponde" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="dst">1.6 Doença de Transmissão Sexual </label>
			<textarea name="dst" id="" cols="30" rows="4" placeholder="Descreva qual ou escreva 'Não' caso não se aplique." required="required"></textarea>
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="num_gestacoes">1.7 Número de Gestações </label>
			<input type="number" name="num_gestacoes" min="0" placeholder="Coloque 0 se não se aplicar" required="required" />
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="num_filhos">1.8 Número de Filhos </label>
			<input type="number" name="num_filhos" min="0" placeholder="Coloque 0 se não se aplicar" required="required" />
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="num_abortos">1.9 Número de Abortos</label>
			<input type="number" name="num_abortos" min="0" placeholder="Coloque 0 se não se aplicar" required="required" />
			</ul>
		</div>

		<div class="small-12 cell"><br>2. Sexualidade <br></div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="informacao">2.2 Necessita Informação </label>
			<li>Sim <br><input type="radio" name="informacao" value="Sim" required="required" /></li> 
			<li>Não <br><input type="radio" name="informacao" value="Não" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="relacoes_sexuais">2.3 Relações Sexuais</label>
			<select name="relacoes_sexuais" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Não">Não</option>
				<option value="Hétero">Hétero</option>
				<option value="Homo">Homo</option>
				<option value="Ambos">Ambos</option>
			</select>
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="parceiro">2.4 Parceiro(a) </label>
			<li>Único(a) <br><input type="radio" name="parceiro" value="Sim" required="required" /></li> 
			<li>Vários(as) <br><input type="radio" name="parceiro" value="Não" /></li> 
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="idade_sexo">2.4 Idade de Início das Relações Sexuais</label>
			<input type="number" name="idade_sexo" min="0" placeholder="Coloque 0 se não se aplicar" required="required" />
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="problema_sexuais">2.5 Problemas nas Relações Sexuais</label>
			<li>Sim <br><input type="radio" name="problema_sexuais" value="Sim" required="required" /></li> 
			<li>Não <br><input type="radio" name="problema_sexuais" value="Não" /></li>
			<li>N/C <br><input type="radio" name="problema_sexuais" value="Não Corresponde"  /></li>  
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="preservativos">2.6 Preservativos </label>
			<select name="preservativos" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Sempre">Sempre</option>
				<option value="Ás Vezes">Ás vezes</option>
				<option value="Nunca">Nunca</option>
				<option value="Não Corresponde">Não corresponde</option>
			</select>
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="outros_metodos">2.7 Outros Métodos</label>
			<textarea name="outros_metodos" id="" cols="30" rows="4" placeholder="Entre com o método, 'Não Lembra' ou 'Não Corresponde'" required="required"></textarea>
			</ul>
		</div>
		<div class="small-4 cell " >
			<br>
			<ul class="form_ul">
			<label for="abuso_sexual">2.8 Abuso Sexual</label>
			<textarea name="abuso_sexual" id="" cols="30" rows="4" placeholder="Descreva caso positivo ou entre com 'Não'" required="required"></textarea>
			</ul>
		</div>
		<div class="small-12 cell">
			<input type="submit" value="Salvar" class="button large color_button">
		</div>
	</div>
</div>