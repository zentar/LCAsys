<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_parametro  extends CI_Model {
   // public function __construc(){
	
   public function registrar()  {
    // echo("no sale");
   	$this->db->insert('tb_parametro',array(
     'nombre_parametro'=>$this->input->post('nombre_parametro',TRUE),
     'max_parametro'=>$this->input->post('max_parametro',TRUE),
     'min_parametro'=>$this->input->post('min_parametro',TRUE),
     'precio_parametro'=>$this->input->post('precio_parametro',TRUE),
     'iva_parametro'=>$this->input->post('iva_parametro',TRUE),
     'estado'=>$this->input->post('estado',TRUE)
 
   		));
   }
}
?>