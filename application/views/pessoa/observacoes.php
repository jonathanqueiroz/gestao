<form action="<?php echo base_url('Pessoa/observacoes/'.$id); ?>" method="post">
	<input type="hidden" name="id_obs" value="<?php if(isset($obs)) echo $obs->id_obs ?>">
	<input type="hidden" name="fk_pessoa" value="<?php if(isset($obs)) echo $obs->fk_pessoa ?>">
	<div class="row">
		<div class="col s12 l4 push-l4" style="background-color: white;">
			<br>
			<h4 class="center">Observações sobre o Jovem</h4>
			<br>
			<div class="col s12 l10 push-l1">
				<label for="obs">Observações</label>
				<textarea name="obs" id="" cols="30" rows="20" id="textarea1" class="materialize-textarea" placeholder="Descreva características sobre o jovem, evolução desde sua entrevista entre outras observações." ><?php if(isset($obs)) echo $obs->observacoes; ?></textarea>
				<br><br>
			</div>
			<br><br>
			<div class="col l6 s6 push-l1">
			<br>
			<button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
			<br><br>
		</div>
		</div>
		<br><br>
	</div>
</form>