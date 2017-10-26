<?php
class Projeto extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('projeto_model');
        $this->load->helper('url_helper');
        $this->load->model('projeto_model');
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
 
    public function view($id = NULL)
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
    
    public function create()
    {
        $this->load->library('form_validation');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|csv';
        $config['max_size'] = 15000000;
        $this->load->library('upload', $config);
        
        $data['title'] = 'Cadastrar Projeto';
 
        $this->form_validation->set_rules('titulo', 'Titulo', 'required');
        $this->form_validation->set_rules('orientador', 'Orientador', 'required');
        $this->form_validation->set_rules('descricao', 'Descrição', 'required');
        $this->form_validation->set_rules('departamento', 'Departamento', 'required');
        $this->form_validation->set_rules('modalidade', 'Modalidade', 'required');
        $this->form_validation->set_rules('publico_alvo', 'Público Alvo', 'required');
        $this->form_validation->set_rules('justificativa', 'Justificativa', 'required');
        $this->form_validation->set_rules('objetivos', 'Objetivos', 'required');
        $this->form_validation->set_rules('metodologia', 'Metodologia', 'required');
        
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
            $this->session->set_flashdata('upload', $cronograma);
            $this->projeto_model->set_projeto();
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/success');
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
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|csv';
        $config['max_size'] = 15000000;
        $this->load->library('upload', $config);


        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('titulo', 'Titulo', 'required');
        $this->form_validation->set_rules('orientador', 'Orientador', 'required');
        $this->form_validation->set_rules('descricao', 'Descrição', 'required');
        $this->form_validation->set_rules('departamento', 'Departamento', 'required');
        $this->form_validation->set_rules('modalidade', 'Modalidade', 'required');
        $this->form_validation->set_rules('publico_alvo', 'Público Alvo', 'required');
        $this->form_validation->set_rules('justificativa', 'Justificativa', 'required');
        $this->form_validation->set_rules('objetivos', 'Objetivos', 'required');
        $this->form_validation->set_rules('metodologia', 'Metodologia', 'required');

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
            $this->load->view('templates/header', $data);
            $this->load->view('projeto/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function delete()
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
}