<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_proveedor extends CI_Controller {

   public function __construc()
   {
      parent::__construc();
      //$this->load->library('form_validation');
   }

   public function index(){
      $this->load->view('w_proveedor');
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
         $this->form_validation->set_rules('nom_prov','Nombre','required|xss_clean');
         $this->form_validation->set_rules('tipo_docu','Tipodoc','required|xss_clean');
         $this->form_validation->set_rules('num_telfprinc','Telefono1','required|xss_clean');
         $this->form_validation->set_rules('num_telfsec','Telefono2','required|xss_clean');
         $this->form_validation->set_rules('email_prov','Email','required|xss_clean');
         $this->form_validation->set_rules('ra_social_prov','Razon social','required|xss_clean');
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