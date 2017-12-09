<form action="<?php echo base_url('Pessoa/quantidadeAtendidos'); ?>" method="post">
	<input type="hidden" name="id_contrib" value="<?php if(isset($contrib)) echo $contrib->id_contribuintes ?>">
	<div class="row">
		<div class="col s12 l4 push-l4" style="background-color: white;">
		<br>
		<h4 class="center">Contribuintes</h4>
		<br>
		<div class="col s12 l10 push-l1">
			<label for="num_docentes">Quantidade de Docentes</label>
			<input type="number" name="num_docentes" min="1" value="<?php if(isset($contrib)) echo $contrib->num_docentes; ?>">
		</div>
		<div class="col l12 s12"></div>
		<div class="col s12 l10 push-l1">
			<label for="num_bolsistas">Quantidade de Bolsistas</label>
			<input type="number" name="num_bolsistas" min="1" value="<?php if(isset($contrib)) echo $contrib->num_bolsistas; ?>">
		</div>
		<div class="col l12 s12"></div>
		<div class="col s12 l10 push-l1">
			<label for="num_voluntarios">Quantidade de Voluntários</label>
			<input type="number" name="num_voluntarios" min="1" value="<?php if(isset($contrib)) echo $contrib->num_voluntarios; ?>">
		</div>
		<div class="col l12 s12"></div>
		<div class="col s12 l10 push-l1">
			<label for="num_atendidos">Quantidade de Pessoas Atendidas</label>
			<input type="number" name="num_atendidos" min="1" value="<?php if(isset($contrib)) echo $contrib->num_atendidos; ?>">
		</div>
		<div class="col s12 l10 push-l1">
				<label for="obs">Observações</label>
				<textarea name="obs_contrib" id="" cols="30" rows="20" id="textarea1" class="materialize-textarea" ><?php if(isset($contrib)) echo $contrib->obs_contrib; ?></textarea>
				<br><br>
			</div>
		<div class="col l6 s6 push-l1">
			<br>
			<button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
			<br><br>
		</div>
	</div>
	</div>
</form>