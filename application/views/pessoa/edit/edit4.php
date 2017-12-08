<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php echo form_open('Pessoa/edit_educacao_emprego/'.$id); 
echo validation_errors(); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Educação e Trabalho</h4><br></div>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="col s12 l12">1. Educação: <br></div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="estuda">1.1 Estuda </label class="texto">
			<p><input class="with-gap" name="estuda" type="radio" value="Sim" id="e4_1" required <?php if($form4->estuda == 'Sim'){ ?> checked <?php } ?> />
			<label for="e4_1">Sim</label></p>
			<p><input class="with-gap" name="estuda" type="radio" value="Não"  id="e4_2" <?php if($form4->estuda == 'Não'){ ?> checked <?php } ?> />
			<label for="e4_2">Não</label></p> 
		</div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="turno_escola">1.2 Turno</label class="texto">
			<p><input class="with-gap" name="turno_escola" type="radio" value="Matutino" id="e4_3" required <?php if($form4->turno_escola == 'Matutino'){ ?> checked <?php } ?> />
			<label for="e4_3">Matutino</label></p>
			<p><input class="with-gap" name="turno_escola" type="radio" value="Vespertino" id="e4_4" <?php if($form4->turno_escola == 'Vespertino'){ ?> checked <?php } ?> />
			<label for="e4_4">Vespertino</label></p> 
			<p><input class="with-gap" name="turno_escola" type="radio" value="Noturno" id="e4_5" <?php if($form4->turno_escola == 'Noturno'){ ?> checked <?php } ?> />
			<label for="e4_5">Noturno</label></p> 
		</div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="problemas_escola">1.3 Problemas na Escola </label class="texto">
			<p><input class="with-gap" name="problemas_escola" type="radio" value="Sim" id="e4_6" required <?php if($form4->problemas_escola == 'Sim'){ ?> checked <?php } ?> />
			<label for="e4_6">Sim</label></p>
			<p><input class="with-gap" name="problemas_escola" type="radio" value="Não"  id="e4_7" <?php if($form4->problemas_escola == 'Não'){ ?> checked <?php } ?> />
			<label for="e4_7">Não</label></p>
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="nivel">1.4 Nível </label class="texto">
			<select name="nivel" id="nivel" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Analfabeto" <?php if ($form4->nivel == 'Analfabeto'){ ?> selected="selected" <?php } ?>>Analfabeto</option>
					<option value="1º Grau Incompleto" <?php if ($form4->nivel == '1º Grau Incompleto'){ ?> selected="selected" <?php } ?> >1º Grau Incompleto</option>
					<option value="1º Grau Completo" <?php if ($form4->nivel == '1º Grau Completo'){ ?> selected="selected" <?php } ?> >1º Grau Completo</option>
					<option value="2º Grau / Técnico Completo" <?php if ($form4->nivel == '2º Grau / Técnico Completo'){ ?> selected="selected" <?php } ?> >2º Grau / Técnico Completo</option>
					<option value="2º Grau / Técnico Incompleto" <?php if ($form4->nivel == '2º Grau / Técnico Incompleto'){ ?> selected="selected" <?php } ?> >2º Grau / Técnico Incompleto</option>
					<option value="Universitário" <?php if ($form4->nivel == 'Universitário'){ ?> selected="selected" <?php } ?> >Universitário</option>
			</select>
		</div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="serie">1.5 Série </label class="texto">
			<input type="text" name="serie" placeholder="Série" required="required" value="<?php echo $form4->serie; ?>"  />	
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="anos_repetidos">1.6 Ano(s) Repetido(s)</label class="texto">
			<textarea class="materialize-textarea" name="anos_repetidos" id="" cols="30" rows="4" placeholder="Descreva o número e as causas ou se a resposta for negativa apenas escreva 'Não'." required="required"><?php echo $form4->anos_repetidos; ?></textarea>
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="abandono_escola">1.7 Abandono</label class="texto">
			<textarea class="materialize-textarea" name="abandono_escola" id="" cols="30" rows="4" placeholder="Descreva as causas ou se a resposta for negativa apenas escreva 'Não'." required="required"><?php echo $form4->abandono_escola; ?></textarea>
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="nao_formal">1.8 Educação Não Formal</label class="texto">
			<textarea class="materialize-textarea" name="nao_formal" id="" cols="30" rows="4" placeholder="Descreva quais ou se a resposta for negativa apenas escreva 'Não'." required="required"><?php echo $form4->nao_formal; ?></textarea>
		</div>
		<div class="col s12 l12"><br>2. Trabalho <br></div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="atividade_trabalho">2.1 Atividade </label class="texto">
			<select name="atividade_trabalho" id="S4_2" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Trabalha" <?php if ($form4->atividade_trabalho == 'Trabalha'){ ?> selected="selected" <?php } ?> >Trabalha</option>
					<option value="Procurando" <?php if ($form4->atividade_trabalho == 'Procurando'){ ?> selected="selected" <?php } ?> >Procurando</option>
					<option value="Não e não procura" <?php if ($form4->atividade_trabalho == 'Não e não procura'){ ?> selected="selected" <?php } ?> >Não e não procura</option>
					<option value="Desocupado" <?php if ($form4->atividade_trabalho == 'Desocupado'){ ?> selected="selected" <?php } ?> >Desocupado</option>
					<option value="Não se interessa" <?php if ($form4->atividade_trabalho == 'Não se interessa'){ ?> selected="selected" <?php } ?> >Não se interessa</option>
			</select> 
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="idade_trabalho">2.2 Idade de Início de Trabalho </label class="texto">
			<input type="number" min="10" name="idade_trabalho" required="required" value="<?php echo $form4->idade_trabalho;?>">
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="horas_semana">2.3 Horas por semana</label class="texto">
			<input type="number" min="0" name="horas_semana" required="required" value="<?php echo $form4->horas_semana; ?>">
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="horario_trabalho">2.4 Horário de Trabalho</label class="texto">
			<select name="horario_trabalho" id="S4_3" required="required">
					<option value="" disabled selected>Selecione</option>
					<option value="Manhã" <?php if ($form4->horario_trabalho == 'Manhã'){ ?> selected="selected" <?php } ?> >Manhã</option>
					<option value="Tarde" <?php if ($form4->horario_trabalho == 'Tarde'){ ?> selected="selected" <?php } ?> >Tarde</option>
					<option value="Noite" <?php if ($form4->horario_trabalho == 'Noite'){ ?> selected="selected" <?php } ?>>Noite</option>
					<option value="Dia todo" <?php if ($form4->horario_trabalho == 'Dia todo'){ ?> selected="selected" <?php } ?> >Dia todo</option>
					<option value="Fim de semana" <?php if ($form4->horario_trabalho == 'Fim de semana'){ ?> selected="selected" <?php } ?> >Fim de semana</option>
					<option value="Não Corresponde" <?php if ($form4->horario_trabalho == 'Não Corresponde'){ ?> selected="selected" <?php } ?> >Não Corresponde</option>
			</select>
		</div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="e4_azao_trabalho">2.5 Razão do Trabalho </label class="texto">
			<select name="razao_trabalho" id="S4_5" required="required">
					<option value="" disabled="disabled" selected="selected">Selecione</option>
					<option value="Econômica" <?php if ($form4->razao_trabalho == 'Econômica'){ ?> selected="selected" <?php } ?> >Econômica</option>
					<option value="Autonomia" <?php if ($form4->razao_trabalho == 'Autonomia'){ ?> selected="selected" <?php } ?> >Autonomia</option>
					<option value="Gosto pessoal" <?php if ($form4->razao_trabalho == 'Gosto pessoal'){ ?> selected="selected" <?php } ?> >Gosto pessoal</option>
					<option value="Ajuda familiar" <?php if ($form4->razao_trabalho == 'Ajuda familiar'){ ?> selected="selected" <?php } ?> >Ajuda familiar</option>
			</select>
		</div>
		<div class="col s12 l12"></div>
		<div class="col s12 l3 " >
			<br>
			<label class="texto" for="legalizado">2.6 Trabalho Legalizado </label class="texto">
			<p><input class="with-gap" name="legalizado" type="radio" value="Sim" id="e4_8" required <?php if($form4->legalizado == 'Sim'){ ?> checked <?php } ?> />
			<label for="e4_8">Sim</label></p>
			<p><input class="with-gap" name="legalizado" type="radio" value="Não"  id="e4_9" <?php if($form4->legalizado == 'Não'){ ?> checked <?php } ?> />
			<label for="e4_9">Não</label></p>  
		</div>
		<div class="col s12 l3 " >
			<br>	
			<label class="texto" for="insalubre">2.7 Trabalho Insalubre</label class="texto">
			<p><input class="with-gap" name="insalubre" type="radio" value="Sim" id="e4_10" required <?php if($form4->insalubre == 'Sim'){ ?> checked <?php } ?> />
			<label for="e4_10">Sim</label></p>
			<p><input class="with-gap" name="insalubre" type="radio" value="Não"  id="e4_11" <?php if($form4->insalubre == 'Não'){ ?> checked <?php } ?> />
			<label for="e4_11">Não</label></p> 
		</div>
		<div class="col s12 l12"></div>
		<div class="col s12 l4 " >
			<br>
			<label class="texto" for="tipo_trabalho">2.8 Tipo de trabalho</label class="texto">
			<textarea class="materialize-textarea" name="tipo_trabalho" id="" cols="30" rows="4" placeholder="Descreva a atividade caso exista, ou deixe em branco caso não." required="required"><?php echo $form4->tipo_trabalho; ?></textarea>
		</div>
		<div class="col l12 s12">
			<button class="btn waves-effect waves-light blue" type="submit" name="action" formaction="<?php echo base_url('Pessoa/edit_educacao_emprego/'.$id);?>">Salvar</button>
			<br><br>
		</div>
	</div>
</div>
</form>