<?php


class Tipomedida extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    
public function ingreso()
{
    $this->load->view('ingreso_tipomedida_view');
}

public function mostrar()
{
  
            $datos=$this->tipomedida_model->gettipomedida();
      
        $this->load->view('mostrar_tipomedida_view',  compact("datos"));


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
   	
   		$this->form_validation->set_rules('nombretipo','nombre','required|alpha|max_length[50]');
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
                        
                    'nombre'=>$this->input->post("nombretipo",true)    
           
                        
                   );
            $this->tipomedida_model->registrar($data);   	
            echo("Registro Guardado");
   		}

   	} 	
   }
    
}

    

