<style>
    nav .input-field label{
        top:-10px;
    }
</style> 
<div class="">
<div class="row">
    <h4 style="text-align: center;">Professores</h4>
    <div class="col s12 l10 push-l1">
        <nav>
            <div class="nav-wrapper blue">
                <form action="<?php echo base_url('instituicao/get_professores') ?>" method="post">
                    <div class="input-field">
                        <input id="search" type="search" name="nome" placeholder="Pesquise um Professor">
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>
        <?php if ($this->session->tempdata('resultado') == NULL) { ?>
            <ul class="collapsible" data-collapsible="accordion">
                <?php foreach ($professores as $professor) { ?>
                    <li>
                        <div class="collapsible-header">
                            <?php echo $professor['nome']; ?> 
                        </div>
                        <div class="collapsible-body grey lighten-5">
                        <div class="row">
                            <div class="col s6"><p>Professor Coordenador: <?php echo $professor['nome']; ?><br>
                            CPF: <?php echo $professor['cpf']; ?><br>
                            E-mail: <?php echo $professor['email']; ?><br>
                            Telefone: <?php echo $professor['telefone']; ?></p></div>
                            <div class="col s6">
                            <p>
                            Status do Cadastro: <?php  ?><br>
                            Data de Criação: <?php ?><br>
                            Última Atualização: <?php ?><br>
                            <a href="<?php echo base_url('instituicao/visualizar/'.$professor['id_professor']); ?>">Visualizar</a><br> 
                            <a href="<?php echo site_url('instituicao/editar/'.$professor['id_professor']); ?>">Editar</a><br>
                            <a href="<?php echo site_url('instituicao/apagar/'.$professor['id_professor']); ?>" onClick="return confirm('Tem certeza que deseja apagar o usúario?')">Apagar</a><br>
                            </div>
                        </div>
                    </li>
                <?php }?>
            </ul>   
        <?php } ?>
        <?php if($this->session->tempdata('resultado') != NULL) {
            $result_professores = $this->session->tempdata('resultado'); ?>
            <ul class="collapsible" data-collapsible="accordion">
                <?php foreach ($result_professores as $professor) { ?>
                    <li>
                        <div class="collapsible-header">
                            <?php echo $professor['nome']; ?> 
                        </div>
                        <div class="collapsible-body grey lighten-5">
                        <div class="row">
                            <div class="col s6"><p>Professor Coordenador: <?php echo $professor['nome']; ?><br>
                            CPF: <?php echo $professor['cpf']; ?><br>
                            E-mail: <?php echo $professor['email']; ?><br>
                            Telefone: <?php echo $professor['telefone']; ?></p></div>
                            <div class="col s6">
                            <p>
                            Status do Cadastro: <?php  ?><br>
                            Data de Criação: <?php ?><br>
                            Última Atualização: <?php ?><br>
                            <a href="<?php echo base_url('instituicao/visualizar/'.$professor['id_professor']); ?>">Visualizar</a><br> 
                            <a href="<?php echo site_url('instituicao/editar/'.$professor['id_professor']); ?>">Editar</a><br>
                            <a href="<?php echo site_url('instituicao/apagar/'.$professor['id_professor']); ?>" onClick="return confirm('Tem certeza que deseja apagar o usúario?')">Apagar</a><br>
                            </div>
                    </li>
                <?php } ?>
            </ul>
        <?php }
        $this->session->unmark_temp('resultado'); ?>
        <a class="btn-floating btn-large waves-effect waves-light red" href="<?php echo site_url('instituicao/cadastrarProfessor'); ?>"><i class="material-icons">add</i></a>
    </div>
</div>

</div>