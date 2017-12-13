<?php
class Instituicao extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('projeto_model');
        $this->load->model('instituicao_model');
        $this->load->helper('url_helper');
        $this->load->helper(array('form', 'url'));
    }
 
    public function index()
    {
        $data['projetos'] = $this->projeto_model->get_projetos();
        $data['title'] = 'Pessoas';
 
        $this->load->view('templates/header', $data);
        $this->load->view('instituicao/index', $data);
        $this->load->view('templates/footer');
    }

    
    // Add a new item
    public function cadastrarInstituicao($id=0)
    {
        $data['title'] = 'Cadastrar Instituição';
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('instituicao/cadastrar_instituicao');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->instituicao_model->setInstituicao($id);
            //redirect('Pessoa/cadastro_adolescente/'.$id_adolescente,'auto');
            $this->load->view('templates/header', $data);
            $this->load->view('instituicao/cadastrar_instituicao', $data);
            $this->load->view('templates/footer'); 
        }  
    }

    //Update one item
    public function atualizarInstituicao( $id = 1 )
    {
        $data['id'] = $id;
        $data['instituicao'] = $this->instituicao_model->getInstituicao($id);
        $this->form_validation->set_rules('nome', 'Nome', 'required');
         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('instituicao/editar_instituicao', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->instituicao_model->setInstituicao($id);
            redirect('Instituicao/atualizarInstituicao/'.$id,'refresh');
        }    
    }

    //Delete one item
    public function apagarInstituicao( $id = NULL )
    {

    }
    
    // Add a new item
    public function cadastrarDepartamento()
    {
        
    }

    //Update one item
    public function atualizarDepartamento( $id = NULL )
    {

    }

    //Delete one item
    public function apagarDepartamento( $id = NULL )
    {

    }

     // Add a new item
    public function cadastrarProfessor($id=0)
    {
        $data['title'] = 'Cadastrar Instituição';
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('instituicao/cadastrar_professor', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->instituicao_model->setProfessor($id);
            //redirect('Pessoa/cadastro_adolescente/'.$id_adolescente,'auto');
            $this->load->view('templates/header', $data);
            $this->load->view('instituicao/cadastrar_professor', $data);
            $this->load->view('templates/footer');
        }
    }

    //Update one item
    public function atualizarProfessor($id=0)
    {
        $data['id'] = $id;
        $data['professor'] = $this->instituicao_model->getProfessor($id);
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('instituicao/editar_professor', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->instituicao_model->setProfessor($id);
            redirect('Instituicao/atualizarProfessor/'.$id,'refresh');  
        }
    }

    //Delete one item
    public function apagarProfessores( $id = NULL )
    {

    }

    public function professores()
    {
        $data['professores'] = $this->instituicao_model->getProfessores();
        $this->load->view('templates/header', $data);
        $this->load->view('instituicao/professores');
        $this->load->view('templates/footer');
    }

    public function get_professores()
    {
        $this->form_validation->set_rules('nome', 'Nome', 'trim');

        if ($this->form_validation->run() != FALSE)
        {   
            $nome = $this->input->post('nome');
            $data['professores'] = $this->instituicao_model->getProfessores($nome);
            $this->session->set_tempdata('resultado', $data['professores']);
            redirect('Instituicao/professores','refresh');
            /*$this->load->view('templates/header', $data);
            $this->load->view('projeto/adolescentes');
            $this->load->view('templates/footer'); */
        }
    }

    /* End of file Instituicao.php */
    /* Location: ./application/controllers/Instituicao.php */
    
}