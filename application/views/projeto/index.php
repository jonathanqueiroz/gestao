<style>
    nav .input-field label{
        top:-10px;
    }
</style> 

<div class="row">
    <h4 style="text-align: center;">Projetos</h4>
    <div class="col s12 l10 push-l1">
        <nav>
            <div class="nav-wrapper blue">
                <form action="<?php echo base_url('projeto/get_projetos') ?>" method="post">
                    <div class="input-field">
                        <input id="search" type="search" name="nome" placeholder="Pesquise um Projeto">
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>
        <?php if ($this->session->tempdata('resultado') == NULL) { ?>
            <ul class="collapsible" data-collapsible="accordion">
                <?php foreach ($projetos as $projeto_item) { ?>
                    <li>
                        <div class="collapsible-header">
                            <?php echo $projeto_item['titulo']; ?> 
                        </div>
                        <div class="collapsible-body grey lighten-5">
                        <div class="row">
                            <div class="col s6">
                                <p>Professor Coordenador: <?php echo $projeto_item['professor']; ?><br>
                                Departamento: <?php echo $projeto_item['departamento']; ?><br>
                                Data de Início: <?php $date = new DateTime($projeto_item['data_inicio']); echo date_format($date,"d/m/Y");?><br>
                                Previsão de Término: <?php $date2 = new DateTime($projeto_item['data_termino']); echo date_format($date2,"d/m/Y"); ?><br>
                                Status do Cadastro: <?php  ?><br></p>
                        </div>
                            <div class="col s6">
                            <p>
                            <a href="<?php echo base_url('projeto/colaboradores_projeto/'.$projeto_item['id_projeto']); ?>">Adicionar Colaboradores</a><br> 
                            <a href="<?php echo base_url('projeto/visualizar/'.$projeto_item['id_projeto']); ?>">Visualizar Dados</a><br> 
                            <a href="<?php echo site_url('projeto/editar/'.$projeto_item['id_projeto']); ?>">Editar Informações</a><br>
                            <a href="<?php echo site_url('projeto/apagar/'.$projeto_item['id_projeto']); ?>" onClick="return confirm('Tem certeza que deseja apagar o usúario?')">Apagar Projeto</a><br>
                            </div>
                        </div>
                    </li>
                <?php }?>
            </ul>   
        <?php } ?>
        <?php if($this->session->tempdata('resultado') != NULL) {
            $result_projetos = $this->session->tempdata('resultado'); ?>
            <ul class="collapsible" data-collapsible="accordion">
                <?php foreach ($result_projetos as $projeto_item) { ?>
                    <li>
                        <div class="collapsible-header">
                            <?php echo $projeto_item['titulo']; ?>
                        </div>
                        <div class="collapsible-body grey lighten-5">
                            <div class="row">
                                <div class="col s6">
                                    <p>Professor Coordenador: <?php echo $projeto_item['professor']; ?><br>
                                    Departamento: <?php echo $projeto_item['departamento']; ?><br>
                                    Data de Início: <?php $date = new DateTime($projeto_item['data_inicio']); echo date_format($date,"d/m/Y");?><br>
                                    Previsão de Término: <?php $date2 = new DateTime($projeto_item['data_termino']); echo date_format($date2,"d/m/Y"); ?><br>
                                    Status do Cadastro: <?php  ?><br></p>
                                </div>
                                <div class="col s6">
                                    <p>
                                    <a href="<?php echo base_url('projeto/colaboradores_projeto/'.$projeto_item['id_projeto']); ?>">Adicionar Colaboradores</a><br> 
                                    <a href="<?php echo base_url('projeto/visualizar/'.$projeto_item['id_projeto']); ?>">Visualizar Dados</a><br> 
                                    <a href="<?php echo site_url('projeto/editar/'.$projeto_item['id_projeto']); ?>">Editar Informações</a><br>
                                    <a href="<?php echo site_url('projeto/apagar/'.$projeto_item['id_projeto']); ?>" onClick="return confirm('Tem certeza que deseja apagar o usúario?')">Apagar Projeto</a><br></p>
                                </div>
                            </div>
                    </li>
                <?php } ?>
            </ul>
        <?php }
        $this->session->unmark_temp('resultado'); ?>
        <a class="btn-floating btn-large waves-effect waves-light red" href="<?php echo site_url('Projeto/cadastrar'); ?>"><i class="material-icons">add</i></a>
    </div>
</div>
