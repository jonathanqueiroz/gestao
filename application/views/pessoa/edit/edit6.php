<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php echo form_open('Pessoa/edit_ginegologico_sexualidade/'.$id); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Gineco-Urologico e Sexualidade</h4><br></div>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="col s12 l12 ">1. Gineco-Urologico: <br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="menarca_espermarca">1.1 Idade Menarca / Espermarca </label>
			<input type="number" name="menarca_espermarca" min="1" required="required" value="<?php echo $form6->menarca_espermarca; ?>"/> 
		</div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="data_menstruacao">1.2 Data da Última Menstruação </label>
			<input type="text" name="data_menstruacao" placeholder="Entre com a Data, 'Não Lembra' ou 'Não Corresponde'" required="required" value="<?php echo $form6->data_menstruacao; ?>" />	
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="ciclos">1.3 Ciclos Regulares </label>
			<p><input class="with-gap" name="ciclos" type="radio" value="Sim" id="e6_1" required <?php if($form6->ciclos == 'Sim'){ ?> checked <?php } ?> />
			<label for="e6_1">Sim</label></p>
			<p><input class="with-gap" name="ciclos" type="radio" value="Não"  id="e6_2" <?php if($form6->ciclos == 'Não'){ ?> checked <?php } ?> />
			<label for="e6_2">Não</label></p>  
			<p><input class="with-gap" name="ciclos" type="radio" value="Não Corresponde"  id="e6_3" <?php if($form6->ciclos == 'Não Corresponde'){ ?> checked <?php } ?> />
			<label for="e6_3">Não Corresponde </label></p>   	
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="dismonorreia">1.4 Dismenorréia</label>
			<p><input class="with-gap" name="dismonorreia" type="radio" value="Sim" id="e6_4" required <?php if($form6->dismonorreia == 'Sim'){ ?> checked <?php } ?> />
			<label for="e6_4">Sim</label></p>
			<p><input class="with-gap" name="dismonorreia" type="radio" value="Não"  id="e6_5" <?php if($form6->dismonorreia == 'Não'){ ?> checked <?php } ?> />
			<label for="e6_5">Não</label></p>  
			<p><input class="with-gap" name="dismonorreia" type="radio" value="Não Corresponde"  id="e6_6" <?php if($form6->dismonorreia == 'Não Corresponde'){ ?> checked <?php } ?> />
			<label for="e6_6">Não Corresponde </label></p> 
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="patologico_secrecao">1.5 Fluxo Patológico / Secreção Peniana </label>
			<p><input class="with-gap" name="patologico_secrecao" type="radio" value="Sim" id="e6_7" required <?php if($form6->patologico_secrecao == 'Sim'){ ?> checked <?php } ?> />
			<label for="e6_7">Sim</label></p>
			<p><input class="with-gap" name="patologico_secrecao" type="radio" value="Não"  id="e6_8" <?php if($form6->patologico_secrecao == 'Não'){ ?> checked <?php } ?> />
			<label for="e6_8">Não</label></p>  
			<p><input class="with-gap" name="patologico_secrecao" type="radio" value="Não Corresponde"  id="e6_9" <?php if($form6->patologico_secrecao == 'Não Corresponde'){ ?> checked <?php } ?> />
			<label for="e6_9">Não Corresponde </label></p> 
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="dst">1.6 Doença de Transmissão Sexual </label>
			<textarea class="materialize-textarea" name="dst" id="" cols="30" rows="4" placeholder="Descreva qual ou escreva 'Não' caso não se aplique." required="required"><?php echo $form6->dst; ?></textarea>
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="num_gestacoes">1.7 Número de Gestações </label>
			<br><br>
			<input type="number" name="num_gestacoes" min="0" placeholder="Coloque 0 se não se aplicar" required="required" value="<?php echo $form6->num_gestacoes; ?>" />
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="num_filhos">1.8 Número de Filhos </label>
			<br><br>
			<input type="number" name="num_filhos" min="0" placeholder="Coloque 0 se não se aplicar" required="required" value="<?php echo $form6->num_filhos; ?>" />
			
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="num_abortos">1.9 Número de Abortos</label>
			<br><br>
			<input type="number" name="num_abortos" min="0" placeholder="Coloque 0 se não se aplicar" required="required" value="<?php echo $form6->num_abortos; ?>" />
		</div>

		<div class="col s12 l12 "><br>2. Sexualidade <br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="e6_elacoes_sexuais">2.1 Relações Sexuais</label>
			<br><br>
			<select name="relacoes_sexuais" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Não" <?php if ($form6->relacoes_sexuais == 'Não'){ ?> selected="selected" <?php }?> >Não</option>
				<option value="Hétero" <?php if ($form6->relacoes_sexuais == 'Hétero'){ ?> selected="selected" <?php }?> >Hétero</option>
				<option value="Homo" <?php if ($form6->relacoes_sexuais == 'Homo'){ ?> selected="selected" <?php }?> >Homo</option>
				<option value="Ambos" <?php if ($form6->relacoes_sexuais == 'Ambos'){ ?> selected="selected" <?php }?>>Ambos</option>
			</select>
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="informacao">2.2 Necessita Informação </label>
			<p><input class="with-gap" name="informacao" type="radio" value="Sim" id="e6_10" required <?php if($form6->informacao == 'Sim'){ ?> checked <?php } ?> />
			<label for="e6_10">Sim</label></p>
			<p><input class="with-gap" name="informacao" type="radio" value="Não"  id="e6_11" <?php if($form6->informacao == 'Não'){ ?> checked <?php } ?> />
			<label for="e6_11">Não</label></p>
		</div>
				<div class="col s12 l3  " >
			<br>
			<label class="texto" for="problema_sexuais">2.3 Problemas nas Relações Sexuais</label>
			<p><input class="with-gap" name="problema_sexuais" type="radio" value="Sim" id="e6_14" required <?php if($form6->problema_sexuais == 'Sim'){ ?> checked <?php } ?> />
			<label for="e6_14">Sim</label></p>
			<p><input class="with-gap" name="problema_sexuais" type="radio" value="Não"  id="e6_15" <?php if($form6->problema_sexuais == 'Não'){ ?> checked <?php } ?> />
			<label for="e6_15">Não</label></p>  
			<p><input class="with-gap" name="problema_sexuais" type="radio" value="Não Corresponde"  id="e6_16" <?php if($form6->problema_sexuais == 'Não Corresponde'){ ?> checked <?php } ?> />
			<label for="e6_16">Não Corresponde </label></p>  
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="parceiro">2.4 Parceiro(a) </label>
			<p><input class="with-gap" name="parceiro" type="radio" value="Único(a)" id="e6_12" required <?php if($form6->parceiro == 'Único(a)'){ ?> checked <?php } ?> />
			<label for="e6_12">Único(a)</label></p>
			<p><input class="with-gap" name="parceiro" type="radio" value="Vários(as)"  id="e6_13" <?php if($form6->parceiro == 'Vários(as)'){ ?> checked <?php } ?> />
			<label for="e6_13">Vários(as)</label></p>
			<p><input class="with-gap" name="parceiro" type="radio" value="Não Corresponde"  id="e6_17" <?php if($form6->parceiro == 'Não Corresponde'){ ?> checked <?php } ?> />
			<label for="e6_17">Não Corresponde </label></p> 
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="idade_sexo">2.5 Idade de Início das Relações Sexuais</label>
			<input type="number" name="idade_sexo" min="0" placeholder="Coloque 0 se não se aplicar" required="required" value="<?php echo $form6->idade_sexo;?>" />
			
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="preservativos">2.6 Preservativos </label>
			<br><br>
			<select name="preservativos" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Sempre" <?php if ($form6->preservativos == 'Sempre'){ ?> selected="selected" <?php } ?> >Sempre</option>
				<option value="Ás Vezes" <?php if ($form6->preservativos == 'Ás Vezes'){ ?> selected="selected" <?php } ?> >Ás vezes</option>
				<option value="Nunca" <?php if ($form6->preservativos == 'Nunca'){ ?> selected="selected" <?php } ?> >Nunca</option>
				<option value="Não Corresponde" <?php if ($form6->preservativos == 'Não Corresponde'){ ?> selected="selected" <?php } ?> >Não corresponde</option>
			</select>
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="outros_metodos">2.7 Outros Métodos</label>
			<textarea class="materialize-textarea" name="outros_metodos" id="" cols="30" rows="4" placeholder="Entre com o método, 'Não Lembra' ou 'Não Corresponde'" required="required"><?php echo $form6->outros_metodos ?></textarea>
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="abuso_sexual">2.8 Abuso Sexual</label>
			<textarea class="materialize-textarea" name="abuso_sexual" id="" cols="30" rows="4" placeholder="Descreva caso positivo ou entre com 'Não'" required="required"><?php echo $form6->outros_metodos ?> </textarea>
		</div>
		<div class="col l12 s12">
			<br>
			<button class="btn waves-effect waves-light blue" type="submit" name="action">Salvar</button>
			<br><br>
		</div>
	</div>
</div>
</form>