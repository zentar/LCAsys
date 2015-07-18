<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_metodo  extends CI_Model {
   // public function __construc(){
	
   public function registrar()  {
    // echo("no sale");
   	$this->db->insert('tb_metodo',array(
     'nombre_metodo'=>$this->input->post('nombre_metodo',TRUE),
     'estado'=>$this->input->post('estado',TRUE)
 
   		));
   }
}
   
?>