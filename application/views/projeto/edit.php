<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open_multipart(base_url('projeto/edit/'.$projeto_item['id_projeto'])); ?>  

    <div>
        <label for="titulo">Titulo: <br></label>
        <td><input type="text" name="titulo" value="<?php echo $projeto_item['titulo']?>" />
        <br><br>
        <label for="orientador">Orientador: <br></label></td>
        <input type="text" name="orientador" value="<?php echo $projeto_item['orientador']?>" />
        <br><br>
        <label for="descricao">Descrição: <br></label>
        <td><input type="text" name="descricao" value="<?php echo $projeto_item['descricao']?>" />
        <br><br>
        <label for="departamento">Departamento: <br></label>
        <td><input type="text" name="departamento" value="<?php echo $projeto_item['departamento']?>" />
        <br><br>
        <label for="modalidade">Modalidade: <br></label>
        <td><input type="text" name="modalidade" value="<?php echo $projeto_item['modalidade']?>" />
        <br><br>
        <label for="publico_alvo">Público Alvo: <br></label>
        <td><input type="text" name="publico_alvo" value="<?php echo $projeto_item['publico_alvo']?>" />
        <br><br>
        <label for="justificativa">Justificativa: <br></label>
        <td><input type="text" name="justificativa" value="<?php echo $projeto_item['justificativa']?>" />
        <br><br>
        <label for="objetivos">Objetivos: <br></label>
        <td><input type="text" name="objetivos" value="<?php echo $projeto_item['objetivos']?>" />
        <br><br>
        <label for="metodologia">Metodologia: <br></label>
        <td><input type="text" name="metodologia" value="<?php echo $projeto_item['metodologia']?>" />
        <br><br>
        <label for="cronograma">Cronograma: <br></label>
        <td><input type="file" name="cronograma" />
        <br><br>
        
        <input type="submit" name="submit" value="Cadastrar" />
        </tr>
    </div>   
</form>