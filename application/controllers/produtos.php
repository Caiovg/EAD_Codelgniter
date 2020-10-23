<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produtos extends CI_Controller
{

    public function validarCadastroItens()
    {

        $dados = [
            'nome_produto' => $this->input->post('nomeItem'),
            'descricao' => $this->input->post('descricao'),
            'preco' => $this->input->post('preco'),
        ];
        $fotos = array();


        $this->load->model('CadastroModel');

        if (empty($dados['nome_produto'])) {
            die("ErroNome");
        }

        if (empty($dados['descricao'])) {
            die("ErroDescricao");
        }

        if (empty($dados['preco'])) {
            die("ErroPreco");
        }

        if(isset($_FILES['foto']))
        {
            for ($i=0; $i < count($_FILES['foto']['name']); $i++)
            {
                $nome_arquivo = md5($_FILES['foto']['name'][$i].rand(1,999)).'.jpg';
                move_uploaded_file($_FILES['foto']['tmp_name'][$i], 'assets/imagens/produtos/'.$nome_arquivo);
                //salvar noes para enviar para o banco de dados
                array_push($fotos, $nome_arquivo);
            }
        }

        if ($this->CadastroModel->CadastrarItem($dados, $fotos)) {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }
}