 <script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script> 
<?php if (isset($error)) {
    echo $error;
    } ?>
<?php echo form_open_multipart(base_url('projeto/cadastrar')); ?>  

    <div class="row passo1 form_cadastro form_box">
        <div class="col s12"><h4>Cadastrar Projeto</h4><br></div>
        <div class="col s12 l6">
            <label for="titulo">Titulo: <br></label>
            <input type="text" name="titulo" />
        </div>
        <div class="col s12 l2">
            <label for="num_registro">Número de Registro: <br></label>
            <input type="text" name="num_registro" />
        </div>
        <div class="col s12 l2">
            <label for="data_inicio">Data de Início: <br></label>
            <input type="date" name="data_inicio" />
        </div>
        <div class="col s12 l2">
            <label for="data_termino">Previsão de Término: <br></label>
            <input type="date" name="data_termino" />
        </div>
        <div class="col s12 l3">
            <label for="verba_inicial">Verba Inicial: <br></label>
            <input type="number" name="verba_inicial" step="0.01" />
        </div>
        <div class="col s12 l3">
            <label for="professor">Professor Coordenador: <br></label></td>
            <select name="professor" id="">
                <option value="" disabled selected>Selecione</option>
                <?php foreach ($professores as $professor) { ?>
                <option value="<?php echo $professor['id_professor'];?>"><?php echo $professor['nome'];?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col s12 l3">
            <label for="departamento">Departamento: <br></label>
            <select name="departamento" id="">
                <option value="" disabled selected>Selecione</option>
                <?php foreach ($departamentos as $departamento) { ?>
                <option value="<?php echo $departamento['id_departamento'];?>"><?php echo $departamento['nome'];?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col s12 l3">
            <label for="modalidade">Modalidade: <br></label>
            <select name="modalidade" id="">
                <option value="" disabled selected>Selecione</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="col s12 l12"></div>
        <div class="col s12 l4">
            <label for="descricao">Descrição: <br></label>
            <textarea name="descricao" class="materialize-textarea" id="" rows="10"></textarea>
        </div>
        <div class="col s12 l4">
            <label for="publico_alvo">Público Alvo: <br></label>
            <textarea name="publico_alvo" class="materialize-textarea" id="" rows="10"></textarea>
        </div>
        <div class="col s12 l4">
            <label for="justificativa">Justificativa: <br></label>
            <textarea name="justificativa" class="materialize-textarea" id="" rows="10"></textarea>
        </div>
        <div class="col s12 l4">
            <label for="objetivos">Objetivos: <br></label>
            <textarea name="objetivos" class="materialize-textarea" id="" rows="10"></textarea>
        </div>
        <div class="col s12 l4">
            <label for="metodologia">Metodologia: <br></label>
            <textarea name="metodologia" class="materialize-textarea" id="" rows="10"></textarea>
        </div>
        <div class="col s12 l12"></div>
        <div class="col s12 l4">
            <label for="cronograma">Cronograma: <br></label>
            <div class="file-field input-field">
                <div class="btn blue">
                    <span>Arquivo</span>
                    <input type="file" name="cronograma" >
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>
        <div class="col l12 s12">
            <br>
            <button class="btn waves-effect waves-light blue" type="submit">Salvar</button>
            <br><br>
        </div>
</form>
    </div>   