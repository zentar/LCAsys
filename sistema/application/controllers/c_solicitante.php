<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_solicitante extends CI_Controller {

   public function __construc()
   {
      parent::__construc();
      //$this->load->library('form_validation');
   }

   public function index(){
      $this->load->view('w_solicitante');
   }

   public function guardar()   {
      
      if(!$this->input->is_ajax_request())
      {
         redirect('404');
   }
      else
      {
        // echo "hola"; 
          //echo("todo");
         $this->form_validation->set_rules('nom_solicitante','Nombre','required|xss_clean');
         $this->form_validation->set_rules('ape_solicitante','Unidad','required|xss_clean');
         $this->form_validation->set_rules('ced_solicitante','Cedula','required|xss_clean');
         $this->form_validation->set_rules('estado','Estado','required|xss_clean');
         $this->form_validation->set_message('required','El campo %s es requerido');
         //echo("todo bien");
         if ($this->form_validation->run() == false) {
            echo json_encode(validation_errors());
         } else {
            echo("todo bien");
         }

      }  
   }
}
?>