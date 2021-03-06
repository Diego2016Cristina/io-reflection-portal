<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	function setMsg($id, $msg, $tipo) {

		$CI =& get_instance();
		switch ($tipo) {
			case 'erro':
				$CI->session->set_flashdata($id, '<div class="alert alert-danger" role="alert">'. $msg .'</div>');
				break;
			case 'sucesso':
				$CI->session->set_flashdata($id, '<div class="alert alert-success" role="alert">'. $msg .'</div>');
				break;
				// usado especificamente na tela de login e registrar usuario, pois os dois utilizam-se do materialize
			case 'erroLogin':
				$CI->session->set_flashdata($id, '<div id="msgErroLogin" style="position:relative; padding: 5px; color: #000">'. $msg .'</div>');
			break;
			case 'successLogin':
				$CI->session->set_flashdata($id, '<div class="card green darken-1 mark" id="m3" style="position:relative; padding: 5px; color: #fff; font-weight: bold; border-top-left-radius: 15px">'. $msg .'</div>');
			break;
		}

		return FALSE;
	}

	function getMsg($id) {

		$CI =& get_instance();
		if($CI->session->flashdata($id) ) {
			echo $CI->session->flashdata($id);
		}
	}

	function errosValidacao() {
    if(validation_errors()) {
      echo '<div class="alert alert-danger" role="alert">'. validation_errors() .'</div>';
    }
  }
