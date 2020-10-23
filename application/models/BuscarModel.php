<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarModel extends CI_Model {
    
    public function logarUsuario($usuario, $senha){
        
        /*$this->db->where("UserName", $usuario);
        $this->db->or_where("Email", $usuario);
        $this->db->where("Ativo = 1");
        $this->db->where("Senha", $senha);*/
        $where = "(UserName='$usuario' or Email='$usuario') and Senha='$senha' and Ativo=1";
        $this->db->where($where);

        $resultado = $this->db->get("usuario")->row_array();
        return $resultado;
    }
}
?>