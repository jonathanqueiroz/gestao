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


        $this->load->helper('form');
        $this->load->library('form_validation');
        
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
            redirect('Projeto/cadastrarAluno','auto');
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
            redirect('Projeto/atualizarAluno/'.$id,'auto');
        }
    }

    public function alunos()
    {
        $data['colaboradores'] = $this->projeto_model->getAlunos();
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
            redirect('Projeto/alunos','refresh');
            /*$this->load->view('templates/header', $data);
            $this->load->view('projeto/adolescentes');
            $this->load->view('templates/footer'); */
    }

    public function colaboradores_projeto($id=0)
    {
        $data['professores'] = $this->instituicao_model->getProfessores();
        $data['alunos'] = $this->projeto_model->getAlunos();
        $data['voluntarios'] = $this->projeto_model->getAlunos();
        $this->form_validation->set_rules('professor', 'Professor', 'required');

        if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('templates/header');
            $this->load->view('projeto/incluir_colaboradores', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->projeto_model->setColaboradoresProjeto($id);
            redirect('Projeto','refresh');
        }
    }
}