<html>
<head>
     <title>equipo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
             <script type="text/javascript">

        $(document).ready(function(){
             $("#agregarcrud").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/tecnica/cruddettecnica',
                  type: 'POST',
                  data: $('#formequipo').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#crudequipo").html(msj);
                  }
               });  
              
        return false;
             })  
          });
                    
                
               
        </script>    
        
</head>
    <body>
        <form id="nombrea">
         <table>
        <tr> 
            <td>Seleccionar</td>
            <td> <select name="articulo" id="articulo"> 
                    <option value="0"></option>
                <?php foreach ($datos as $dato) { ?>  
            <option value=<?php echo $dato->codigo_articulo ?> >
                    <?php echo $dato->nombre_articulo ?>
            </option>  
            <?php } ?>  

            </select>  
            </td>   
        </tr>
        
         <tr> 
            <td>
            <input type="button" value="agregar" id="agregarcrud" />
            </td>
            
            </td>   
        </tr>
                
        </table>
           
        
        
        </form>
        
        
        
        
    </body>
</html>