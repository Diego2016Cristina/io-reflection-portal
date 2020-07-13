<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {
  public function getCategorias() {

    return $this->db->get('categoria')->result();

  }

  //adicionar nova categorias
  public function doInsert($dados=NULL) {
    if(is_array($dados)) {
      $this->db->insert('categoria', $dados);

      if( $this->db->affected_rows() > 0 ) {

        setMsg('msgCadastro','Categoria cadastrada com sucesso.', 'sucesso');

      }else {

        setMsg('msgCadastro','Erro ao tentar cadastrar categoria.', 'erro');

      }
    }
  }
}
