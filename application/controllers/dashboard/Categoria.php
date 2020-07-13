<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('categoria_model', 'categoria');
    if(!$this->session->userdata('logado')) {
      redirect('sair');
    }
  }

	public function index() {
    $dados = array(
      'titulo'     => 'Listando as categorias',
      'localizacao'=> 'Categoria',
      'secundaria' => 'dashboard/categoria/index.php',
      'categoria'  => $this->categoria->getCategorias(),
    );

    $this->load->view('dashboard/home', $dados);
	}

  public function Modulo($id_categoria=NULL) {
    $data = NULL;

    if($id_categoria) {
      $dados['titulo'] = "Atualizar Categoria";

    }else {
      $dados['titulo'] = "Nova categoria";
    }

    $dados['secundaria'] = 'dashboard/categoria/modulo.php';
    $dados['dados'] = $data;

    $this->load->view('dashboard/home', $dados);
  }

  public function core() {
    $this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[5]');

    if($this->form_validation->run() == TRUE) {

      $dadosCategoria['nome'] = $this->input->post('nome');
      $dadosCategoria['ativo'] = $this->input->post('ativo');

      $this->categoria->doInsert($dadosCategoria);
      redirect('categoriaModulo', 'refresh');

    }else {
      $this->modulo();
    }
    
  }
}
