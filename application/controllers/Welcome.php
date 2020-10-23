<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function login()
	{
		$this->load->view('Telalogin');
	}
	public function cadastro()
	{
		$this->load->view('Telacadastro');
	}
	public function produtos()
	{
		$this->load->view('Telaprodutos');
	}
	public function telacliente()
	{
		$this->load->view('Telacliente');
	}
}
