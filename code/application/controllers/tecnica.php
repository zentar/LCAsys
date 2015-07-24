<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnica  extends CI_Controller {

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
   $datos=$this->metodo_model->get_nombre_metodo();
   $datos1=$this->parametro_model->get_nombre_parametro();
   $this->load->view('ingreso_tecnica_view',  compact("datos","datos1"));
}

function cargarcategoria()
{  
    $datos=$this->categoria_model->getcategoria();
   
    $this->load->view('mostrar_categoria_view',compact("datos"));
    
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

public function cargar_articulo()
{
    if($this->input->post('categoria',true)==1)
    {
        $datos=$this->articulo_model->getnombrequipo();
        
    } 
    else
    {
        if($this->input->post('categoria',true)==2)
                      $datos=$this->articulo_model->getnombrevidrieria();
        if($this->input->post('categoria',true)==3)
        
                      $datos=$this->articulo_model->getnombrereactivo();
            
            
    }
    $this->load->view('mostrar_nombreequipo_view',  compact("datos"));
}

public function cruddettecnica()
{
    $this->load->view('cruddetalle_view');
}


}

?>