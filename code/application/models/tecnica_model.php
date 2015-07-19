<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnica_model  extends CI_Model {

   // public function __construc(){
    


   public function registrar()  {
    
    $this->db->insert('tb_tecnica',array(
     'tb_metodo_codigo_metodo'=>$this->input->post('metodo',TRUE),
     'tb_parametro_codigo_parametro'=>$this->input->post('parametro',TRUE),
     'tiempo_tecnica'=>$this->input->post('tiempo_tecnica',TRUE)
     
 
        ));
        
   }
}
    
?>