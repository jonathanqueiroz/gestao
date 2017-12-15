 <script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script> 
<?php echo form_open(base_url('projeto/colaboradores_projeto')); ?>  

    <div class="row passo1 form_cadastro form_box">
        <div class="col s12"><h4>Editar Cadastro de Colaboradores</h4><br>
            <p>* Selecione a(s) pessoa(s) em cada bloco e adicione a carga horária e data de entrada correspondente, em caso de cargas horárias e datas diferentes entre membros de um mesmo bloco, adicione um a um. </p><br></div>
        <div class="col s12 l4">
            <label for="professores">Professor(es): <br></label>
            <select name="professores" id="">
                <option value="" disabled selected>Selecione</option>
                <?php foreach ($professores_id as $professor) { ?>
                    <option value="<?php echo $professor['fk_professor']; ?>"><?php echo $professor['nome']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col s12 l4">
             <label for="professores">Carga Horária Professor(es): <br></label>
             <input type="number" name="carga_professor" placeholder="Carga Horária Professor(es)" value="<?php echo $professor['carga_horaria']; ?>" />
        </div>
        <div class="col s12 l3">
             <label for="data_professor">Data de Entrada Professor(es): <br></label>
             <input type="date" name="data_professor" value="<?php echo $professor['data_entrada']; ?>" />
        </div>
        <div class="col s12"></div>
        <div class="col s12 l4">
            <label for="bolsitas">Bolsita(s): <br></label>
            <select name="bolsistas" id="">
                <option value="" disabled selected>Selecione</option>
                <?php foreach ($alunos_id as $aluno) { ?>
                    <option value="<?php echo $aluno['fk_aluno']; ?>"><?php echo $aluno['nome']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col s12 l4">
             <label for="carga_bolsista">Carga Horária Bolsita(s): <br></label>
             <input type="number" name="carga_bolsista" placeholder="Carga Horária Bolsita(s)" value="<?php echo $aluno['carga_horaria']; ?>" />
        </div>
        <div class="col s12 l3">
             <label for="data_bolsita">Data de Entrada Bolsita(s): <br></label>
             <input type="date" name="data_bolsista" value="<?php echo $aluno['data_entrada']; ?>" />
        </div>
        <div class="col s12"></div>
        <div class="col s12 l4">
            <label for="voluntarios">Voluntário(s): <br></label>
            <select name="voluntarios" id="vol" class="plan">
                <option value="" disabled selected>Selecione</option>
                <?php foreach ($voluntarios_id as $vol) { ?>
                    <option value="<?php echo $vol['fk_voluntario']; ?>"><?php echo $vol['nome']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col s12 l4">
             <label for="carga_voluntario">Carga Horária Voluntário(s): <br></label>
             <input type="number" name="carga_voluntario" id="valor" placeholder="Carga Horária Voluntário(s)" value="<?php echo $vol['carga_horaria']; ?>" />
        </div>
        <div class="col s12 l3">
            <label for="data_voluntario">Data de Entrada Voluntário(s): <br></label>
            <input type="date" name="data_voluntario" value="<?php echo $vol['data_entrada']; ?>"/>
        </div>
        <div class="col s12 l12"></div>
        <div class="col l12 s12">
            <br>
            <button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
            <br><br>
        </div>
</form>
    </div>   