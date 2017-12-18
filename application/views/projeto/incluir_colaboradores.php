 <script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script> 
<style>
    .tabs .tab a.active {
  color: #039be5;
}

.tabs .tab a:hover {
  color: #039be5;
}

.tabs .tab a {
  color: #039be5;
}
.tab a.active{
    color:#039be5;
}

.indicator{
    color:#039be5;
}

.disabled a{
  color: grey;
}
.tabs {
    overflow: -moz-scrollbars-none;
}
::-webkit-scrollbar {
    display: none;
}
</style>
<div class="row">
    <div class="col s12 l12">
      <ul class="tabs tabs-fixed-width" id="tabs-swipe-demo">
        <div class="indicator blue" style="z-index:1"></div>
        <li class="tab col s3"><a href="#test-swipe-1">Professores</a></li>
        <li class="tab col s3"><a href="#test2">Bolsistas</a></li>
        <li class="tab col s3"><a href="#test3">Voluntários</a></li>
      </ul>
      <br>
    </div>
</div>
<div class="row">  
    <div id="test-swipe-1" class="col s12 l12">
        <div class="row passo1 form_cadastro form_box">
            <?php echo form_open('Projeto/colaboradores_projeto/'.$id); ?>
            <div class="col s12">
                <h4>Cadastrar Colaboradores</h4><br>
            </div>
            <div class="col s12 l4">
                <label for="professor">Professor: <br></label>
                <select name="professor" id="">
                    <option value="" disabled selected>Selecione</option>
                    <?php foreach ($professores as $professor) { ?>
                        <option value="<?php echo $professor['id_professor']; ?>"><?php echo $professor['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>
           <div class="col s12 l4 ">
                <label for="funcao_professor">Função Desempenhada:</label>    
                <input type="text" name="funcao_professor" placeholder="Função Desempenhada"  />
            </div>
            <div class="col s12 l3">
                 <label for="professores">Carga Horária do Professor: <br></label>
                 <input type="number" name="carga_professor" placeholder="Carga Horária do Professor" />
            </div>

            <div class="col s12 l4">
                 <label for="data_professor">Data de Entrada do Professor: <br></label>
                 <input type="date" name="data_professor" />
            </div>
            <div class="col s12 l4">
                 <label for="data_professor">Data de Saída do Professor: <br></label>
                 <input type="date" name="data_saida_professor" disabled= />
            </div>
            <div class="col l12 s12">
                <br>
                <button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
                <br><br>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

    <div id="test2" class="col s12 l12">
        <div class="row passo1 form_cadastro form_box">
            <?php echo form_open('Projeto/colaboradores_projeto/'.$id); ?>
            <div class="col s12">
                <h4>Cadastrar Colaboradores</h4><br>
            </div>
            <div class="col s12 l4">
                <label for="bolsita">Bolsita: <br></label>
                <select  name="bolsista" id="">
                    <option value="" disabled selected>Selecione</option>
                    <?php foreach ($alunos as $aluno) { ?>
                        <option value="<?php echo $aluno['id_aluno']; ?>"><?php echo $aluno['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col s12 l4 ">
                <label for="funcao_bolsista">Função Desempenhada:</label>    
                <input type="text" name="funcao_bolsista" placeholder="Função Desempenhada"  />
            </div>
            <div class="col s12 l3">
                 <label for="carga_bolsista">Carga Horária do Bolsita: <br></label>
                 <input type="number" name="carga_bolsista" placeholder="Carga Horária do Bolsita" />
            </div>
            <div class="col s12 l3">
                 <label for="data_bolsita">Data de Entrada do Bolsita: <br></label>
                 <input type="date" name="data_bolsista" />
            </div>
            <div class="col s12 l3">
                 <label for="data_professor">Data de Saída do Professor: <br></label>
                 <input type="date" name="data_saida_professor" disabled= />
            </div>
            <div class="col l12 s12">
                <br>
                <button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
                <br><br>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <div id="test3" class="col s12 l12">
        <div class="row passo1 form_cadastro form_box">
            <?php echo form_open('Projeto/colaboradores_projeto/'.$id); ?>
            <div class="col s12">
                <h4>Cadastrar Colaboradores</h4><br>
            </div>
            <div class="col s12 l4">
                <label for="voluntario">Voluntário: <br></label>
                <select name="voluntario" id="">
                    <option value="" disabled selected>Selecione</option>
                    <?php foreach ($voluntarios as $voluntario) { ?>
                        <option value="<?php echo $voluntario['id_aluno']; ?>"><?php echo $voluntario['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col s12 l4 ">
                <label for="funcao_voluntario">Função Desempenhada:</label>    
                <input type="text" name="funcao_voluntario" placeholder="Função Desempenhada"  />
            </div>
            <div class="col s12 l3">
                 <label for="carga_voluntario">Carga Horária do Voluntário: <br></label>
                 <input type="number" name="carga_voluntario" placeholder="Carga Horária do Voluntário" />
            </div>
            <div class="col s12 l3">
                <label for="data_voluntario">Data de Entrada do Voluntário: <br></label>
                <input type="date" name="data_voluntario" />
            </div>
            <div class="col s12 l3">
                 <label for="data_professor">Data de Saída do Professor: <br></label>
                 <input type="date" name="data_saida_professor" disabled= />
            </div>
            <div class="col s12 l12"></div>
            <div class="col l12 s12">
                <br>
                <button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
                <br><br>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <p style="margin-left: 60px;"><a class="btn-floating btn-large waves-effect waves-light red" href="<?php echo site_url('projeto'); ?>"><i class="material-icons">arrow_back</i></a></p>
</div>

