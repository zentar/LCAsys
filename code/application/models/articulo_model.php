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
class Articulo_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    //genera el listado de los equipos
     public function insertar_equipo($datos=array())
    {
        
        $this->db->insert("tb_articulo",$datos);
        return true;
    }
    
    public function getnombrequipo()
    {
     $this->db->select('codigo_articulo,nombre_articulo');
   $this->db->from('tb_articulo');
   $this->db->where('tb_categoria_cod_categoria = 1');
   
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;
        
        
       
    }
    
   
    
    public function getnombrevidrieria()
    {
         $this->db->select('codigo_articulo,nombre_articulo');
   $this->db->from('tb_articulo');
   $this->db->where('tb_categoria_cod_categoria = 2');
   
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;
    }
    public function getnombrereactivo()
    {
         $this->db->select('codigo_articulo,nombre_articulo');
   $this->db->from('tb_articulo');
   $this->db->where('tb_categoria_cod_categoria = 3');
   
   $consulta = $this->db->get();
   $resultado = $consulta->result();
   return $resultado;
    }
}
