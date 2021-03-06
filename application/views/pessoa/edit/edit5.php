<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php echo form_open('Pessoa/edit_vida_social/'.$id); 
echo validation_errors();?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Vida Social e Hábitos</h4><br></div>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="col s12 l12 ">1. Vida Social: <br></div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="namorado">1.1 Namorado(a) </label class="texto">
			<p><input class="with-gap" name="namorado" type="radio" value="Sim" id="e5_1" required <?php if($form5->namorado == 'Sim'){ ?> checked <?php } ?> />
			<label for="e5_1">Sim</label></p>
			<p><input class="with-gap" name="namorado" type="radio" value="Não"  id="e5_2" <?php if($form5->namorado == 'Não'){ ?> checked <?php } ?> />
			<label for="e5_2">Não</label></p>   				
		</div>
		<div class="col s12 l2 " >
			<br>			
			<label class="texto" for="amigos">1.2 Amigos </label class="texto">
			<p><input class="with-gap" name="amigos" type="radio" value="Sim" id="e5_3" required <?php if($form5->amigos == 'Sim'){ ?> checked <?php } ?> />
			<label for="e5_3">Sim</label></p>
			<p><input class="with-gap" name="amigos" type="radio" value="Não"  id="e5_4" <?php if($form5->amigos == 'Não'){ ?> checked <?php } ?> />
			<label for="e5_4">Não</label></p>  		
		</div>
		<div class="col s12 l3  " >
			<br>			
			<label class="texto" for="atividades_grupo">1.3 Atividades de Grupo</label class="texto">
			<p><input class="with-gap" name="atividades_grupo" type="radio" value="Sim" id="e5_5" required <?php if($form5->atividades_grupo == 'Sim'){ ?> checked <?php } ?> />
			<label for="e5_5">Sim</label></p>
			<p><input class="with-gap" name="atividades_grupo" type="radio" value="Não"  id="e5_6" <?php if($form5->atividades_grupo == 'Não'){ ?> checked <?php } ?> />
			<label for="e5_6">Não</label></p>  			
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="esportes">1.4 Esportes </label class="texto">
			<p><input class="with-gap" name="esportes" type="radio" value="Sim" id="e5_7" required <?php if($form5->esportes == 'Sim'){ ?> checked <?php } ?> />
			<label for="e5_7">Sim</label></p>
			<p><input class="with-gap" name="esportes" type="radio" value="Não"  id="e5_8" <?php if($form5->esportes == 'Não'){ ?> checked <?php } ?> />
			<label for="e5_8">Não</label></p>  			
		</div>
		<div class="col s12 l3 " >
			<br>			
			<label class="texto" for="televisao">1.5 Televisão </label class="texto">
			<p><input class="with-gap" name="televisao" type="radio" value="Sim" id="e5_9" required <?php if($form5->televisao == 'Sim'){ ?> checked <?php } ?> />
			<label for="e5_9">Sim</label></p>
			<p><input class="with-gap" name="televisao" type="radio" value="Não"  id="e5_10" <?php if($form5->televisao == 'Não'){ ?> checked <?php } ?> />
			<label for="e5_10">Não</label></p>  
			<p><input class="with-gap" name="televisao" type="radio" value="Ás Vezes"  id="e5_11" <?php if($form5->televisao == 'Ás Vezes'){ ?> checked <?php } ?> />
			<label for="e5_11">Ás Vezes</label></p>  
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l4  " >
			<br>			
			<label class="texto" for="aceitao">1.6 Aceitação </label class="texto">
			<br><br>
			<select name="aceitao" id="S5_1" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Aceito" <?php if ($form5->aceitao == 'Aceito'){ ?> selected="selected" <?php } ?> >Aceito</option>
				<option value="Rejeitado" <?php if ($form5->aceitao == 'Rejeitado'){ ?> selected="selected" <?php } ?> >Rejeitado</option>
				<option value="Ignorado" <?php if ($form5->aceitao == 'Ignorado'){ ?> selected="selected" <?php } ?> >Ignorado</option>
				<option value="Não sabe" <?php if ($form5->aceitao == 'Não sabe'){ ?> selected="selected" <?php } ?> >Não sabe</option>
			</select> 	
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="outras_atividades">1.7 Outras Atividades</label class="texto">
			<textarea class="materialize-textarea" name="outras_atividades" id="" cols="30" rows="4" placeholder="Descreva as atividades ou se a resposta for negativa apenas escreva 'Não'." required="required"><?php echo $form5->outras_atividades; ?></textarea>
		</div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="e5_eligiao">1.8 Participa de Atividades Religiosas</label class="texto">
			<textarea class="materialize-textarea" name="religiao" id="" cols="30" rows="4" placeholder="Se participa diga qual ou se a resposta for negativa apenas escreva 'Não'." required="required"><?php echo $form5->religiao; ?></textarea>
		</div>
		<div class="col s12 l12 "><br>2. Hábitos <br></div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="alimentacao">2.1 Alimentação Adequada </label class="texto">
			<p><input class="with-gap" name="alimentacao" type="radio" value="Sim" id="e5_12" required <?php if($form5->alimentacao == 'Sim'){ ?> checked <?php } ?> />
			<label for="e5_12">Sim</label></p>
			<p><input class="with-gap" name="alimentacao" type="radio" value="Não"  id="e5_13" <?php if($form5->alimentacao == 'Não'){ ?> checked <?php } ?> />
			<label for="e5_13">Não</label></p>   
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="sono">2.2 Sono Normal </label class="texto">
			<p><input class="with-gap" name="sono" type="radio" value="Sim" id="e5_14" required <?php if($form5->sono == 'Sim'){ ?> checked <?php } ?> />
			<label for="e5_14">Sim</label></p>
			<p><input class="with-gap" name="sono" type="radio" value="Não"  id="e5_15" <?php if($form5->sono == 'Não'){ ?> checked <?php } ?> />
			<label for="e5_15">Não</label></p>  
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="tabagismo">2.3 Tabagismo</label class="texto">
			<p><input class="with-gap" name="tabagismo" type="radio" value="Sim" id="e5_16" required <?php if($form5->tabagismo == 'Sim'){ ?> checked <?php } ?> />
			<label for="e5_16">Sim</label></p>
			<p><input class="with-gap" name="tabagismo" type="radio" value="Não"  id="e5_17" <?php if($form5->tabagismo == 'Não'){ ?> checked <?php } ?> />
			<label for="e5_17">Não</label></p>  
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="alcool">2.4 Álcool </label class="texto">
			<p><input class="with-gap" name="alcool" type="radio" value="Sim"  id="e5_18" required <?php if($form5->alcool == 'Sim'){ ?> checked <?php } ?> />
			<label for="e5_18">Sim</label></p>
			<p><input class="with-gap" name="alcool" type="radio" value="Não"  id="e5_19" <?php if($form5->alcool == 'Não'){ ?> checked <?php } ?> />
			<label for="e5_19">Não</label></p>  
			<p><input class="with-gap" name="alcool" type="radio" value="Ás Vezes"  id="e5_20" <?php if($form5->alcool == 'Ás Vezes'){ ?> checked <?php } ?> />
			<label for="e5_20">Ás Vezes</label></p> 
			<br> 
		</div>
		<div class="col s12 l2  " >
			<br>
			<label class="texto" for="dirige">2.5 Dirige Veículos</label class="texto">
			<p><input class="with-gap" name="dirige" type="radio" value="Sim"  id="e5_21" required <?php if($form5->dirige == 'Sim'){ ?> checked <?php } ?> />
			<label for="e5_21">Sim</label></p>
			<p><input class="with-gap" name="dirige" type="radio" value="Não"  id="e5_22" <?php if($form5->dirige == 'Não'){ ?> checked <?php } ?> />
			<label for="e5_22">Não</label></p>  
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="e5_efeicoes_dia">2.6 Refeições por Dia</label class="texto">
			<input type="number" min="0" name="refeicoes_dia" required="required" value="<?php echo $form5->refeicoes_dia;?>" />
		</div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="idade_tabagismo">2.7 Idade de Início do Fumo </label class="texto">
			<input type="number" min="0" name="idade_tabagismo" required="required" value="<?php echo $form5->idade_tabagismo;?>" />	
		</div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="idade_alcool">2.8 Idade Início no Álcool</label class="texto">
			<input type="number" min="0" name="idade_alcool" required="required" value="<?php echo $form5->idade_alcool;?>" />
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="outras_substancias">2.9 Outras Substâncias</label class="texto">
			<textarea class="materialize-textarea" name="outras_substancias" id="" cols="30" rows="3" placeholder="Descreva quais utiliza, ou deixe em branco caso não." required="required"><?php echo $form5->outras_substancias; ?></textarea>
		</div>
		<div class="col l12 s12">
			<button class="btn waves-effect waves-light blue" type="submit" name="action" formaction="<?php echo base_url('Pessoa/edit_vida_social/'.$id);?>" >Salvar</button>
			<br><br>
		</div>
	</div>
</div>
</form>