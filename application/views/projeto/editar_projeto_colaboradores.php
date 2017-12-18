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
        <li class="tab col s3"><a href="#test-swipe-1" <?php if($active == 1){ ?> class="active" <?php } ?>>Professores</a></li>
        <li class="tab col s3"><a href="#test2" <?php if($active == 2){ ?> class="active" <?php } ?> >Bolsistas</a></li>
        <li class="tab col s3"><a href="#test3" <?php if($active == 3){ ?> class="active" <?php } ?>>Voluntários</a></li>
      </ul>
      <br>
    </div>
</div>
<div class="row">  
    <div id="test-swipe-1" class="col s12 l12">
        <div class="row passo1 form_cadastro form_box">
            <div class="col s12">
                <h4>Editar Professor Colaborador</h4><br>
            </div>
            <?php echo form_open('projeto/get_escolha_professor/'.$id); ?>
                <div class="col s12 l4">
                    <label for="professor">Professor: <br></label>
                    <select name="professor" id="">
                        <option value="" disabled selected>Selecione</option>
                        <?php foreach ($professores as $professor) { ?>
                            <option value="<?php echo $professor['id_professor']; ?>"><?php echo $professor['nome']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col l5 s12">
                    <br>
                    <button type="submit" class="waves-effect waves-light btn blue"><i class="material-icons right">search</i>Buscar</button
                    <br><br>
                </div>
            <?php echo form_close(); ?>
            <?php echo form_open('projeto/editar_colaboradores_projeto/'.$id); ?>
            <div class="col s12 l12"><br><br></div>
            <input type="hidden" name="professor" value="<?php if(isset($escolha_professor)) echo $escolha_professor->fk_professor; ?>">
            <input type="hidden" name="id_projeto_colaborador" value="<?php if(isset($escolha_professor)) echo $escolha_professor->id_projeto_colaborador; ?>">
            <div class="col s12 l4" <?php if(!isset($escolha_professor)){ ?> style="display:none;" <?php }?> >
                <label for="">Nome:</label>    
                <input type="text" name="" placeholder="Nome" value="<?php if(isset($escolha_professor)) echo $escolha_professor->nome; ?>" disabled />
            </div>
           <div class="col s12 l4" <?php if(!isset($escolha_professor)){ ?> style="display:none;" <?php }?> >
                <label for="funcao_professor">Função Desempenhada:</label>    
                <input type="text" name="funcao_professor" placeholder="Função Desempenhada" value="<?php if(isset($escolha_professor)) echo $escolha_professor->funcao; ?>" />
            </div>
            <div class="col s12 l3" <?php if(!isset($escolha_professor)){ ?> style="display:none;" <?php }?>>
                 <label for="professores">Carga Horária do Professor: <br></label>
                 <input type="number" name="carga_professor" placeholder="Carga Horária do Professor" value="<?php if(isset($escolha_professor)) echo $escolha_professor->carga_horaria; ?>" />
            </div>

            <div class="col s12 l4" <?php if(!isset($escolha_professor)){ ?> style="display:none;" <?php }?>>
                 <label for="data_professor">Data de Entrada do Professor: <br></label>
                 <input type="date" name="data_professor" value="<?php if(isset($escolha_professor)) echo $escolha_professor->data_entrada; ?>" />
            </div>
            <div class="col s12 l4" <?php if(!isset($escolha_professor)){ ?> style="display:none;" <?php }?>>
                 <label for="data_professor">Data de Saída do Professor: <br></label>
                 <input type="date" name="data_saida_professor" value="<?php if(isset($escolha_professor)) echo $escolha_professor->data_saida; ?>" />
            </div>
            <div class="col l12 s12" <?php if(!isset($escolha_professor)){ ?> style="display:none;" <?php }?>>
                <br>
                <button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
                <br><br>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <div id="test2" class="col s12 l12">
        <div class="row passo1 form_cadastro form_box">
            <div class="col s12">
                <h4>Editar Bolsista Colaborador</h4><br>
            </div>
            <?php echo form_open('projeto/get_escolha_bolsista/'.$id); ?>
            <div class="col s12 l4">
                <label for="bolsita">Bolsita: <br></label>
                <select  name="bolsista" id="">
                    <option value="" disabled selected>Selecione</option>
                    <?php foreach ($alunos as $aluno) { ?>
                        <option value="<?php echo $aluno['id_aluno']; ?>"><?php echo $aluno['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col l5 s12">
                    <br>
                    <button type="submit" class="waves-effect waves-light btn blue"><i class="material-icons right">search</i>Buscar</button
                    <br><br>
                </div>
            <?php echo form_close(); ?>
            <?php echo form_open('projeto/editar_colaboradores_projeto/'.$id); ?>
            <div class="col s12 l12"><br><br></div>
            <input type="hidden" name="bolsista" value="<?php if(isset($escolha_bolsista)) echo $escolha_bolsista->fk_aluno; ?>">
            <input type="hidden" name="id_projeto_colaborador" value="<?php if(isset($escolha_bolsista)) echo $escolha_bolsista->id_projeto_colaborador; ?>">
            <div class="col s12 l4" <?php if(!isset($escolha_bolsista)){ ?> style="display:none;" <?php }?> >
                <label for="">Nome:</label>    
                <input type="text" name="" placeholder="Nome" value="<?php if(isset($escolha_bolsista)) echo $escolha_bolsista->nome; ?>" disabled />
            </div>
            <div class="col s12 l4 " <?php if(!isset($escolha_bolsista)){ ?> style="display:none;" <?php }?> >
                <label for="funcao_bolsista">Função Desempenhada:</label>    
                <input type="text" name="funcao_bolsista" placeholder="Função Desempenhada" value="<?php if(isset($escolha_bolsista)) echo $escolha_bolsista->funcao; ?>" />
            </div>
            <div class="col s12 l3" <?php if(!isset($escolha_bolsista)){ ?> style="display:none;" <?php }?> >
                 <label for="carga_bolsista">Carga Horária do Bolsita: <br></label>
                 <input type="number" name="carga_bolsista" placeholder="Carga Horária do Bolsita" value="<?php if(isset($escolha_bolsista)) echo $escolha_bolsista->carga_horaria; ?>" />
            </div>
            <div class="col s12 l3" <?php if(!isset($escolha_bolsista)){ ?> style="display:none;" <?php }?> >
                 <label for="data_bolsita">Data de Entrada do Bolsita: <br></label>
                 <input type="date" name="data_bolsista" value="<?php if(isset($escolha_bolsista)) echo $escolha_bolsista->data_entrada; ?>" />
            </div>
            <div class="col s12 l3" <?php if(!isset($escolha_bolsista)){ ?> style="display:none;" <?php }?> >
                 <label for="data_saida_bolsista">Data de Saída do Professor: <br></label>
                 <input type="date" name="data_saida_bolsista" value="<?php if(isset($escolha_bolsista)) echo $escolha_bolsista->data_saida; ?>" />
            </div>
            <div class="col l12 s12" <?php if(!isset($escolha_bolsista)){ ?> style="display:none;" <?php }?>>
                <br>
                <button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
                <br><br>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <div id="test3" class="col s12 l12">
        <div class="row passo1 form_cadastro form_box">
            <div class="col s12">
                <h4>Editar Voluntário Colaborador</h4><br>
            </div>
            <?php echo form_open('projeto/get_escolha_voluntario/'.$id); ?>
            <div class="col s12 l4">
                <label for="voluntario">Voluntário: <br></label>
                <select name="voluntario" id="">
                    <option value="" disabled selected>Selecione</option>
                    <?php foreach ($voluntarios as $voluntario) { ?>
                        <option value="<?php echo $voluntario['id_aluno']; ?>"><?php echo $voluntario['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col l5 s12">
                    <br>
                    <button type="submit" class="waves-effect waves-light btn blue"><i class="material-icons right">search</i>Buscar</button
                    <br><br>
                </div>
            <?php echo form_close(); ?>
            <?php echo form_open('projeto/editar_colaboradores_projeto/'.$id); ?>
            <div class="col s12 l12"><br><br></div>
            <input type="hidden" name="voluntario" value="<?php if(isset($escolha_voluntario)) echo $escolha_voluntario->fk_voluntario; ?>">
            <input type="hidden" name="id_projeto_colaborador" value="<?php if(isset($escolha_voluntario)) echo $escolha_voluntario->id_projeto_colaborador; ?>">
            <div class="col s12 l4" <?php if(!isset($escolha_voluntario)){ ?> style="display:none;" <?php }?> >
                <label for="">Nome:</label>    
                <input type="text" name="" placeholder="Nome" value="<?php if(isset($escolha_voluntario)) echo $escolha_voluntario->nome; ?>" disabled />
            </div>
            <div class="col s12 l4 " <?php if(!isset($escolha_voluntario)){ ?> style="display:none;" <?php }?> >
                <label for="funcao_voluntario">Função Desempenhada:</label>    
                <input type="text" name="funcao_voluntario" placeholder="Função Desempenhada" value="<?php if(isset($escolha_voluntario)) echo $escolha_voluntario->funcao; ?>" />
            </div>
            <div class="col s12 l3" <?php if(!isset($escolha_voluntario)){ ?> style="display:none;" <?php }?> >
                 <label for="carga_voluntario">Carga Horária do Voluntário: <br></label>
                 <input type="number" name="carga_voluntario" placeholder="Carga Horária do Voluntário" value="<?php if(isset($escolha_voluntario)) echo $escolha_voluntario->carga_horaria; ?>" />
            </div>
            <div class="col s12 l3" <?php if(!isset($escolha_voluntario)){ ?> style="display:none;" <?php }?> >
                <label for="data_voluntario">Data de Entrada do Voluntário: <br></label>
                <input type="date" name="data_voluntario" value="<?php if(isset($escolha_voluntario)) echo $escolha_voluntario->data_entrada; ?>" />
            </div>
            <div class="col s12 l3" <?php if(!isset($escolha_voluntario)){ ?> style="display:none;" <?php }?> >
                 <label for="data_saida_voluntario">Data de Saída do Voluntário: <br></label>
                 <input type="date" name="data_saida_voluntario" value="<?php if(isset($escolha_voluntario->data_saida)) echo $escolha_voluntario->data_saida; ?>" />
            </div>
            <div class="col s12 l12"></div>
            <div class="col l12 s12" <?php if(!isset($escolha_voluntario)){ ?> style="display:none;" <?php }?>>
                <br>
                <button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
                <br><br>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <p style="margin-left: 60px;"><a class="btn-floating btn-large waves-effect waves-light red" href="<?php echo site_url('projeto'); ?>"><i class="material-icons">arrow_back</i></a></p>
</div>

