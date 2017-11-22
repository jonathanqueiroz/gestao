<?php
class Pessoa extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('pessoa_model');
        $this->load->helper('url_helper');
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
        $this->load->helper('form');
        $this->load->library('form_validation');
 
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
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
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


    public function prontuario()
    {
        $data['pessoas'] = $this->pessoa_model->get_pessoas();
        $data['title'] = 'Pessoas';
 
        $this->load->view('templates/header', $data);
        $this->load->view('projeto/prontuario', $data);
        $this->load->view('templates/footer');
    }

}