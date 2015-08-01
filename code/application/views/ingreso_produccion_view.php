<html>
<head>
     <title>Activo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
             $("#registrartecnica").click(function(){
               //alert ('hola');
               $.ajax({
                //  url:'http://localhost:81/LCAsys/code/index.php/tecnica/guardar',
                     url: '<?= base_url(); ?>' + 'produccion/guardar', 
                  type: 'POST',
                  data: $('#formtecnica').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#validaciontecnica").html(msj);
                  }
               });  
              
        return false;
             })  
          });
                    
                
               
        </script>   
</head>
    <body>
        <form id="formproduccion">
          <tr>
            <td>Crear Produccion</td>
          </tr>
            <br/> 
          <table>
		   <tr>
             <td>Fecha produccion</td>
				<td><input type="text" name="fecha" id="fecha" /> </td>
           </tr> 
		   <tr>
             <td>Zona</td>
             <td><input type="text" name="zona"  id="zona"/> </td>
           </tr> 
		     <tr>
             <td>Ubicacion</td>
             <td><input type="text" name="ubicacion"  id="ubicacion"/> </td>
           </tr> 
		     <tr>
             <td>Sector</td>
             <td><input type="text" name="sector"  id="sector"/> </td>
           </tr>	
		   <tr>
             <td>Tipo de muestra</td>
             <td><input type="text" name="tipo_muestra"  id="tipo_muestra"/> </td>
           </tr>
		     <tr>
             <td>Responsable</td>
             <td><input type="text" name="responsable_muestra"  id="responsable_muestra"/> </td>
           </tr>
           <tr> <!--  Muestra la lista de empresa -->
             <td>Empresa</td>
             <td> <select name="empresa"> 
             <?php foreach ($datos as $dato) { ?>  
             <option value=<?php echo $dato->codigo_empresa ?> >
                    <?php echo $dato->nombre_empresa ?>
             </option> <?php } ?>  
            </select>  
            </td>   
           </tr>
          <tr>
          <td>
            <a href="#" class="btn btn-secondary" id="agregar_tecnica">Agregar</a>
           <div id="tecnia"></div>
           </td>
         </tr>
          
         </tr>
           <td><input type="button" value="Guardar" id="registrarproduccion" /> </td>         
        </table>
        </form>
    </body>
</html>