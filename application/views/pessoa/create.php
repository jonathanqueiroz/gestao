<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open(base_url('pessoa/create')); ?>    
    <div>
        <label for="nome">Nome: <br></label>
        <td><input type="text" name="nome" />
        <br><br>
        <label for="email">Email: <br></label></td>
        <input type="email" name="email">
        <br><br>
        <label for="telefone">Telefone: <br></label>
        <td><input type="text" name="telefone" />
        <br><br>
        <label for="nascimento">Data de Nascimento: <br></label>
        <td><input type="date" name="nascimento" />
        <br><br>
        <label for="endereco">Endereço: <br></label>
        <td><input type="text" name="endereco" />
        <br><br>
        <input type="submit" name="submit" value="Cadastrar" />
        </tr>
    </div>   
</form>