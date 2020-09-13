<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    
    public function validarLogin(){
        
        $usuario = $this->input->post("email"),
        $senha = $this->input->post("senha"),
        if(empty($usuario)){
            echo "ErroUser";  
            die();      
        }
        if(empty($senha)){
            echo "ErroPass";
            exit();    
        }

        $this->load->model('BuscarModel');

        if($this->BuscarModel->BuscarUsuario($usuario, $senha)){
            echo "LogadoSucesso";
            die();
        }
        else{
            echo "FalhaLogin";
            exit();
        }
    }
}