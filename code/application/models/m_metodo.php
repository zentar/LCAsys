<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_metodo  extends CI_Model {

   // public function __construc(){
	


   public function registrar()  {
    // echo("no sale");
   	$this->db->insert('tb_metodo',array(
     'nom_metodo'=>$this->input->post('nom_metodo',TRUE),
     'estado'=>$this->input->post('estado',TRUE)
 
   		));
   }
}
   
?>