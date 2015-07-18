<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ingreso_model
 *
 * @author sandro
 */
class Inventario_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    //genera el listado de los equipos
    public function getEquipo()
    {
     $this->db->select('codigo_articulo,nombre,marca,modelo');
   $this->db->from('tb_articulo');
   $this->db->order_by('codigo_articulo');
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;
        
        
       
    }
     public function insertar_equipo($datos=array())
    {
        
        $this->db->insert("tb_articulo",$datos);
        return true;
    }
    
    
    
    public function getVidrieria()
    {
        
    }
    public function getReactivo()
    {
        
    }
}
