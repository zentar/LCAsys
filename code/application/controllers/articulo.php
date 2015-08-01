<?php
//hola veronica sancan
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipo
 *
 * @author sandro
 */
class Articulo extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
public function index()
{
    $this->load->view('articulo_view');     
      
}

public function mensaje()
{
    echo 'equipo';
}
public function mensaje1()
{
    echo 'vidrieria';
}
public function ingresoequipo()
{
    
       $this->load->view('ingreso_equipo_view');     
      
}
public function tablaequipo()
{
    $datos=$this->articulo_model->getEquipo();
    $this->load->view('tablaequipo_view',compact("datos"));
}

public function mostrarequipo()
{
     
   $datos=$this->articulo_model->getEquipo();
   
$this->load->view('mostrar_equipo_view',compact("datos"));       
      
}

public function mostrarvidrieria()
{
     
   $datos=$this->articulo_model->getVidrieria();
   
$this->load->view('mostrar_equipo_view',compact("datos"));       
      
}

public function mostrarreactivo()
{
     
   $datos=$this->articulo_model->getReactivo();
   
$this->load->view('mostrar_equipo_view',compact("datos"));       
      
}
public function ingresovidrieria()
{
    
       
       $datostipomedida=$this->tipomedida_model->nombremedida();
    $this->load->view('ingreso_vidrieria_view',compact("datostipomedida"));     
      
}

public function ingresoreactivo()
{
    
    $datostipomedida=$this->tipomedida_model->nombremedida();
    $datosembalaje=$this->embalaje_model->nombreembalaje();
    $this->load->view('ingreso_reactivo_view',compact("datostipomedida","datosembalaje")); 
}
        


public function guardar_equipo()
{
   
    
  
   		$data=array
                   (
                        'codigo_articulo'=>$this->input->post("codigo",true),
                        'nombre_articulo'=>$this->input->post("nombre",true),
                        'marca_articulo'=>$this->input->post("marca",true),
                        'modelo_articulo'=>$this->input->post("modelo",true),
                        'cantidad_articulo'=>$this->input->post("cantidad",true),
                        'precio_articulo'=>$this->input->post("costo",true),
                        'vida_articulo'=>$this->input->post("tiempo",true),
                        'can_emba_articulo'=>'',
                        'tiem_uso_articulo'=>'0',
                        'tb_categoria_cod_categoria'=>'1',
                        'tb_embalaje_codigo_embalaje'=>'1',
                        'stock_articulo'=>$this->input->post("cantidad",true),
                        'cant_ingreso'=>$this->input->post("cantidad",true),
                        'estado_articulo'=>'a',
                        'tb_tipomedida_codigo_tipomedida'=>'1'
                        
                        
                   );
           
            $this->articulo_model->insertar_equipo($data);
            $this->tablaequipo();

   	
}
public function guardar_vidrieria()
{
   
  {
   		$data=array
                   (
                        'codigo_articulo'=>$this->input->post("codigo",true),
                        'nombre_articulo'=>$this->input->post("nombre",true),
                        'marca_articulo'=>$this->input->post("marca",true),
                        //'modelo_articulo'=>'',
                        'modelo_articulo'=>$this->input->post("modelo",true),
                        'cantidad_articulo'=>$this->input->post("cantidad",true),
                        'precio_articulo'=>$this->input->post("costo",true),
                        'vida_articulo'=>$this->input->post("tiempo",true),
                        'can_emba_articulo'=>$this->input->post("cantidadembalaje",true),
                        'tiem_uso_articulo'=>'0',
                        'tb_categoria_cod_categoria'=>'3',
                        //'tb_embalaje_codigo_embalaje'=>$this->input->post("tipo_embalaje",true),
                        'tb_embalaje_codigo_embalaje'=>'1',
                        'stock_articulo'=>$this->input->post("cantidad",true),
                        'cant_ingreso'=>$this->input->post("cantidad",true),
                        'estado_articulo'=>'a',
                        'tb_tipomedida_codigo_tipomedida'=>$this->input->post("tipo_medida",true)
                        
                        
                   );
           
            $this->articulo_model->insertar_equipo($data);
            echo("Registro Guardado");
   		}

   	}
  
public function guardar_reactivo()
{
   
  {
   		$data=array
                   (
                        'codigo_articulo'=>$this->input->post("codigo",true),
                        'nombre_articulo'=>$this->input->post("nombre",true),
                        'marca_articulo'=>$this->input->post("marca",true),
                        'modelo_articulo'=>$this->input->post("modelo",true),
                        'cantidad_articulo'=>$this->input->post("cantidad",true),
                        'precio_articulo'=>$this->input->post("costo",true),
                        'vida_articulo'=>'',
                        'can_emba_articulo'=>$this->input->post("cantidadembalaje",true),
                        'tiem_uso_articulo'=>'0',
                        'tb_categoria_cod_categoria'=>'2',
                        'tb_embalaje_codigo_embalaje'=>'1',
                        'stock_articulo'=>$this->input->post("cantidad",true),
                        'cant_ingreso'=>$this->input->post("cantidad",true),
                        'estado_articulo'=>'a',
                        'tb_tipomedida_codigo_tipomedida'=>$this->input->post("tipo_medida",true)
                        
                        
                   );
           
            $this->articulo_model->insertar_equipo($data);
            echo("Registro Guardado");
   		}

   	}



      
    
    


    
}
