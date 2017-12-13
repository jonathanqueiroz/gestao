<?php
class Pessoa extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('pessoa_model');
        $this->load->model('projeto_model');
        $this->load->helper('url_helper');
        $this->load->helper('url'); 
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
 
    public function index()
    {
        $data['pessoas'] = $this->pessoa_model->get_pessoas();
        $data['title'] = 'Pessoas';
 
        $this->load->view('templates/header', $data);
        $this->load->view('pessoa/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($id = NULL)
    {
        $data['pessoa_item'] = $this->pessoa_model->get_pessoas($id);
        
        if (empty($data['pessoa_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['pessoa_item'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('pessoa/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $data['title'] = 'Cadastrar Pessoa';
 
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required');
        $this->form_validation->set_rules('nascimento', 'Data de Nascimento', 'required');
        $this->form_validation->set_rules('endereco', 'Endereço', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->pessoa_model->set_pessoa();
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $data['title'] = 'Editar pessoa';        
        $data['pessoa_item'] = $this->pessoa_model->get_pessoa_by_id($id);
        
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required');
        $this->form_validation->set_rules('nascimento', 'Data de Nascimento', 'required');
        $this->form_validation->set_rules('endereco', 'Endereço', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->pessoa_model->set_pessoa($id);
            //$this->load->view('pessoa/success');
            redirect( base_url() . 'index.php/pessoa');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $pessoa_item = $this->pessoa_model->get_pessoa_by_id($id);
        
        $this->pessoa_model->delete_pessoa($id);        
        redirect( base_url() . 'index.php/pessoa');        
    }


    public function cadastro_adolescente($id=0)
    {
        $data['id'] = $id;
        if ($id != 0) {
            $data['tab'] = 1;
        }
        else{
            $data['tab'] = 0;
        }
        $data['form1'] = $this->pessoa_model->getForm1($id);
        $data['form2'] = $this->pessoa_model->getForm2($id);
        $data['form3'] = $this->pessoa_model->getForm3($id);
        $data['form4'] = $this->pessoa_model->getForm4($id);
        $data['form5'] = $this->pessoa_model->getForm5($id);
        $data['form6'] = $this->pessoa_model->getForm6($id);
        $data['form7'] = $this->pessoa_model->getForm7($id);
        $this->load->view('templates/header', $data);
        $this->load->view('projeto/tabs_create');
        $this->load->view('templates/footer');
    }


    public function dados_adolescente($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        $this->form_validation->set_rules('nome', 'Nome', 'required');


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/create/passo1');
            $this->load->view('templates/footer');
        }
        else
        {
            $id_adolescente = $this->pessoa_model->setPessoa_step1($id);
            redirect('Pessoa/cadastro_adolescente/'.$id_adolescente,'auto');
        }
    }

    public function antecedentes($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('motivo_adolescente', 'Motivo da Consulta (Segundo o Adolescente) ', 'required');
        $this->form_validation->set_rules('motivo_acompanhante', 'Motivos da Consulta (Segundo o Acompanhante)', 'required');
        $this->form_validation->set_rules('cod_adolescente', 'Código(s) Motivo(s) do Adolescente', 'required');
        $this->form_validation->set_rules('cod_acompanhante', 'Código(s) Motivo(s) do Acompanhante', 'required');
        $this->form_validation->set_rules('obs_motivos', 'Observações Importantes', 'required');
        $this->form_validation->set_rules('perinatais', 'Perinatais Normais', 'required');
        $this->form_validation->set_rules('crescimento', 'Crescimento Normal', 'required');
        $this->form_validation->set_rules('vacinas', 'Vacinas Completas', 'required');
        $this->form_validation->set_rules('cronica', 'Doenças Crônicas', 'required');
        $this->form_validation->set_rules('infectocontagiosas', 'Doenças Infectocontagiosas', 'required');
        $this->form_validation->set_rules('intoxicacao', 'Acidentes Intoxicação', 'required');
        $this->form_validation->set_rules('cirurgia', 'Cirurgia/Hospitalização', 'required');
        $this->form_validation->set_rules('medicamentos', 'Uso de Medicamentos ou Substâncias', 'required');
        $this->form_validation->set_rules('transtornos', 'Transtornos Psicológicos', 'required');
        $this->form_validation->set_rules('maltratos', 'Maltratos', 'required');
        $this->form_validation->set_rules('judiciais', 'Judiciais', 'required');
        $this->form_validation->set_rules('outros_pessoais', 'Outros', 'required');
        $this->form_validation->set_rules('obs_pessoais', 'Observações', 'required');
        $this->form_validation->set_rules('diabetes', 'Diabetes', 'required');
        $this->form_validation->set_rules('obesidade', 'Obesidade', 'required');
        $this->form_validation->set_rules('cadiovascular', 'Cadiovascular', 'required');
        $this->form_validation->set_rules('alergia', 'Alergia', 'required');
        $this->form_validation->set_rules('infeccao', 'Infecções (TBC,VIH,etc)', 'required');
        $this->form_validation->set_rules('infectocontagiosas_familiar', 'Acidentes Intoxicação', 'required');
        $this->form_validation->set_rules('transtornos_psicologicos', 'Transtornos Psicológicos', 'required');
        $this->form_validation->set_rules('alcool', 'Álcool/Drogas', 'required');
        $this->form_validation->set_rules('violencia', 'Violência Intrafamiliar', 'required');
        $this->form_validation->set_rules('mae_adolescente', 'Mãe Adolescente', 'required');
        $this->form_validation->set_rules('judiciais_familiar', 'Judiciais Familiar', 'required');
        $this->form_validation->set_rules('outros_familiar', 'Outros Familiar', 'required');
        $this->form_validation->set_rules('obs_familiar', 'Observações Familiar', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/create/passo2');
            $this->load->view('templates/footer');
        }
        else{
            $this->pessoa_model->setPessoa_step2('0', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
        }
    }

    public function situacao_familiar($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('convive_mae', 'Convive com a Mãe ', 'required');
        $this->form_validation->set_rules('convive_pai', 'Convive com o Pai', 'required');
        $this->form_validation->set_rules('convive_madrasta', 'Convive com a Madrasta', 'required');
        $this->form_validation->set_rules('convive_padrastro', 'Convive com o Padrasto', 'required');
        $this->form_validation->set_rules('convive_irmao', 'Convive com o Irmão(ã)(s)', 'required');
        $this->form_validation->set_rules('convive_filho', 'Convive com o Filho(s)', 'required');
        $this->form_validation->set_rules('convive_companheiro', 'Convive com o Companheiro(a)', 'required');
        $this->form_validation->set_rules('convive_outros', 'Convive com Outros', 'required');
        $this->form_validation->set_rules('vive_instituicao', 'Vive em Instituição', 'required');
        $this->form_validation->set_rules('vive_rua', 'Vive na Rua', 'required');
        $this->form_validation->set_rules('vive_sozinho', 'Vive Sozinho', 'required');
        $this->form_validation->set_rules('instrucao_pai', 'Instrução Pai ou Substituto', 'required');
        $this->form_validation->set_rules('instrucao_mae', 'Instrução Mãe ou Substituta', 'required');
        $this->form_validation->set_rules('tipo_trabalho_pai', 'Tipo de Trabalho Pai ou Substituto', 'required');
        $this->form_validation->set_rules('tipo_trabalho_mae', 'Tipo de Trabalho Mãe ou Substituta', 'required');
        $this->form_validation->set_rules('ocupacao_pai', 'Ocupação do Pai', 'required');
        $this->form_validation->set_rules('ocupacao_mae', 'Ocupação da Mãe', 'required');
        $this->form_validation->set_rules('ocupacao_responsavel', 'Ocupação do Responsável', 'required');
        $this->form_validation->set_rules('percepcao', 'Percepção Familiar do Adolescente', 'required');
        $this->form_validation->set_rules('condicoes_energia', 'Energia Elétrica', 'required');
        $this->form_validation->set_rules('condicoes_lixo', 'Coleta de Lixo', 'required');
        $this->form_validation->set_rules('condicoes_agua', 'Água', 'required');
        $this->form_validation->set_rules('condicoes_dejetos', 'Dejetos (TBC,VIH,etc)', 'required');
        $this->form_validation->set_rules('condicoes_quarto', 'Compartilha o Quarto', 'required');
        $this->form_validation->set_rules('condicoes_cama', 'Compartilha a Cama', 'required');
        $this->form_validation->set_rules('condicoes_habitacao', 'Tipo de Habitação', 'required');
        $this->form_validation->set_rules('condicoes_construcao', 'Tipo de Construção', 'required');
        $this->form_validation->set_rules('condicoes_numero_quartos', 'Número de Quartos', 'required');
        $this->form_validation->set_rules('condicoes_numero_comodos', 'Número de Cômodos', 'required');
        $this->form_validation->set_rules('observacoes', 'Observações', 'required');


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/create/passo3');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->pessoa_model->setPessoa_step3('0', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
        }
    }

    public function educacao_emprego($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('estuda', 'Estuda ', 'required');

         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/create/passo4');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->pessoa_model->setPessoa_step4('0', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
        }
    }

    public function vida_social($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('aceitao', 'Aceitação ', 'required');

         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/create/passo5');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $fk_pessoa = $this->input->post('id');
            $this->pessoa_model->setPessoa_step5('0', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
        }
    }

    public function ginegologico_sexualidade($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('menarca_espermarca', 'Idade Menarca / Espermarca', 'required');

         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/create/passo6');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->pessoa_model->setPessoa_step6('0', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
        }
    }

    public function emocional_fisico($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('imagem_corporal', 'Imagem Corporal', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/create/passo7');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->pessoa_model->setPessoa_step7('0', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
        }
    }

    public function jovens()
    {
        $data['adolescentes'] = $this->pessoa_model->getAdolescentes();
        $this->load->view('templates/header', $data);
        $this->load->view('projeto/adolescentes');
        $this->load->view('templates/footer');

    }

    public function get_adolescente()
    {
        $this->form_validation->set_rules('nome', 'Nome', 'trim');

        if ($this->form_validation->run() != FALSE)
        {   
            $nome = $this->input->post('nome');
            $data['adolescentes'] = $this->pessoa_model->getAdolescentes($nome);
            $this->session->set_tempdata('resultado', $data['adolescentes']);
            redirect('Pessoa/jovens','refresh');
            /*$this->load->view('templates/header', $data);
            $this->load->view('projeto/adolescentes');
            $this->load->view('templates/footer'); */
        }
    }

    public function edit_dados_adolescente($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['form1'] = $this->pessoa_model->getForm1($id);
            $data['id'] = $this->uri->segment(3, 0);
            $id_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/edit/edit1');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->pessoa_model->setPessoa_step1('1', $id_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$id_pessoa,'auto');
            //redirect('Pessoa/edit_antecedentes/'.$id_pessoa,'auto');
        }
    }

    public function edit_antecedentes($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['form2'] = $this->pessoa_model->getForm2($id);
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('motivo_adolescente', 'Motivo da Consulta (Segundo o Adolescente) ', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/edit/edit2');
            $this->load->view('templates/footer');
        }
        else{
            $this->pessoa_model->setPessoa_step2('1', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
            //redirect('Pessoa/edit_situacao_familiar/'.$fk_pessoa,'auto');
        }
    }

    public function edit_situacao_familiar($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['form3'] = $this->pessoa_model->getForm3($id);
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('convive_mae', 'Convive com a Mãe ', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/edit/edit3');
            $this->load->view('templates/footer');
        }
        else{
            $this->pessoa_model->setPessoa_step3('1', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
            //redirect('Pessoa/edit_educacao_emprego/'.$fk_pessoa,'auto');
        }
    }

    public function edit_educacao_emprego($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['form4'] = $this->pessoa_model->getForm4($id);
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('estuda', 'Estuda ', 'required');

         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/edit/edit4');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->pessoa_model->setPessoa_step4('1', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
            //redirect('Pessoa/edit_vida_social/'.$fk_pessoa,'auto');
        }
    }

    public function edit_vida_social($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['form5'] = $this->pessoa_model->getForm5($id);
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('aceitao', 'Aceitação ', 'required');

         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/edit/edit5');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $fk_pessoa = $this->input->post('id');
            $this->pessoa_model->setPessoa_step5('1', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
            //redirect('Pessoa/edit_ginegologico_sexualidade/'.$fk_pessoa,'auto');
        }
    }

    public function edit_ginegologico_sexualidade($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['form6'] = $this->pessoa_model->getForm6($id);
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('menarca_espermarca', 'Idade Menarca / Espermarca', 'required');

         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/edit/edit6');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->pessoa_model->setPessoa_step6('1', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
            //redirect('Pessoa/edit_emocional_fisico/'.$fk_pessoa,'auto');
        }
    }

    public function edit_emocional_fisico($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        if ($id != 0) {
            $data['form7'] = $this->pessoa_model->getForm7($id);
            $data['id'] = $this->uri->segment(3, 0);
            $fk_pessoa = $this->input->post('id');
        }
        else{
            show_404();
        }
        $this->form_validation->set_rules('imagem_corporal', 'Imagem Corporal', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/edit/edit7');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->pessoa_model->setPessoa_step7('1', $fk_pessoa);
            redirect('Pessoa/cadastro_adolescente/'.$fk_pessoa,'auto');
        }
    }

    public function quantidadeAtendidos()
    {
        $this->form_validation->set_rules('num_docentes', 'Quantidade de Docentes', 'required');
        $this->form_validation->set_rules('num_bolsistas', 'Quantidade de Bolsistas', 'required');
        $this->form_validation->set_rules('num_voluntarios', 'Quantidade de Voluntários', 'required');
        $this->form_validation->set_rules('num_atendidos', 'Quantidade de Pessoas Atendidas', 'required');
        $data['contrib'] = $this->projeto_model->getContribuintes();
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/contribuintes');
            $this->load->view('templates/footer');
        }
        else
        {
            if ($this->input->post('id_contrib') != NULL) {
               $this->projeto_model->setContribuintes($this->input->post('id_contrib'));
            }
            else {
               $this->projeto_model->setContribuintes('0');
            }
            redirect('Pessoa/quantidadeAtendidos','refresh');
            
        }
    }

    public function observacoes($id)
    {
        $data['obs'] = $this->pessoa_model->getObservacoes($id);
        $data['id'] = $id;
        $this->form_validation->set_rules('obs', 'Observações', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/observacoes');
            $this->load->view('templates/footer');
        }
        else
        {
            if ($this->input->post('id_obs') == NULL) {
               $this->pessoa_model->setObservacoes('0', $id);
            }
            else {
               $this->pessoa_model->setObservacoes($this->input->post('id_obs'), $id);
            }
            redirect('Pessoa/observacoes/'.$id,'refresh');
        }
    }
}