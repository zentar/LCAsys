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
   
   
      
            
}
   
?>