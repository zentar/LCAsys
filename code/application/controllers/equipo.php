<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipo
 *
 * @author sandro
 */
class Equipo extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
public function index()
{
    
}
public function ingreso()
{
    
       $this->load->view('ingreso_equipo_view');     
      
}


public function mostrar()
{
    $datos=$this->inventario_model->getEquipo();
    $this->load->view('consulta_equipo_view',  compact("datos"));
}
public function cargar()
{
  

}


public function guardar_equipo()
{
   $data=array
                   (
                        'nombre'=>$this->input->post("nombre",true),
                        'marca'=>$this->input->post("marca",true),
                        'modelo'=>$this->input->post("modelo",true),
                        'cantidad'=>$this->input->post("cantidad",true),
                        'costo'=>$this->input->post("costo",true),
                        'tiempo'=>$this->input->post("tiempo",true),
           
                        
                   );
    $this->inventario_model->insertar_equipo($data);
   
    
}




      
    
    
    
    
}
