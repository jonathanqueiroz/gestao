<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function testando()
	{
		$this->load->view('welcome_message');
	}
}