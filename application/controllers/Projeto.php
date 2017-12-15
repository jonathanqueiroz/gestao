<?php
class Projeto extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('projeto_model');
        $this->load->model('instituicao_model');
        $this->load->model('pessoa_model');
        $this->load->helper('url_helper');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo_usuario'] != 1) {
            redirect('usuario/login','auto');
        }
    }
 
    public function index()
    {
        $data['projetos'] = $this->projeto_model->get_projetos();
        $data['title'] = 'Pessoas';
 
        $this->load->view('templates/header', $data);
        $this->load->view('projeto/index', $data);
        $this->load->view('templates/footer');
    }

    public function get_projetos()
    {
        $this->form_validation->set_rules('titulo', 'Título', 'trim');

        if ($this->form_validation->run() != FALSE)
        {   
            $nome = $this->input->post('nome');
            $data['projetos'] = $this->projeto_model->get_projetos($nome);
            $this->session->set_tempdata('resultado', $data['projetos']);
        }
            redirect('Projeto','refresh');
    }
 
    public function visualizar($id = NULL)
    {
        $data['projeto_item'] = $this->projeto_model->get_projeto_by_id($id);
        
        if (empty($data['projeto_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['projeto_item'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('projeto/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function cadastrar()
    {
        $data['professores'] = $this->instituicao_model->getProfessores();
        $data['departamentos'] = $this->instituicao_model->getDepartamento();
        $this->load->library('form_validation');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|csv';
        $config['max_size'] = 15000000;
        $this->load->library('upload', $config);
        
        $data['title'] = 'Cadastrar Projeto';
 
        $this->form_validation->set_rules('titulo', 'Titulo', 'required');
        
        if (!$this->upload->do_upload('cronograma') || $this->form_validation->run() === FALSE)
        {
            $error = 0;
            //$error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/cadastro', $error);
            $this->load->view('templates/footer');
        }
        else{
            $data['upload_data'] = $this->upload->data();
            $cronograma = $data['upload_data']['raw_name'].$data['upload_data']['file_ext'];
            $this->projeto_model->set_projeto();
            redirect('Projeto','refresh');
        }
    }
    
    public function editar()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|csv';
        $config['max_size'] = 15000000;
        $this->load->library('upload', $config);

        $data['professores'] = $this->instituicao_model->getProfessores();
        $data['departamentos'] = $this->instituicao_model->getDepartamento();
        
        $this->form_validation->set_rules('titulo', 'Titulo', 'required');
        

        $data['title'] = 'Editar projeto';        
        $data['projeto_item'] = $this->projeto_model->get_projeto_by_id($id);
 
        if (!$this->upload->do_upload('cronograma') || $this->form_validation->run() === FALSE)
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/edit', $data);
            $this->load->view('templates/footer');
        }
        else{
            $data['upload_data'] = $this->upload->data();
            $cronograma = $data['upload_data']['raw_name'].$data['upload_data']['file_ext'];
            $this->session->set_flashdata('upload', $cronograma);
            $this->projeto_model->set_projeto($id);
            redirect('Projeto/index','refresh');
        }
    }
    
    public function apagar()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $projeto_item = $this->projeto_model->get_projeto_by_id($id);
        
        $this->projeto_model->delete_projeto($id);        
        redirect( base_url() . 'index.php/projeto');        
    }

    public function cadastrarAluno($id=0)
    {
        $data['title'] = 'Cadastrar Pessoa';
        $this->form_validation->set_rules('nome', 'Nome', 'required');


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/colaboradores');
            $this->load->view('templates/footer');
        }
        else
        {
            $id_colaborador = $this->projeto_model->setAluno($id);
            redirect('projeto/cadastrarAluno','auto');
        }
    }

    public function atualizarAluno($id)
    {
        
        $data['colaborador'] = $this->projeto_model->getAluno($id);
        if (empty($id) || $data['colaborador'] == NULL)
        {
            //show_404();
        }
        $data['title'] = 'Cadastrar Pessoa';
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/editar_colaboradores');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->projeto_model->setAluno($id);
            redirect('projeto/atualizarAluno/'.$id,'auto');
        }
    }

    public function alunos()
    {
        $data['alunos'] = $this->projeto_model->getAlunos();
        $this->load->view('templates/header', $data);
        $this->load->view('projeto/alunos');
        $this->load->view('templates/footer');
    }

    public function get_alunos()
    {
        $this->form_validation->set_rules('nome', 'Nome', 'trim');

        if ($this->form_validation->run() != FALSE)
        {   
            $nome = $this->input->post('nome');
            $data['alunos'] = $this->projeto_model->getAlunos($nome);
            $this->session->set_tempdata('resultado', $data['alunos']);
        }
            redirect('projeto/alunos','refresh');
            /*$this->load->view('templates/header', $data);
            $this->load->view('projeto/adolescentes');
            $this->load->view('templates/footer'); */
    }

    public function colaboradores_projeto($id=0)
    {
        $data['professores'] = $this->instituicao_model->getProfessores();
        $data['alunos'] = $this->projeto_model->getAlunos();
        $data['voluntarios'] = $this->projeto_model->getAlunos();
        //$data['voluntarios'] = $this->projeto_model->getProjetoColab();
        $this->form_validation->set_rules('professor', 'Professor', 'trim');

        if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('templates/header');
            $this->load->view('projeto/incluir_colaboradores', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            if($id == 1)
                $this->projeto_model->setColaboradoresProjProf('0',$id);
            elseif($id == 2)
                $this->projeto_model->setColaboradoresProjBol('0',$id);
            else
                $this->projeto_model->setColaboradoresProjVol('0',$id);
            redirect('projeto/colaboradores_projeto/'.$id,'refresh');
        }
    }

    public function editar_colaboradores_projeto($id=0)
    {
        $data['professores_id'] = $this->projeto_model->getProjetoColabProf();
        $data['alunos_id'] = $this->projeto_model->getProjetoColabBol();
        $data['voluntarios_id'] = $this->projeto_model->getProjetoColabVol();
        $this->form_validation->set_rules('bolsitas', 'Professor', 'trim');
        if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('templates/header');
            $this->load->view('projeto/editar_projeto_colaboradores', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            
            
            $this->projeto_model->setColaboradoresProjeto('1');
            //redirect('Projeto','refresh');
        }
    }
}