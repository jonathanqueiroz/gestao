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
</style>
<div class="row">
    <div class="col s12">
      <ul class="tabs tabs-fixed-width">
        <div class="indicator blue" style="z-index:1"></div>
        <li class="tab col s3 "><a href="#test1">Dados Adolescente</a></li>
        <li class="tab col s3 <?php if(!$tab){ echo 'disabled';  } ?>"><a href="#test2">Antecedentes</a></li>
        <li class="tab col s3 <?php if(!$tab){ echo 'disabled';  } ?>"><a href="#test3">Situação Familiar</a></li>
        <li class="tab col s3 <?php if(!$tab){ echo 'disabled';  } ?>"><a href="#test4">Educação e Emprego</a></li>
        <li class="tab col s3 <?php if(!$tab){ echo 'disabled';  } ?>"><a href="#test5">Vida Social</a></li>
        <li class="tab col s3 <?php if(!$tab){ echo 'disabled';  } ?>"><a href="#test6">Ginecológico e Sexualidade</a></li>
        <li class="tab col s3 <?php if(!$tab){ echo 'disabled';  } ?>"><a href="#test7">Emocional e Fisíco</a></li>
      </ul>
      <br>
    </div>
    
    <div id="test1" class="col s12"><?php if(isset($form1)){ $this->load->view('Pessoa/edit/edit1'); } else {$this->load->view('Pessoa/create/passo1'); }  ?></div>
    <div id="test2" class="col s12"><?php if(isset($form2) && $form2 != NULL){ $this->load->view('Pessoa/edit/edit2'); } else {$this->load->view('Pessoa/create/passo2'); } ?></div>
    <div id="test3" class="col s12"><?php if($tab){ if(isset($form3) && $form4 != NULL){ $this->load->view('Pessoa/edit/edit3'); } else {$this->load->view('Pessoa/create/passo3'); }}?></div>
    <div id="test4" class="col s12"><?php if($tab){ if(isset($form4) && $form4 != NULL){ $this->load->view('Pessoa/edit/edit4'); } else {$this->load->view('Pessoa/create/passo4'); }}?></div>
    <div id="test5" class="col s12"><?php if($tab){ if(isset($form5) && $form5 != NULL){ $this->load->view('Pessoa/edit/edit5'); } else {$this->load->view('Pessoa/create/passo5'); }}?></div>
    <div id="test6" class="col s12"><?php if($tab){ if(isset($form6) && $form6 != NULL){ $this->load->view('Pessoa/edit/edit6'); } else {$this->load->view('Pessoa/create/passo6'); }}?></div>
    <div id="test7" class="col s12"><?php if($tab){ if(isset($form7) && $form7 != NULL){ $this->load->view('Pessoa/edit/edit7'); } else {$this->load->view('Pessoa/create/passo7'); }}?></div>
  </div>

