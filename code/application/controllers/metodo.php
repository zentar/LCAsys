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
  
   $this->load->view('ingreso_metodo_view');


}

   public function guardar()   {
   //	echo "controlador";
     
           $this->metodo_model->registrar();
           $this->mostrar();

   	 	
   }
      public function mostrar()
{
  
            $datos=$this->metodo_model->getmetodo();
      
        $this->load->view('mostrar_metodo_view',  compact("datos"));


}
}
?>