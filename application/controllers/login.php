<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    
    public function validarLogin(){
        
        $usuario = $this->input->post("email");
        $senha = $this->input->post("senha");

        if(empty($usuario)){
            echo "ErroUser";  
            die();      
        }
        
        if(empty($senha)){
            echo "ErroPass";
            exit();    
        }

        $this->load->model('BuscarModel');
        $resultado = $this->BuscarModel->logarUsuario($usuario, $senha);
        
        /*var_dump($resultado);*/
        if(empty($resultado)){
            echo "FalhaLogin";
        }else{
            switch($resultado['Tipo']){
                case 'cliente':
                    echo "SucessoCliente";
                    break;
                case 'adiministrador':
                    echo "SucessoADM";
                    break;
                case 'funcionario':
                    echo "SucessoFuncionario";
                    break;
                default:
                    echo "ErroLogin";
                break;
            }
        }
    }
}