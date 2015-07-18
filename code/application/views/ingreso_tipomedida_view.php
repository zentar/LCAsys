<html>
<head>
	<title>equipo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
        <script type="text/javascript">
          $(document).ready(function(){
             $("#registrartipomedida").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/tipomedida/guardar',
                  type: 'POST',
                  data: $('#formtipomedida').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#validaciontipmedida").html(msj);
                  }
               });
              
        return false;
             })  
          });
                    
                
               
        </script>    
    </head>
    
    <body>
       
        <a>TIPO DE MEDIDAS</a><br/><br/>
        <form id="formtipomedida">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name='nombretipo' />
                    
                </td>        
            <tr>
                <td><input type="button" value='guardar' id="registrartipomedida" /></td>
                    
            </tr>
            
        
            
            
        </table>
            </form>
       <div id="validaciontipmedida"></div>
    </body>
</html>