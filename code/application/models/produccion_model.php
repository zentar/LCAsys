<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnica_model  extends CI_Model {

   // public function __construc(){
    


   public function registrar($datos)  {
    $this->db->trans_begin();

    $produccion = $datos['produccion'];
    unset($datos['produccion']);

    $this->db->insert('tb_produccion',$datos);

    $produccion_id = $this->db->insert_id();

    for ($i=0; $i<count($produccion); $i++) {
    	$produccion[$i]['tb_produccion_codigo_produccion'] = $produccion_id;
      $this->db->insert('tb_detproduccion',$produccion[$i]);
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