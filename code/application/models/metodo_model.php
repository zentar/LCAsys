<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metodo_model  extends CI_Model {

   // public function __construc(){
	


   public function registrar()  {
    // echo("no sale");
   	$this->db->insert('tb_metodo',array(
     'nombre_metodo'=>$this->input->post('nombre_metodo',TRUE),
     'estado'=>$this->input->post('estado',TRUE)
 
   		));
   }
    public function getmetodo()
    {
     $this->db->select('codigo_metodo,nombre_metodo');
   $this->db->from('tb_metodo');
   $this->db->order_by('codigo_metodo');
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;   
    }

     public function get_nombre_metodo()
    {
     $this->db->select('codigo_metodo,nombre_metodo');
   $this->db->from('tb_metodo');
   $this->db->order_by('codigo_metodo');
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;   
    }

}  
?>