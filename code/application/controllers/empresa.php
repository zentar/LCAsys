<?php


class Empresa extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    
public function ingreso()
{
    $this->load->view('ingreso_empresa_view');
}

public function mostrar()
{
  
           


}




public function guardar()
{
   
   		$data=array
                   (
                        'nombre_empresa'=>$this->input->post("nombre",true),
                       'direccion_empresa'=>$this->input->post("direccion",true),
                       'ruc_empresa'=>$this->input->post("ruc",true),
                        'telefono_empresa'=>$this->input->post("telefono",true),
                       'correo_empresa'=>$this->input->post("correo",true),
                       'nombre_solicitante'=>$this->input->post("nombre_solicitante",true),
                       
                        
           
                        
                   );
            $this->empresa_model->registrar($data);   	
            echo("Registro Guardado");
   		

   	}
        
      
   
    
}

    

