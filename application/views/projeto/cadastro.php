 <?php echo validation_errors(); ?>
<?php if (isset($error)) {
    echo $error;
    } ?>
 
<?php echo form_open_multipart(base_url('projeto/create')); ?>  

    <div class="grid-x grid-padding-x form_cadastro form_box">
        <div class="small-12 cell">
            <h2 style="text-align: center;"><?php echo $title; ?></h2>
            <br>
        </div>
        <div class="small-6 cell">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" required="required" placeholder="Titulo" />
        </div>
        <br><br>
        <div class="small-6 cell">
            <label for="orientador">Orientador: <br></label>
            <input type="text" name="orientador" required="required" />
        </div>
        <br><br>
        <div class="small-6 cell">
            <label for="descricao">Descrição: <br></label>
            <textarea name="descricao" required="required"></textarea>
        </div>
        <br><br>
        <div class="small-6 cell">
            <label for="departamento">Departamento: <br></label>
            <input type="text" name="departamento" required="required" />
        </div>
        <br><br>
        <div class="small-6 cell">
            <label for="modalidade">Modalidade: <br></label>
            <input type="text" name="modalidade" required="required" />
         </div>
        <br><br>
        <div class="small-6 cell">
            <label for="publico_alvo">Público Alvo: <br></label>
            <input type="text" name="publico_alvo" required="required" />
        </div>
        <br><br>
        <div class="small-6 cell">
            <label for="justificativa">Justificativa: <br></label>
            <textarea name="justificativa" required="required" ></textarea>
        </div>
        <br><br>
        <div class="small-6 cell">
            <label for="objetivos">Objetivos: <br></label>
            <textarea name="objetivos" required="required"></textarea>
        </div>
        <br><br>
        <div class="small-6 cell">
            <label for="metodologia">Metodologia: <br></label>
            <textarea  name="metodologia" required="required" ></textarea>
        </div>
        <br><br>
        <div class="small-6 cell">
            <label for="cronograma">Cronograma: <br></label>
            <input type="file" name="cronograma"  />
        </div>
        <br><br>
        <div class="small-6 cell">
            <input type="submit" name="submit" value="Cadastrar"  class="button large color_button" />
        </div>
    </div>   
</form>