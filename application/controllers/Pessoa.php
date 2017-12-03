<?php
class Pessoa extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('pessoa_model');
        $this->load->helper('url_helper');
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


    public function prontuario($id=1)
    {
        $data['pessoas'] = $this->pessoa_model->get_pessoas();
        $data['title'] = 'Pessoas';
 
        $this->load->view('templates/header', $data);
        $this->load->view('projeto/passo5', $data);
        $this->load->view('templates/footer');
    }

    public function stepOne($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';

        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('rg', 'RG', 'required');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required');
        $this->form_validation->set_rules('nascimento', 'Data de Nascimento', 'required');
        $this->form_validation->set_rules('endereco', 'Endereço', 'required');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required');
        $this->form_validation->set_rules('pt_ref', 'Ponto de Referência', 'required');
        $this->form_validation->set_rules('cep', 'CEP', 'required');
        $this->form_validation->set_rules('local_nascimento', 'Local Nascimento', 'required');
        $this->form_validation->set_rules('filiacao_mae', 'Filiação Mãe', 'required');
        $this->form_validation->set_rules('filiacao_pai', 'Filiação Pai', 'required');
        $this->form_validation->set_rules('responsavel', 'Responsável', 'required');
        $this->form_validation->set_rules('estado_civil', 'Estado Civil', 'required');
        $this->form_validation->set_rules('acompanhante', 'Acompanhante', 'required');
        $this->form_validation->set_rules('sexo', 'Sexo', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/prontuario');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $id_adolescente = $this->pessoa_model->setPessoa_step1($id);
            $this->session->set_userdata('id_adolescente', $id_adolescente);
            //var_dump($this->session->userdata('id_adolescente', $id_adolescente));
            redirect('Pessoa/stepTwo','auto');
            /*$this->load->view('templates/header', $data);
            $this->load->view('pessoa/passo2');
            $this->load->view('templates/footer');*/
        }
    }

    public function stepTwo($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';

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
            $this->load->view('projeto/passo2');
            $this->load->view('templates/footer');
 
        }
        else
        {
            if ($this->session->has_userdata('id_adolescente')) {
            $fk_pessoa = $this->session->userdata('id_adolescente');
            }
            $this->pessoa_model->setPessoa_step2($id, $fk_pessoa);
            redirect('Pessoa/stepThree','auto');
            /*$this->load->view('templates/header', $data);
            $this->load->view('pessoa/sucess');
            $this->load->view('templates/footer'); */
        }
    }

    public function stepThree($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        
        
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
            $this->load->view('projeto/passo3');
            $this->load->view('templates/footer');
 
        }
        else
        {
            if ($this->session->has_userdata('id_adolescente')) {
            $fk_pessoa = $this->session->userdata('id_adolescente');
            }
            $this->pessoa_model->setPessoa_step3($id, $fk_pessoa);
            redirect('Pessoa/stepFour','auto');
            /*$this->load->view('templates/header', $data);
            $this->load->view('pessoa/sucess');
            $this->load->view('templates/footer'); */
        }
    }

    public function stepFour($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        
        
        $this->form_validation->set_rules('estuda', 'Estuda ', 'required');

         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/passo4');
            $this->load->view('templates/footer');
 
        }
        else
        {
            if ($this->session->has_userdata('id_adolescente')) {
            $fk_pessoa = $this->session->userdata('id_adolescente');
            }
            $this->pessoa_model->setPessoa_step4($id, $fk_pessoa);
            redirect('Pessoa/stepFive','auto');
            /*
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/sucess');
            $this->load->view('templates/footer'); */
        }
    }

    public function stepFive($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        
        
        $this->form_validation->set_rules('aceitao', 'Aceitação ', 'required');

         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/passo5');
            $this->load->view('templates/footer');
 
        }
        else
        {
            if ($this->session->has_userdata('id_adolescente')) {
            $fk_pessoa = $this->session->userdata('id_adolescente');
            }
            $this->pessoa_model->setPessoa_step5($id, $fk_pessoa);
            redirect('Pessoa/stepSix','auto');
            /*
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/sucess');
            $this->load->view('templates/footer'); */
        }
    }

    public function stepSix($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        
        
        $this->form_validation->set_rules('menarca_espermarca', 'Idade Menarca / Espermarca', 'required');

         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/passo6');
            $this->load->view('templates/footer');
 
        }
        else
        {
            if ($this->session->has_userdata('id_adolescente')) {
            $fk_pessoa = $this->session->userdata('id_adolescente');
            }
            $this->pessoa_model->setPessoa_step6($id, $fk_pessoa);
            redirect('Pessoa/stepSeven','auto');
            /*
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/sucess');
            $this->load->view('templates/footer'); */
        }
    }

    public function stepSeven($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        
        
        $this->form_validation->set_rules('imagem_corporal', 'Imagem Corporal', 'required');

         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/passo7');
            $this->load->view('templates/footer');
 
        }
        else
        {
            if ($this->session->has_userdata('id_adolescente')) {
            $fk_pessoa = $this->session->userdata('id_adolescente');
            }
            $this->pessoa_model->setPessoa_step7($id, $fk_pessoa);
            $this->load->view('templates/header', $data);
            $this->load->view('pessoa/sucess');
            $this->load->view('templates/footer');
        }
    }

    public function adolescentes()
    {
        $data['adolescentes'] = $this->pessoa_model->getAdolescentes();
        $this->load->view('templates/header', $data);
        $this->load->view('projeto/adolescentes');
        $this->load->view('templates/footer');

    }
}