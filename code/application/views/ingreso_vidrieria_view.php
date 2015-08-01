<html>
<head>
	<title>equipo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
        <script type="text/javascript">
          $(document).ready(function(){
             $("#guardarvidrieria").click(function(){
               //alert ('hola');
               $.ajax({
                 // url:'http://localhost:81/LCAsys/code/index.php/articulo/guardar_vidrieria',
                    url: '<?= base_url(); ?>' + 'articulo/guardar_vidrieria', 
                  type: 'POST',
                  data: $('#formvidrieria').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#validacionvidrieria").html(msj);
                  }
               });  
              
        return false;
             })  
          });
                    
                
               
        </script>    
    </head>
    
    <body>
        <form id="formvidrieria">
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
                <td><input type="text" name='tiempo'/> meses
                </td>                
            </tr>
            
            <tr>
                <td>capacidad</td>
                <td><input type="text" name='cantidadembalaje'/>
                </td>                
            </tr>
            <tr>
                <td>Tipo de Medida</td>
                <td>
                    <select name="tipo_medida">
                         <?php foreach ($datostipomedida as $dato) { ?>
                        <option value=<?php echo $dato->codigo_tipomedida ?>>
                            <?php echo $dato->nombre?>
                        </option>
                         <?php } ?> 
                    </select>
                </td>                
            </tr>
            <tr>
                <td><input type="button" value='guardar' id="guardarvidrieria" /></td>
                    
            </tr>
            
            
            
            
        </table>
            </form>
        <div id="validacionvidrieria"></div>
       
    </body>
</html>





