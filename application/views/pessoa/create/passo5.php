<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php echo form_open('Pessoa/vida_social/'.$id); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Vida Social e Hábitos</h4><br></div>
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<div class="col s12 l12 ">1. Vida Social: <br></div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="namorado">1.1 Namorado(a) </label class="texto">
			<p><input class="with-gap" name="namorado" type="radio" value="Sim" id="r1" required />
			<label for="r1">Sim</label></p>
			<p><input class="with-gap" name="namorado" type="radio" value="Não"  id="r2" />
			<label for="r2">Não</label></p>  				
		</div>
		<div class="col s12 l2 " >
			<br>			
			<label class="texto" for="amigos">1.2 Amigos </label class="texto">
			<p><input class="with-gap" name="amigos" type="radio" value="Sim" id="r3" required />
			<label for="r3">Sim</label></p>
			<p><input class="with-gap" name="amigos" type="radio" value="Não"  id="r4" />
			<label for="r4">Não</label></p>  		
		</div>
		<div class="col s12 l3  " >
			<br>			
			<label class="texto" for="atividades_grupo">1.3 Atividades de Grupo</label class="texto">
			<p><input class="with-gap" name="atividades_grupo" type="radio" value="Sim" id="r5" required />
			<label for="r5">Sim</label></p>
			<p><input class="with-gap" name="atividades_grupo" type="radio" value="Não"  id="r6" />
			<label for="r6">Não</label></p>  			
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="esportes">1.4 Esportes </label class="texto">
			<p><input class="with-gap" name="esportes" type="radio" value="Sim" id="r7" required />
			<label for="r7">Sim</label></p>
			<p><input class="with-gap" name="esportes" type="radio" value="Não"  id="r8" />
			<label for="r8">Não</label></p>  			
		</div>
		<div class="col s12 l3 " >
			<br>			
			<label class="texto" for="televisao">1.5 Televisão </label class="texto">
			<p><input class="with-gap" name="televisao" type="radio" value="Sim" id="r9" required />
			<label for="r9">Sim</label></p>
			<p><input class="with-gap" name="televisao" type="radio" value="Não"  id="r10" />
			<label for="r10">Não</label></p>  
			<p><input class="with-gap" name="televisao" type="radio" value="Ás Vezes"  id="r11" />
			<label for="r11">Ás Vezes</label></p>  
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l4  " >
			<br>			
			<label class="texto" for="aceitao">1.6 Aceitação </label class="texto">
			<br><br>
			<select name="aceitao" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Aceito">Aceito</option>
				<option value="Rejeitado">Rejeitado</option>
				<option value="Ignorado">Ignorado</option>
				<option value="Não sabe">Não sabe</option>
			</select> 	
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="outras_atividades">1.7 Outras Atividades</label class="texto">
			<textarea class="materialize-textarea" name="outras_atividades" id="" cols="30" rows="4" placeholder="Descreva as atividades ou se a resposta for negativa apenas escreva 'Não'." required="required"></textarea>
		</div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="religiao">1.8 Participa de Atividades Religiosas</label class="texto">
			<textarea class="materialize-textarea" name="religiao" id="" cols="30" rows="4" placeholder="Se participa diga qual ou se a resposta for negativa apenas escreva 'Não'." required="required"></textarea>
		</div>
		<div class="col s12 l12 "><br>2. Hábitos <br></div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="alimentacao">2.1 Alimentação Adequada </label class="texto">
			<p><input class="with-gap" name="alimentacao" type="radio" value="Sim" id="r12" required />
			<label for="r12">Sim</label></p>
			<p><input class="with-gap" name="alimentacao" type="radio" value="Não"  id="r13" />
			<label for="r13">Não</label></p>   
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="sono">2.2 Sono Normal </label class="texto">
			<p><input class="with-gap" name="sono" type="radio" value="Sim" id="r14" required />
			<label for="r14">Sim</label></p>
			<p><input class="with-gap" name="sono" type="radio" value="Não"  id="r15" />
			<label for="r15">Não</label></p>  
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="tabagismo">2.3 Tabagismo</label class="texto">
			<p><input class="with-gap" name="tabagismo" type="radio" value="Sim" id="r16" required />
			<label for="r16">Sim</label></p>
			<p><input class="with-gap" name="tabagismo" type="radio" value="Não"  id="r17" />
			<label for="r17">Não</label></p>  
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="alcool">2.4 Álcool </label class="texto">
			<p><input class="with-gap" name="alcool" type="radio" value="Sim"  id="r18" />
			<label for="r18">Sim</label></p>
			<p><input class="with-gap" name="alcool" type="radio" value="Não"  id="r19" />
			<label for="r19">Não</label></p>  
			<p><input class="with-gap" name="alcool" type="radio" value="Ás Vezes"  id="r20" />
			<label for="r20">Ás Vezes</label></p> 
			<br> 
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="dirige">2.5 Dirige Veículos</label class="texto">
			<p><input class="with-gap" name="dirige" type="radio" value="Sim"  id="r21" />
			<label for="r21">Sim</label></p>
			<p><input class="with-gap" name="dirige" type="radio" value="Não"  id="r22" />
			<label for="r22">Não</label></p>  
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="refeicoes_dia">2.6 Refeições por Dia</label class="texto">
			<input type="number" min="0" name="refeicoes_dia" required="required" />
		</div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="idade_tabagismo">2.7 Idade de Início do Fumo </label class="texto">
			<input type="number" min="0" name="idade_tabagismo" required="required" />	
		</div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="idade_alcool">2.8 Idade Início no Álcool</label class="texto">
			<input type="number" min="0" name="idade_alcool" required="required" />
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="outras_substancias">2.9 Outras Substâncias</label class="texto">
			<textarea class="materialize-textarea" name="outras_substancias" id="" cols="30" rows="3" placeholder="Descreva quais utiliza, ou deixe em branco caso não." required="required"></textarea>
		</div>
		<div class="col l12 s12">
			<button class="btn waves-effect waves-light blue" type="submit" name="action">Salvar</button>
			<br><br>
		</div>
	</div>
</div>