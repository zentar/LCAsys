<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba  extends CI_Controller {

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
  
   $this->load->view('prueba_view');


}

 
  
}
?>