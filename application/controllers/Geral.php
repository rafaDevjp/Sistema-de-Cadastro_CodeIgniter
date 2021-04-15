<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{
			$this->load->library('migration');
			if ($this->migration->current() === FALSE)
			{
					show_error($this->migration->error_string());
			}
	}

	public function home()
	{
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}
