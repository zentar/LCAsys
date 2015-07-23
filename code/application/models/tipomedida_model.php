<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipomedida_model  extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
   // public function __construc(){
	


   public function registrar($datos=array())  {
    // echo ("modelo");
   	 $this->db->insert("tb_tipomedida",$datos);
        return true;
   }
   
   
   public function gettipomedida()
    {
     $this->db->select('codigo_tipomedida,nombre');
   $this->db->from('tb_tipomedida');
   $this->db->order_by('codigo_tipomedida');
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;
        
        
       
    }
    
    public function nombremedida()
    {
     $this->db->select('codigo_tipomedida,nombre');
   $this->db->from('tb_tipomedida');
   $this->db->where('codigo_tipomedida >1');
   
   $this->db->order_by('codigo_tipomedida');
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;
        
        
       
    }
}
   
?>