<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametro_model  extends CI_Model {

   // public function __construc(){
	


   public function registrar()  {
    // echo("no sale");
   	$this->db->insert('tb_parametro',array(
     'nombre_parametro'=>$this->input->post('nombre_parametro',TRUE),
     'max_parametro'=>$this->input->post('max_parametro',TRUE),
     'min_parametro'=>$this->input->post('min_parametro',TRUE),
     'precio_parametro'=>$this->input->post('precio_parametro',TRUE),
     'iva_parametro'=>$this->input->post('precio_parametro',TRUE)*0.12,
     'estado'=>$this->input->post('estado',TRUE)
 
   		));
   }
     public function getparametro()
    {
      $this->db->select('codigo_parametro,nombre_parametro,max_parametro,min_parametro,precio_parametro,iva_parametro');
      //$this->db->select('codigo_parametro,nombre_parametro','max_parametro','min_parametro','precio_parametro','iva_parametro');
      $this->db->from('tb_parametro');
      $this->db->order_by('codigo_parametro');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
    }
     public function get_nombre_parametro()
    {
      $this->db->select('codigo_parametro,nombre_parametro');
      $this->db->from('tb_parametro');
      $this->db->order_by('codigo_parametro');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;   
    }
    
    public function getid()
    {
       
    }
}
   
?>