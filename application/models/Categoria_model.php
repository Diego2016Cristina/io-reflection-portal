<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {
  public function getCategorias() {

    return $this->db->get('categoria')->result();

  }
}
