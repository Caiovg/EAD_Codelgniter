<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teste extends CI_Controller {

	public function index()
	{
        $num1 = 10;
        $num2 = 20;
        $soma = $num1 + $num2;
		echo '<h1> Boa Noite '.$soma.'</h1>';
	}
}