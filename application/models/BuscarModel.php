<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarModel extends CI_Model {
    
    public function BuscarUsuario($usuario, $senha){
        
        return $this->db->select('usuario', $dados);     
    }
}
?>