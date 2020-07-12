<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct() {
    parent:: __construct();

    if(!$this->session->userdata('logado')) {
      redirect('sair');
    }
  }

	public function index() {
    $dados = array(
      'titulo' => 'Home',
      'pagina' => 'dashboard/home'
    );
    $this->load->view('dashboard/template', $dados);
	}
}
