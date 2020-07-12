<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

	public function index() {
		$dados = array(
			'titulo' => 'Portal Reflexões',
			'pagina' => 'site/home'
		);
		$this->load->view('template', $dados);
	}
}
