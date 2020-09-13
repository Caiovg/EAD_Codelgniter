<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroModel extends CI_Model {
    
    public function CadastrarUsuario($dados){
        
        return $this->db->insert('usuario', $dados);     
    }
}
?>