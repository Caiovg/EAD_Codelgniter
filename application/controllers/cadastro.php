<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastro extends CI_Controller {
    
    public function validarCadastro(){

        $dados = [
            'Nome' => $this->input->post('Nome'),
            'Sobrenome' => $this->input->post('Sobrenome'),
            'UserName' => $this->input->post('UserName'),
            'CPF' => $this->input->post('CPF'),
            'Nascimento' => $this->input->post('Nascimento'),
            'RG' => $this->input->post('RG'),
            'Email' => $this->input->post('Email'),
            'Celular' => $this->input->post('Celular'),
            'Cep' => $this->input->post('cep'),
            'Endereco' => $this->input->post('logradouro'),
            'Bairro' => $this->input->post('bairro'),
            'UF' => $this->input->post('uf'),
            'Cidade' => $this->input->post('localidade'),
            'Numero' => $this->input->post('Numero'),
            'Senha' => $this->input->post('Senha'),
            'Tipo' => "cliente",
        ];
        $Confisenha = $this->input->post('Confisenha');
        
        $this->load->model('CadastroModel');

        if(empty($dados['Nome'] || $dados['Sobrenome'] || $dados['NomedoUsuario'] || $dados['CPF'] || $dados['Nascimento'] || $dados['RG'] || $dados['Email'] || $dados['Celular'] || $dados['Cep'] || $dados['Endereco'] || $dados['Bairro'] || $dados['UF'] || $dados['Cidade'] || $dados['Numero'] || $dados['Senha'])){
            //echo "ErroNome";
            die("camposvazios");//os dois e a mesma coisa.
        }
        if(empty($dados['Nome'])){
            //echo "ErroNome";
            die("ErroNome");//os dois e a mesma coisa.
        }
        if(empty($dados['Sobrenome'])){
            die("ErroSobrenome");
        }
        if(empty($dados['UserName'])){
            echo "ErroNomedoUsuario";
            die();
        }

        $linhaUserName = $this->CadastroModel->VerificarUserName($dados['UserName']);

        if(!empty($linhaUserName['UserName'])){
            echo "ErroUserNameExiste";
            die();
        }

        if(empty($dados['CPF'])){
            echo "ErroCPF";
            die();
        }
        if(strlen($dados['CPF'] <= 14)){
            echo "CPfdeve11";
            die();
        }

        $linhaCpf = $this->CadastroModel->VerificarCPF($dados['CPF']);

        if(!empty($linhaCpf['CPF'])){
            echo "ErroCPFExiste";
            die();
        }

        if(empty($dados['RG'])){
            echo "ErroRG";
            die();
        }

        $linhaRG = $this->CadastroModel->VerificarRG($dados['RG']);

        if(!empty($linhaRG['RG'])){
            echo "ErroRGExiste";
            die();
        }

        if(empty($dados['Nascimento'])){
            echo "ErroNascimento";
            die();
        }
        if(empty($dados['Celular'])){
            echo "ErroCelular";
            die();
        }

        $linhaCelular = $this->CadastroModel->VerificarCelular($dados['Celular']);

        if(!empty($linhaCelular['Celular'])){
            echo "ErroCelularExiste";
            die();
        }

        if(empty($dados['Email'])){
            echo "ErroEmail";
            die();
        }
        
        $linhaEmail = $this->CadastroModel->VerificarEmail($dados['Email']);

        if(!empty($linhaEmail['Email'])){
            echo "ErroEmailExiste";
            die();
        }

        if(empty($dados['Cep'])){
            echo "ErroCep";
            die();
        }
        if(empty($dados['Endereco'])){
            echo "ErroEndereco";
            die();
        }
        if(empty($dados['Numero'])){
            echo "ErroNumero";
            die();
        }
        if(!is_numeric($dados['Numero'])){
            die("Erroletra");
        }
        if(empty($dados['Bairro'])){
            die("ErroBairro");
        }
        if(empty($dados['Cidade'])){
            die("Errocidade");
        }
        if(empty($dados['UF'])){
            die("Errouf");
        }
        if(empty($dados['Senha'])){
            die("ErroSenha");
        }
        if(empty($Confisenha)){
            die("ErroConfisenha");
        }
        if(empty($dados['Senha'] == $Confisenha)){
            echo "ErroSenhasDiferentes";
            exit();
        }
        
        $this->load->model('CadastroModel');

        if($this->CadastroModel->CadastrarUsuario($dados)){
            echo "SucessoCliente";
            die();
        }
        else{
            echo "ErroCadastro";
            exit();
        }
    }
}