<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produccion  extends CI_Controller {

   public function __construc()
   {
      parent::__construc();
      //$this->load->library('form_validation');


   }

   public function index(){
    //     $this->data['tb_metodo'] = $this->dropdown_metodo();
     // $this->load->view('ingreso_tecnica_view');
   }

function ingresar()
{   //Obtener el nombre del metodo y parametro
     $datos=$this->empresa_model->nombreempresa();
   $this->load->view('ingreso_produccion_view',  compact("datos"));

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
           $resultado = $this->produccion_model->registrar($this->input->post());
           if (resultado) {
            echo("Registro Guardado");
          } else {
            echo("Error");
          }
         }
   }
}
}

?>