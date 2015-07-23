<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Embalaje_model  extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
   // public function __construc(){
	


   public function registrar($datos=array())  {
    
   	 $this->db->insert("tb_embalaje",$datos);
        return true;
   }
   
   
    public function getembalaje()
    {
     $this->db->select('codigo_embalaje,nombre_embalaje,descrp_embalaje');
   $this->db->from('tb_embalaje');
   $this->db->order_by('codigo_embalaje');
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;       
    }
    
    public function nombreembalaje()
     {
     $this->db->select('codigo_embalaje,nombre_embalaje');
   $this->db->from('tb_embalaje');
    $this->db->where('codigo_embalaje >1');
   $this->db->order_by('codigo_embalaje');
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;       
    }       
            
}
   
?>