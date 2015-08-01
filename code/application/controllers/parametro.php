<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametro extends CI_Controller {

   public function __construc()
   {
      parent::__construc();
      //$this->load->library('form_validation');
    
   }

public function ingresar()
{
   $this->parametro_model->registrar();
   $this->index(); 
}
   
   
   public function mostrar(){
       
     
       
           
           
           $datos=$this->parametro_model->getparametro();
      
        $this->load->view('mostrar_parametro_view',  compact("datos"));
   }
    


    




}
?>