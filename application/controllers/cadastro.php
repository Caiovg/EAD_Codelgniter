<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastro extends CI_Controller {
    
    public function validarCadastro(){

        $Nome = $this->input->post('Nome');
        $Sobrenome = $this->input->post('Sobrenome');
        $NomedoUsuario = $this->input->post('NomedoUsuario');
        $CPF = $this->input->post('CPF');
        $Nascimento = $this->input->post('Nascimento');
        $RG = $this->input->post('RG');
        $Email = $this->input->post('Email');
        $Celular = $this->input->post('Celular');
        $Endereco = $this->input->post('Endereco');
        $Numero = $this->input->post('Numero');
        $Senha = $this->input->post('Senha');
        $Confisenha = $this->input->post('Confisenha');


        if(empty($Nome || $Sobrenome || $NomedoUsuario || $CPF || $Nascimento || $RG || $Email || $Celular || $Endereco || $Numero || $Senha || $Confisenha)){
            //echo "ErroNome";
            die("camposvazios");//os dois e a mesma coisa.
        }
        if(empty($Nome) || is_null($Nome)){
            //echo "ErroNome";
            die("ErroNome");//os dois e a mesma coisa.
        }
        if(rtrim($Nome)){
            echo "Preencha o nome com no mínimo 2 caracteres.";
            die();
        }
        if(empty($Sobrenome)){
            die("ErroSobrenome");
        }
        if(empty($NomedoUsuario)){
            echo "ErroNomedoUsuario";
            die();
        }
        if(empty($CPF)){
            echo "ErroCPF";
            die();
        }
        if($CPF !=13){
            echo "CPf deve 13";
            die();
        }
        if(empty($Nascimento)){
            echo "ErroNascimento";
            die();
        }
        if(empty($RG)){
            echo "ErroRG";
            die();
        }
        if($RG != 14){
            echo "CPf deve 13";
            die();
        }
        if(empty($Email)){
            echo "ErroEmail";
            die();
        }
        if(empty($Celular)){
            echo "ErroCelular";
            die();
        }
        if(empty($Endereco)){
            echo "ErroEndereco";
            die();
        }
        if(empty($Numero)){
            echo "ErroNumero";
            die();
        }
        if(!is_numeric($Numero)){
            die("Erroletra");
        }
        if(empty($Senha)){
            die("ErroSenha");
        }
        if(empty($Confisenha)){
            die("ErroConfisenha");
        }
        if(empty($Senha == $Confisenha)){
            echo "ErroSenhasDiferentes";
            exit();
        }
        
        echo "SucessoCliente";
    }
}