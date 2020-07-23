<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$dados = array(
			'titulo'    => 'Seja bem-vindo: Acesse com sua conta para criar mensagem',
			'Subtitulo' => 'Ao entrar com seu usuário você vai poder criar novas mensagens,
			acompanhar quem curtiu as suas mensagens e curtir as mensagens dos outros, assim
			como comentar o que achou das mensagens.'
		);
		$this->load->view('usuario/login', $dados);
	}
}
