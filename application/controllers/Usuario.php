<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('pessoa_model');

	}

	// List all your items
	public function index()
	{
		redirect('usuario/login','auto');
	}

	public function cadastro()
	{
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required');
        $this->form_validation->set_rules('nascimento', 'Data de Nascimento', 'required');
        $this->form_validation->set_rules('endereco', 'Endereço', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('usuario/cadastro');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->pessoa_model->set_usuario();
            $this->load->view('templates/header');
            $this->load->view('pessoa/success');
            $this->load->view('templates/footer');
        }
    }

	public function login()
	{
        //var_dump($_SESSION['usuario']);
        if (!isset($_SESSION['usuario'])) {
	        $login = $this->input->post('login');
	        $senha = md5($this->input->post('senha'));
			if ($data = $this->pessoa_model->get_usuario($login, $senha)) {
				$this->session->set_userdata('usuario',$data);
				if ($data['tipo_usuario'] == 1) {
					redirect('projeto','auto');
				}
				elseif ($data['tipo_usuario'] == 2) {
					$this->load->view('templates/header');
					$this->load->view('pessoa/success', $data);
					$this->load->view('templates/footer');
				}
				else {
					$this->load->view('templates/header');
					$this->load->view('pessoa/success', $data);
					$this->load->view('templates/footer');
				}
			}
			else {
				$this->load->view('templates/header');
				$this->load->view('templates/login');
				$this->load->view('templates/footer');
			}
		}
		else{
			redirect('usuario/logoff','auto');
		}
	}

	public function logoff( $id = NULL )
	{
		$this->session->unset_userdata('usuario');
		redirect('usuario/login','auto');

	}

	
	public function recuperar_senha( $id = NULL )
	{

	}

	//Método de teste para gerar gráficos
	public function grafico()
	{
		$this->load->library('PHPlot');

		//Definindo os dados do gráfico
		$dados = array(
			array('a',3),
			array('b',5),
			array('c',7),
			array('d',8),
			array('e',2),
			array('f',6),
			array('g',7)
		);
		$this->phplot->SetFailureImage(False); // No error images
		$this->phplot->SetPrintImage(False); // No automatic output
		$this->phplot->SetPlotType("bars");
		$this->phplot->SetDataValues($dados);

		//Imprimindo o gráfico na tela
		
		$this->phplot->DrawGraph();
		$dados['grafico'] = $this->phplot->EncodeImage('dataurl');
	}
}

/* End of file Usuario.php */
/* Location: ./application/controllers/Usuario.php */
 ?>