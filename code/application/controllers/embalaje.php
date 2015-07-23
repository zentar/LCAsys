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
    if(!$this->input->is_ajax_request())
   	{
   		redirect('404');
	}
   	else
   	{
   	
   		$this->form_validation->set_rules('nombre','nombre','required|alpha|max_length[50]');
   		$this->form_validation->set_rules('descripcion','descripcion','required|alpha|max_length[400]');
   		
                $this->form_validation->set_message('required','El nombre %s es requerido');
                $this->form_validation->set_message('alpha','El campo %s solo puede contener caracteres alfabeticos.');
         	if ($this->form_validation->run() == false) {
   	     $error = json_encode(validation_errors());
            $error = str_replace('"',"",$error);
            $error = str_replace('<\/p>\n',"",$error);
            echo $error;
   		} 
                else {
   		$data=array
                   (
                        'nombre_embalaje'=>$this->input->post("nombre",true),
                        'descrp_embalaje'=>$this->input->post("descripcion",true),
                        
           
                        
                   );
            $this->embalaje_model->registrar($data);   	
            echo("Registro Guardado");
   		}

   	}
        
      
   }
    
}

    

