<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metodo  extends CI_Controller {

	public function __construc()
	{
		parent::__construc();
		//$this->load->library('form_validation');
     
	}

   public function index(){
   	//$this->load->view('ingreso_metodo_view');
   }
    public function ingresar()
{
  
   $this->load->view('categoria_metodo_view');


}

   public function guardar()   {
   //	echo "controlador";
      if(!$this->input->is_ajax_request())
   	{
   		redirect('404');
	}
   	else
   	{
   	   //echo "hola";	
   		$this->form_validation->set_rules('nombre_categoria','categoria','required|alpha|max_length[50]');
    		$this->form_validation->set_message('required','El nombre %s es requerido');
         $this->form_validation->set_message('alpha','El campo %s solo puede contener caracteres alfabeticos.');
         //echo("todo bien");
   		if ($this->form_validation->run() == false) {
   			//echo json_encode(validation_errors());
            $error = json_encode(validation_errors());
            $error = str_replace('"',"",$error);
            $error = str_replace('<\/p>\n',"",$error);
            echo $error;
   		} else {
   			//echo("todo bien");
           $this->categoria_model->registrar();
            echo("Registro Guardado");
   		}

   	} 	
   }
     
}
?>