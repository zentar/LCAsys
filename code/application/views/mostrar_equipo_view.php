<html>
<head>
	 </script> 
         <script type="text/javascript">
          $(document).ready(function(){
             $("#guardarequipo").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/articulo/guardar_equipo',
                 // url: '<?= base_url(); ?>' + 'articulo/guardar_equipo',
                  type: 'POST',
                  data: $('#formequipo').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#articulo").html(msj);
                     //$("#myModal").display=none;
                      $('#myModal').modal('hide');
                  }
               });  
              
        return false;
             })  
          });
        </script> 
        
        <script language="javascript">

</script>
</head>
<body>
    <hr/>
       <form id="tabla">
       
       
          
       
   
       
      <table>
       
       
        
        <tr style="background: #e98b39">
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Accion</td>
            
        </tr>
        <?php
            foreach ($datos as $dato)
            {
            ?>
        <tr style="background: #afa">    
                <td><?php echo $dato->codigo_articulo ?></td>
                <td><?php echo $dato->nombre_articulo ?></td>
                <td><?php echo $dato->marca_articulo ?></td>
                <td><?php echo $dato->marca_articulo ?></td>
                <td><button type="button" class="btn-default" data-toggle="modal" data-target="#myModal">editar </button></td> 
           </tr> 
            <?php
            }

            ?>    
    </table>
      
       </form>
    <button type="button" class="btn-default" data-toggle="modal" data-target="#myModal">NUEVO </button>   
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="formequipo" action="http://localhost:81/LCAsys/code/index.php/articulo/guardar_equipo" method="post">

      <div class="modal-content">
      <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INGRESO DE EQUIPO</h4>
        
      </div>
      <div class="modal-body">
		<table>
            <tr>
                <td>Codigo</td>
                <td><input type="text" name='codigo'/>
                </td>
                
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type=text  name='nombre'/>
                </td>
                
            </tr>
            <tr>
                <td>Marca</td>
                <td><input type="text" name='marca'/>
                </td>
                
            </tr>
            <tr>
                <td>Modelo</td>
                <td><input type="text" name='modelo' />
                </td>
                
            </tr>
            <tr>
                <td>Cantidad</td>
                <td><input type="text" name='cantidad'/>
                </td>
                
            </tr>
            <tr>
                <td>Costo</td>
                <td><input type="text" name='costo'/>
                </td>                
            </tr>
            <tr>
                <td>Tiempo de Vida</td>
                <td><input type="text" name='tiempo'/> años
                </td>                
            </tr>
           
            
            
            
        </table>
      <div id="validacionequipo"></div>
      </div>
      <div class="modal-footer">
       
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="guardarequipo" >Guardar</button>
      </div>
    </div>
       </form>

  </div>
</div>
    
    
        
     
    
</body>

</html>

