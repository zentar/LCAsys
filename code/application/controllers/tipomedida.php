<?php

class Tipomedida extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function ingreso() {
        $this->load->view('ingreso_tipomedida_view');
    }

    public function mostrar() {

        $datos = $this->tipomedida_model->gettipomedida();

        $this->load->view('mostrar_tipomedida_view', compact("datos"));
    }

    public function cargar() {
        
    }

    public function guardar() {
       
                $data = array
                    (
                    'nombre' => $this->input->post("nombretipo", true)
                );
                $this->tipomedida_model->registrar($data);
                $this->mostrar();
            
       
    }

}
