<script>

  function myFunction() {
    var x = document.getElementById("C4_1").selectedIndex;
    alert(document.getElementsByTagName("option")[x].value);
}
</script>
<?php echo form_open('Pessoa/educacao_emprego/'.$id); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Educação e Trabalho</h4><br></div>
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<div class="col s12 l12">1. Educação: <br></div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="estuda">1.1 Estuda </label class="texto">
			<p><input class="with-gap" name="estuda" type="radio" value="Sim" id="r4_1"  />
			<label for="r4_1">Sim</label></p>
			<p><input class="with-gap" name="estuda" type="radio" value="Não"  id="r4_2" />
			<label for="r4_2">Não</label></p> 
		</div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="turno_escola">1.2 Turno</label class="texto">
			<p><input class="with-gap" name="turno_escola" type="radio" value="Matutino" id="r4_3"  />
			<label for="r4_3">Matutino</label></p>
			<p><input class="with-gap" name="turno_escola" type="radio" value="Vespertino" id="r4_4" />
			<label for="r4_4">Vespertino</label></p> 
			<p><input class="with-gap" name="turno_escola" type="radio" value="Noturno" id="r4_5" />
			<label for="r4_5">Noturno</label></p> 
		</div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="problemas_escola">1.3 Problemas na Escola </label class="texto">
			<p><input class="with-gap" name="problemas_escola" type="radio" value="Sim" id="r4_6"  />
			<label for="r4_6">Sim</label></p>
			<p><input class="with-gap" name="problemas_escola" type="radio" value="Não"  id="r4_7" />
			<label for="r4_7">Não</label></p>
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="nivel">1.4 Nível </label class="texto">
			<select name="nivel" id="C4_1" >
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Analfabeto">Analfabeto</option>
					<option value="Primeiro Grau Incompleto">1º Grau Incompleto</option>
					<option value="Primeiro Grau Completo">1º Grau Completo</option>
					<option value="Segundo Grau / Técnico Completo">2º Grau / Técnico Completo</option>
					<option value="Segundo Grau / Técnico Incompleto">2º Grau / Técnico Incompleto</option>
					<option value="Universitário">Universitário</option>
			</select>
		</div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="serie">1.5 Série </label class="texto">
			<input type="text" name="serie" placeholder="Série"  />	
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="anos_repetidos">1.6 Ano(s) Repetido(s)</label class="texto">
			<textarea class="materialize-textarea" name="anos_repetidos" id="" cols="30" rows="4" placeholder="Descreva o número e as causas ou se a resposta for negativa apenas escreva 'Não'." ></textarea>
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="abandono_escola">1.7 Abandono</label class="texto">
			<textarea class="materialize-textarea" name="abandono_escola" id="" cols="30" rows="4" placeholder="Descreva as causas ou se a resposta for negativa apenas escreva 'Não'." ></textarea>
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="nao_formal">1.8 Educação Não Formal</label class="texto">
			<textarea class="materialize-textarea" name="nao_formal" id="" cols="30" rows="4" placeholder="Descreva quais ou se a resposta for negativa apenas escreva 'Não'." ></textarea>
		</div>
		<div class="col s12 l12"><br>2. Trabalho <br></div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="atividade_trabalho">2.1 Atividade </label class="texto">
			<select name="atividade_trabalho" id="" >
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Trabalha">Trabalha</option>
					<option value="Procurando">Procurando</option>
					<option value="Não e não procura">Não e não procura</option>
					<option value="Desocupado">Desocupado</option>
					<option value="Não se interessa">Não se interessa</option>
			</select> 
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="idade_trabalho">2.2 Idade de Início de Trabalho </label class="texto">
			<input type="number" min="10" name="idade_trabalho" >
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="horas_semana">2.3 Horas por semana</label class="texto">
			<input type="number" min="0" name="horas_semana" >
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="horario_trabalho">2.4 Horário de Trabalho</label class="texto">
			<select name="horario_trabalho" id="" >
					<option value="" disabled selected>Selecione</option>
					<option value="Manhã">Manhã</option>
					<option value="Tarde">Tarde</option>
					<option value="Noite">Noite</option>
					<option value="Dia todo">Dia todo</option>
					<option value="Fim de semana">Fim de semana</option>
					<option value="Não Corresponde">Não Corresponde</option>
			</select>
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="r4_azao_trabalho">2.5 Razão do Trabalho </label class="texto">
			<select name="razao_trabalho" id="r4_azao_trabalho" >
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Econômica">Econômica</option>
					<option value="Autonomia">Autonomia</option>
					<option value="Gosto pessoal">Gosto pessoal</option>
					<option value="Ajuda familiar">Ajuda familiar</option>
			</select>
		</div>
		<div class="col s12 l12"></div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="legalizado">2.6 Trabalho Legalizado </label class="texto">
			<p><input class="with-gap" name="legalizado" type="radio" value="Sim" id="r4_8"  />
			<label for="r4_8">Sim</label></p>
			<p><input class="with-gap" name="legalizado" type="radio" value="Não"  id="r4_9" />
			<label for="r4_9">Não</label></p>  
		</div>
		<div class="col s12 l3 " >
			<br>	
			<label class="texto" for="insalubre">2.7 Trabalho Insalubre</label class="texto">
			<p><input class="with-gap" name="insalubre" type="radio" value="Sim" id="r4_10"  />
			<label for="r4_10">Sim</label></p>
			<p><input class="with-gap" name="insalubre" type="radio" value="Não"  id="r4_11" />
			<label for="r4_11">Não</label></p> 
		</div>
		<div class="col s12 l12"></div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="tipo_trabalho">2.8 Tipo de trabalho</label class="texto">
			<textarea class="materialize-textarea" name="tipo_trabalho" id="" cols="30" rows="4" placeholder="Descreva a atividade caso exista, ou deixe em branco caso não." ></textarea>
		</div>
		<div class="col l12 s12">
			<button class="btn waves-effect waves-light blue" type="submit" name="action" formaction="<?php echo base_url('Pessoa/educacao_emprego/'.$id);?>">Salvar</button>
			<br><br>
		</div>
	</div>
</div>
</form>