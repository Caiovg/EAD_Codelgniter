<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroModel extends CI_Model {
    
    public function CadastrarUsuario($dados){
        
        return $this->db->insert('usuario', $dados);     
    }
    public function VerificarEmail($email)
    {
        $this->db->where('email', $email);
        $linhaEmail = $this->db->get("Usuario")->row_array();
        return $linhaEmail;
    }
    public function VerificarCPF($cpf)
    {
        $this->db->where('CPF', $cpf);
        $linhaCpf = $this->db->get("Usuario")->row_array();
        return $linhaCpf;
    }
    public function VerificarUserName($UserName)
    {
        $this->db->where('UserName', $UserName);
        $linhaUserName = $this->db->get("Usuario")->row_array();
        return $linhaUserName;
    }
    public function VerificarCelular($celular)
    {
        $this->db->where('Celular', $celular);
        $linhaCelular = $this->db->get("Usuario")->row_array();
        return $linhaCelular;
    }
    public function VerificarRG($RG)
    {
        $this->db->where('RG', $RG);
        $linhaRG = $this->db->get("Usuario")->row_array();
        return $linhaRG;
    }
}
?>