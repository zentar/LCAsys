<?php


class Embalaje extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    
public function ingreso()
{
    $this->load->view('ingreso_embalaje_view');
}

public function mostrar()
{
  
            $datos=$this->embalaje_model->getembalaje();
      
        $this->load->view('mostrar_embalaje_view',  compact("datos"));


}


public function cargar()
{
    
}

        public function guardar()
    {
    
   	$data = array
                    (
                    'nombre_embalaje' => $this->input->post("nombre", true),
                    'descrp_embalaje' => $this->input->post("descripcion", true),
            );
            $this->embalaje_model->registrar($data);   
            $this->mostrar();
            
           
        
      
   }
    
}

    

