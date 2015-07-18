<html>
<head>
	<title>equipo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
        <script type="text/javascript">
          $(document).ready(function(){
             $("#registrarequipo").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/inventario/guardar_equipo',
                  type: 'POST',
                  data: $('#form').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#validacion").html(msj);
                  }
               });
              
        return false;
             })  
          });
                    
                
               
        </script>    
    </head>
    
    <body>
        <form id="form">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name='nombre'/>
                </td>
                
            </tr>
            <tr>
                <td>Marca</td>
                <td><input type="text" name='marca'/>
                </td>
                
            </tr>
            <tr>
                <td>Modelo</td>
                <td><input type="number" name='modelo' />
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
                <td><input type="text" name='tiempo'/>
                </td>                
            </tr>
            <tr>
                <td><input type="button" value='guardar' id="registrarequipo" /></td>
                    
            </tr>
            
        
            
            
        </table>
            </form>
       
    </body>
</html>