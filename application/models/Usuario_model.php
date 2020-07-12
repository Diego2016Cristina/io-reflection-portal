<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
  public function doLogin($dados = NULL) {

    if(is_array($dados)) {
      //CRIANDO A SESSION
      $logado = $dados['logado'];
      $this->session->set_userdata("logado", $logado);
      //END

      $this->db->where('email', $dados['email']);
      $this->db->where('senha', $dados['senha']);
      $this->db->limit(1);
      $query = $this->db->get('usuario');

      return $query->row();
    }
  }
}
