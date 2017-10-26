<div>
	<p><?php echo $title; ?></p>
	<form method="post" action="<?php base_url('cadastroPessoa'); ?>" enctype="multipart/form-data">
	
	<label for="name">Nome: <br></label>
	<input type="text" name="name">
	<br>
	<label for="email">Email: <br></label>
	<input type="email" name="email">
	<br>
	<label for="telefone">Telefone: <br></label>
	<input type="text" name="telefone">
	<br>
	<label for="nascimento">Data de Nascimento: <br></label>
	<input type="date" name="nascimento">
	<br>
	<label for="endereco">Endereço: <br></label>
	<input type="text" name="endereco">
	<br>
	<label for="cidade">Cidade: <br></label>
	<select name="cidade" id="">
		<option value="1" selected="selected" disabled="disabled">Selecione</option>
		<option value="2">Ilhéus</option>
		<option value="3">Itabuna</option>
	</select>
	<br>
	<label for="sexo">Sexo: <br></label>
	<select name="sexo" id="">
		<option value="1" selected="selected" disabled="disabled">Selecione</option>
		<option value="2">Feminino</option>
		<option value="3">Masculino</option>
	</select>
	<br><br>
	<input type="submit">
	</form>
	<br>
	<br>
	<br>
</div>
