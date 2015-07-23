<html>
<head>
	<title>equipo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
        <script type="text/javascript">
          $(document).ready(function(){
             $("#registrarembalaje").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/embalaje/guardar',
                  type: 'POST',
                  data: $('#formembalaje').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#validacionembalaje").html(msj);
                  }
               });  
              
        return false;
             })  
          });
                    
                
               
        </script>   
         
    </head>
    
    <body>
       
        <a>TIPO DE EMBALAJE</a><br/><br/>
        <form id="formembalaje">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name='nombre' id="sandro" />
                    
                </td>        
            </tr>
                 <tr>
                <td>Descripcion</td>
                <td> 
                   
                   <textarea name="descripcion" rows="10" cols="40"></textarea>
                </td>        
            </tr>
                <td><input type="button" value='guardar' id="registrarembalaje" /></td>
               
        
            
            
        </table>
            
            
           
            </form>
       <div id="validacionembalaje"></div>
       
    </body>
</html>