<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Usuario_model', 'usuario');
	}

	public function index() {
    $dados = array(
      'titulo' => 'Administrator: FullStack',
      'pagina' => 'dashboard/login'
    );
    $this->load->view('dashboard/template', $dados);
	}

	public function doAutenticar() {

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pwd', 'pwd', 'required');

		if($this->form_validation->run() == TRUE) {
			$dados_usuario = array(
				'email'  => $this->input->post('email'),
				'senha'  => $this->input->post('pwd'),
				'logado' => $this->input->post('login')
			);

			if($this->usuario->doLogin($dados_usuario)) {
				redirect('dashhome');
			} else {
			setMsg('msgAutenticacaoUser', 'Email ou senha inválido.', 'erroLogin');
			redirect('administrator');
		  }
		} else {
			$this->load->view('dashboard/login');
		}
	}

	public function sair() {
		$this->session->set_userdata("logado", "");
		redirect('administrator');
	}
}
