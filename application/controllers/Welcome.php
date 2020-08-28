<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function cadastro()
	{
		$this->load->view('cadastro');
	}

}
