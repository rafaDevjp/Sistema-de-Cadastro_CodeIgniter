<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {



	//------------------------------------------------------------//
    //  Método home
    //------------------------------------------------------------//
	// *Função é iniciado apos ser redirecionado pela método index no controller migrate
 	//aqui a page homer é iniciada junto do template na tela 
	public function home(){
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}
