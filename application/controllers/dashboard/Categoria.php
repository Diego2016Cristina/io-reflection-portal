<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

  function __construct() {
    parent::__construct();

    if(!$this->session->userdata('logado')) {
      redirect('sair');
    }
  }

	public function index() {
    $dados = array(
      'titulo'     => 'Listando as categorias',
      'localizacao'=> 'Categoria',
      'secundaria' => 'dashboard/categoria/index.php'
    );

    $this->load->view('dashboard/home', $dados);
	}

  public function Modulo() {
    $dados = array(
      'titulo'     => 'Criar uma nova categoria',
      'localizacao'=> 'Criar nova categoria',
      'secundaria' => 'dashboard/categoria/modulo.php'
    );

    $this->load->view('dashboard/home', $dados);
  }
}
