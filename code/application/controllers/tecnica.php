<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnica  extends CI_Controller {

   public function __construc()
   {
      parent::__construc();
      //$this->load->library('form_validation');
      $this->load->model('metodo_model');
      $this->load->model('parametro_model');
      $this->load->model('tecnica_model');      
   }

   public function index(){
    //     $this->data['tb_metodo'] = $this->dropdown_metodo();
     // $this->load->view('ingreso_tecnica_view');
   }

function ingresar()
{   //Obtener el nombre del metodo y parametro
   $datos=$this->metodo_model->get_nombre_metodo();
   $datos1=$this->parametro_model->get_nombre_parametro();
   $this->load->view('ingreso_tecnica_view',  compact("datos","datos1"));
}

public function guardar()   {

   //echo($this->input->post('metodo',true));
   
      if(!$this->input->is_ajax_request())
      {
         redirect('404');
   }
      else
      {
         //echo "hola"; 
         $this->form_validation->set_rules('tiempo_tecnica','tiempo','required');
     
        if ($this->form_validation->run() == false) {
            //echo json_encode(validation_errors());
            $error = json_encode(validation_errors());
            $error = str_replace('"',"",$error);
            $error = str_replace('<\/p>\n',"",$error);
            echo $error;
         } else {
            //echo("todo bien");
           $this->tecnica_model->registrar();
            echo("Registro Guardado");
         }
   }
}
}

?>