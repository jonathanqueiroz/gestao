<?php
class Pages extends CI_Controller {

        public function view($page = 'cadastro_pessoa')
        {
        	$this->load->helper('form');
        	$this->load->helper('url');
        	if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
        }

        public function cadastroPessoa()
        {
        	$this->load->model('News_model');
        	$data = $this->input->post();
        	if (!isset($data)) {
        		 $this->load->view('pages/home', $data);
        	}
        	else
        	var_dump($data);
        	//$status = $this->News_model->cadastroPessoa($data);
        }
}