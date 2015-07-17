<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_metodo  extends CI_Controller {

	public function __construc()
	{
		parent::__construc();
		//$this->load->library('form_validation');
      $this->load->model('m_metodo');
	}

   public function index(){
   	$this->load->view('w_metodo');
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
   		$this->form_validation->set_rules('nom_metodo','metodo','required|alpha|max_length[50]');
   		$this->form_validation->set_rules('estado','Estado','required');
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
           $this->m_metodo->registrar();
            echo("Registro Guardado");
   		}

   	} 	
   }
}
?>