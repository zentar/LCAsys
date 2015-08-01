<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa_model  extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
   // public function __construc(){
	


   public function registrar($datos=array())  {
    
   	$this->db->insert("tb_empresa",$datos);
        return true;
   }
   
       public function nombreempresa()
     {
     $this->db->select('codigo_empresa,nombre_empresa');
   $this->db->from('tb_empresa');
   $this->db->order_by('codigo_empresa');
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;       
    }  
      
            
}
   
?>