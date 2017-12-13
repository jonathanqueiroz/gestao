 <script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script> 
<?php echo form_open(base_url('projeto/colaboradores_projeto')); ?>  

    <div class="row passo1 form_cadastro form_box">
        <div class="col s12"><h4>Cadastrar Colaboradores</h4><br>
            <p>* Selecione a(s) pessoa(s) em cada bloco e adicione a carga horária e data de entrada correspondente, em caso de cargas horárias e datas diferentes entre membros de um mesmo bloco, adicione um a um. </p><br></div>
        <div class="col s12 l4">
            <label for="professores">Professor(es): <br></label>
            <select multiple name="professores" id="">
                <option value="" disabled selected>Selecione</option>
                <?php foreach ($professores as $professor) { ?>
                    <option value="<?php echo $professor['id_professor']; ?>"><?php echo $professor['nome']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col s12 l4">
             <label for="professores">Carga Horária Professor(es): <br></label>
             <input type="number" name="carga_horaria_prof" placeholder="Carga Horária Professor(es)" />
        </div>
        <div class="col s12 l3">
             <label for="professores">Data de Entrada Bolsita(s): <br></label>
             <input type="date" name="data_prof" />
        </div>
        <div class="col s12"></div>
        <div class="col s12 l4">
            <label for="bolsitas">Bolsita(s): <br></label>
            <select multiple name="bolsitas" id="">
                <option value="" disabled selected>Selecione</option>
                <?php foreach ($alunos as $aluno) { ?>
                    <option value="<?php echo $aluno['id_aluno']; ?>"><?php echo $aluno['nome']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col s12 l4">
             <label for="professores">Carga Horária Bolsita(s): <br></label>
             <input type="number" name="carga_horaria_prof" placeholder="Carga Horária Bolsita(s)" />
        </div>
        <div class="col s12 l3">
             <label for="professores">Data de Entrada Bolsita(s): <br></label>
             <input type="date" name="data_bolsita" />
        </div>
        <div class="col s12"></div>
        <div class="col s12 l4">
            <label for="voluntarios">Voluntário(s): <br></label>
            <select multiple name="voluntarios" id="">
                <option value="" disabled selected>Selecione</option>
                <?php foreach ($voluntarios as $voluntario) { ?>
                    <option value="<?php echo $voluntario['id_aluno']; ?>"><?php echo $voluntario['nome']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col s12 l4">
             <label for="professores">Carga Horária Voluntário(s): <br></label>
             <input type="number" name="carga_voluntario" placeholder="Carga Horária Voluntário(s)" />
        </div>
        <div class="col s12 l3">
            <label for="professores">Data de Entrada Bolsita(s): <br></label>
            <input type="date" name="data_prof" />
        </div>
        <div class="col s12 l12"></div>
        <div class="col l12 s12">
            <br>
            <button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
            <br><br>
        </div>
</form>
    </div>   