<form action="<?php echo base_url('usuario/login'); ?>" method="post">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="medium-6 large-4 large-offset-4 cell">
				<label for="login">Email:
					<input type="email" name="login" required="required">
				</label>
				</div>
			</div>
			<br>
			<div class="grid-x grid-margin-x">
				<div class="medium-6 large-4 large-offset-4 cell">
					<label for="senha">Senha: 
						<input type="password" name="senha" required="required"></label>
				</div>
			</div>
			<br>
			<div class="grid-x grid-margin-x">
				<div class="medium-6 large-4 large-offset-4 cell cell">
					<input type="submit" value="Entrar">
				</div>
			</div>
	</div>
</form>
