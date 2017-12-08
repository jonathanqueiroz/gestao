<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<?php echo form_open('Pessoa/ginegologico_sexualidade/'.$id); ?>
<div class="form_cadastro form_box">
	<br>
	<div class="row">
		<div class="col s12 l12"><h4>Gineco-Urologico e Sexualidade</h4><br></div>
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<div class="col s12 l12 ">1. Gineco-Urologico: <br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="menarca_espermarca">1.1 Idade Menarca / Espermarca </label>
			<input type="number" name="menarca_espermarca" min="1" required="required" /> 
		</div>
		<div class="col s12 l4  " >
			<br>
			<label class="texto" for="data_menstruacao">1.2 Data da Última Menstruação </label>
			<input type="text" name="data_menstruacao" placeholder="Entre com a Data, 'Não Lembra' ou 'Não Corresponde'" required="required" />	
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="ciclos">1.3 Ciclos Regulares </label>
			<p><input class="with-gap" name="ciclos" type="radio" value="Sim" id="r6_1" required />
			<label for="r6_1">Sim</label></p>
			<p><input class="with-gap" name="ciclos" type="radio" value="Não"  id="r6_2" />
			<label for="r6_2">Não</label></p>  
			<p><input class="with-gap" name="ciclos" type="radio" value="Não Corresponde"  id="r6_3" />
			<label for="r6_3">Não Corresponde </label></p>   	
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="dismonorreia">1.4 Dismenorréia</label>
			<p><input class="with-gap" name="dismonorreia" type="radio" value="Sim" id="r6_4" required />
			<label for="r6_4">Sim</label></p>
			<p><input class="with-gap" name="dismonorreia" type="radio" value="Não"  id="r6_5" />
			<label for="r6_5">Não</label></p>  
			<p><input class="with-gap" name="dismonorreia" type="radio" value="Não Corresponde"  id="r6_6" />
			<label for="r6_6">Não Corresponde </label></p> 
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="patologico_secrecao">1.5 Fluxo Patológico / Secreção Peniana </label>
			<p><input class="with-gap" name="patologico_secrecao" type="radio" value="Sim" id="r6_7" required />
			<label for="r6_7">Sim</label></p>
			<p><input class="with-gap" name="patologico_secrecao" type="radio" value="Não"  id="r6_8" />
			<label for="r6_8">Não</label></p>  
			<p><input class="with-gap" name="patologico_secrecao" type="radio" value="Não Corresponde"  id="r6_9" />
			<label for="r6_9">Não Corresponde </label></p> 
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="dst">1.6 Doença de Transmissão Sexual </label>
			<textarea class="materialize-textarea" name="dst" id="" cols="30" rows="4" placeholder="Descreva qual ou escreva 'Não' caso não se aplique." required="required"></textarea class="materialize-textarea">
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="num_gestacoes">1.7 Número de Gestações </label>
			<br><br>
			<input type="number" name="num_gestacoes" min="0" placeholder="Coloque 0 se não se aplicar" required="required" />
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="num_filhos">1.8 Número de Filhos </label>
			<br><br>
			<input type="number" name="num_filhos" min="0" placeholder="Coloque 0 se não se aplicar" required="required" />
			
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="num_abortos">1.9 Número de Abortos</label>
			<br><br>
			<input type="number" name="num_abortos" min="0" placeholder="Coloque 0 se não se aplicar" required="required" />
		</div>

		<div class="col s12 l12 "><br>2. Sexualidade <br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="r6_elacoes_sexuais">2.1 Relações Sexuais</label>
			<br><br>
			<select name="relacoes_sexuais" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Não">Não</option>
				<option value="Hétero">Hétero</option>
				<option value="Homo">Homo</option>
				<option value="Ambos">Ambos</option>
			</select>
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="informacao">2.2 Necessita Informação </label>
			<p><input class="with-gap" name="informacao" type="radio" value="Sim" id="r6_10" required />
			<label for="r6_10">Sim</label></p>
			<p><input class="with-gap" name="informacao" type="radio" value="Não"  id="r6_11" />
			<label for="r6_11">Não</label></p>
		</div>
				<div class="col s12 l3  " >
			<br>
			<label class="texto" for="problema_sexuais">2.3 Problemas nas Relações Sexuais</label>
			<p><input class="with-gap" name="problema_sexuais" type="radio" value="Sim" id="r6_14" required />
			<label for="r6_14">Sim</label></p>
			<p><input class="with-gap" name="problema_sexuais" type="radio" value="Não"  id="r6_15" />
			<label for="r6_15">Não</label></p>  
			<p><input class="with-gap" name="problema_sexuais" type="radio" value="Não Corresponde"  id="r6_16" />
			<label for="r6_16">Não Corresponde </label></p>  
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="parceiro">2.4 Parceiro(a) </label>
			<p><input class="with-gap" name="parceiro" type="radio" value="Único(a)" id="r6_12" required />
			<label for="r6_12">Único(a)</label></p>
			<p><input class="with-gap" name="parceiro" type="radio" value="Vários(as)"  id="r6_13" />
			<label for="r6_13">Vários(as)</label></p>
			<p><input class="with-gap" name="parceiro" type="radio" value="Não Corresponde"  id="r6_17" />
			<label for="r6_17">Não Corresponde </label></p> 
		</div>
		<div class="col s12 l12"><br></div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="idade_sexo">2.5 Idade de Início das Relações Sexuais</label>
			<input type="number" name="idade_sexo" min="0" placeholder="Coloque 0 se não se aplicar" required="required" />
			
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="preservativos">2.6 Preservativos </label>
			<br><br>
			<select name="preservativos" id="" required="required">
				<option value="" disabled="disabled" selected="selected">Selecione</option>
				<option value="Sempre">Sempre</option>
				<option value="Ás Vezes">Ás vezes</option>
				<option value="Nunca">Nunca</option>
				<option value="Não Corresponde">Não corresponde</option>
			</select>
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="outros_metodos">2.7 Outros Métodos</label>
			<textarea class="materialize-textarea" name="outros_metodos" id="" cols="30" rows="4" placeholder="Entre com o método, 'Não Lembra' ou 'Não Corresponde'" required="required"></textarea class="materialize-textarea">
		</div>
		<div class="col s12 l3  " >
			<br>
			<label class="texto" for="abuso_sexual">2.8 Abuso Sexual</label>
			<textarea class="materialize-textarea" name="abuso_sexual" id="" cols="30" rows="4" placeholder="Descreva caso positivo ou entre com 'Não'" required="required"></textarea class="materialize-textarea">
		</div>
		<div class="col l12 s12">
			<br>
			<button class="btn waves-effect waves-light blue" type="submit" name="action" formaction="<?php echo base_url('Pessoa/ginegologico_sexualidade/'.$id);?>" >Salvar</button>
			<br><br>
		</div>
	</div>
</div>
</form>