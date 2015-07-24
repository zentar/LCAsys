<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model  extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
   // public function __construc(){
	


   
   
   
    public function getcategoria()
    {
     $this->db->select('cod_categoria,nombre_categoria');
   $this->db->from('tb_categoria');
   $this->db->order_by('cod_categoria');
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;       
    }
    
  
            
}
   
?>