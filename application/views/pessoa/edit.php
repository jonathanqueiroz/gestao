<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('pessoa/edit/'.$pessoa_item['id_pessoa']); ?>
    <div>
        <label for="nome">Nome: <br></label>
        <td><input type="text" name="nome" value="<?php echo $pessoa_item['nome']; ?>"/>
        <br><br>
        <label for="email">Email: <br></label></td>
        <input type="email" name="email" value="<?php echo $pessoa_item['email']; ?>" />
        <br><br>
        <label for="telefone">Telefone: <br></label>
        <td><input type="text" name="telefone" value="<?php echo $pessoa_item['telefone']; ?>" />
        <br><br>
        <label for="nascimento">Data de Nascimento: <br></label>
        <td><input type="date" name="nascimento" value="<?php echo $pessoa_item['data_nascimento']; ?>" />
        <br><br>
        <label for="endereco">Endereço: <br></label>
        <td><input type="text" name="endereco" value="<?php echo $pessoa_item['endereco']; ?>" />
        <br><br>
        <input type="submit" name="submit" value="Atualizar" />
        </tr>
    </div> 
</form>