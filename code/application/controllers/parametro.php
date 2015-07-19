<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametro extends CI_Controller {

   public function __construc()
   {
      parent::__construc();
      //$this->load->library('form_validation');
      $this->load->model('parametro_model');
   }


   public function index(){
      $this->load->view('ingreso_parametro_view');
   }

   public function guardar()   {
    //  echo "controlador";
      if(!$this->input->is_ajax_request())
      {
         redirect('404');
   }
      else
      {
        // echo "hola"; 
        //  echo("todo");
         $this->form_validation->set_rules('nombre_parametro','Nombre','required|alpha|max_length[45]');
        // $this->form_validation->set_rules('unidad','Unidad','required|xss_clean');
         $this->form_validation->set_rules('max_parametro','Limite','required|alpha_dash|max_length[20]');
         $this->form_validation->set_rules('min_parametro','Limite','required|alpha_dash|max_length[20]');
         $this->form_validation->set_rules('precio_parametro','Precio','required|decimal|max_length[20]');
       //  $this->form_validation->set_rules('iva_parametro','IVA','required');
         $this->form_validation->set_rules('estado','Estado','required');
         $this->form_validation->set_message('required','El campo %s es requerido');
         $this->form_validation->set_message('alpha','El campo %s solo puede contener caracteres alfabeticos.');
         $this->form_validation->set_message('alpha_dash','El campo %s solo puede contener caracteres alfanumericos, guiones bajos o guiones ');
        // echo("todo bien");
         if ($this->form_validation->run() == false) {
            //echo json_encode(validation_errors());
             $error = json_encode(validation_errors());
            $error = str_replace('"',"",$error);
            $error = str_replace('<\/p>\n',"",$error);
            echo $error;
         } else {
             $this->parametro_model->registrar();
            echo("Registro Guardado");
         }

      }  
   }
   public function mostrar()
{
  
            $datos=$this->parametro_model->getparametro();
      
        $this->load->view('mostrar_parametro_view',  compact("datos"));


}

}
?>