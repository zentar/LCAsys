<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnica_model  extends CI_Model {

   // public function __construc(){
    


   public function registrar($datos)  {
    $this->db->trans_begin();

    $articulos = $datos['articulos'];
    unset($datos['articulos']);

    $this->db->insert('tb_tecnica',$datos);

    $tecnica_id = $this->db->insert_id();

    for ($i=0; $i<count($articulos); $i++) {
    	$articulos[$i]['tb_tecnica_codigo_tecnica'] = $tecnica_id;

        $this->db->insert('tb_dettecnica',$articulos[$i]);
    }    

    if ($this->db->trans_status() === FALSE) {
          $this->db->trans_rollback();
          return false;
        } else {
          $this->db->trans_commit();
          return true;
        }
        
   }
}
    
?>