<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    
    public function validarLogin(){
        
        $usuario = $this->input->post("email");
        $senha = $this->input->post("senha");

        if(empty($usuario)){
            echo "ErroEmail";  
            die();      
        }
        if(empty($senha)){
            echo "ErroSenha";
            die();    
        }
    }
}