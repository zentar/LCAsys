<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model  extends CI_Model {

   // public function __construc(){
	


     public function registrar()  {
    // echo("no sale");
    $this->db->insert('tb_categoria',array(
     'nombre_categoria'=>$this->input->post('nombre_categoria',TRUE),
      'desc_categoria'=>$this->input->post('desc_categoria',TRUE),
 
      ));
   }

     public function get_categoria()
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