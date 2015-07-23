<html>
<head>
	<title>equipo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
        <script type="text/javascript">
          $(document).ready(function(){
             $("#registrarempresa").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/empresa/guardar',
                  type: 'POST',
                  data: $('#formempresa').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#validacionempresa").html(msj);
                  }
               });  
              
        return false;
             })  
          });
                    
                
               
        </script>   
         
    </head>
    
    <body>
       
        <a>TIPO DE EMBALAJE</a><br/><br/>
        <form id="formempresa">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name='nombre'/>
                    
                </td>        
            </tr>
            <tr>
                <td>ruc</td>
                <td><input type="text" name='ruc' />
                    
                </td>        
            </tr> 
            <tr>
                <td>Direccion</td>
                <td><input type="text" name='direccion' />
                    
                </td>        
            </tr>
             <tr>
                <td>telefono</td>
                <td><input type="text" name='telefono' />
                    
                </td>        
            </tr>
             <tr>
                <td>correo</td>
                <td><input type="text" name='correo' />
                    
                </td>        
            </tr>
             <tr>
                <td>solicitante</td>
                <td><input type="text" name='nombre_solicitante' />
                    
                </td>        
            </tr>
                <td><input type="button" value='guardar' id="registrarempresa" /></td>
                    
            </tr>
            
        
            
            
        </table>
            
            
           
            </form>
       <div id="validacionempresa"></div>
       
    </body>
</html>