<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarModel extends CI_Model {
    
    public function logarUsuario($usuario, $senha){

        /*$resultado = $this->db->select("*")
        ->from("usuario")
        ->where("UserName = $usuario or Email = $usuario")
        ->get()->result_array();*/
        $this->db->where("UserName", $usuario);
        $this->db->or_where("Email", $usuario);
        $this->db->where("Senha", $senha);
        $this->db->where("Ativo = 1");

        $resultado = $this->db->get("usuario")->row_array();
        return $resultado;
    }
}
?>