<html>
<head>
     <title>equipo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
        <script type="text/javascript">
          $(document).ready(function(){
             $("#categoria").blur(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/tecnica/cargar_articulo',
                  type: 'POST',
                  data: $('#formcategoria').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#tipoarticulo").html(msj);
                  }
               });  
              
        return false;
             })  
          });
                    
                
               
        </script>   
</head>
    <body>
        <form id="formcategoria">
         <table>
        <tr> 
            <td>Articulo</td>
            <td> <select name="categoria" id="categoria"> 
            <?php foreach ($datos as $dato) { ?>  
            <option value=<?php echo $dato->cod_categoria ?> >
                    <?php echo $dato->nombre_categoria ?>
            </option>  
            <?php } ?>  

            </select>  
            </td>   
        </tr>
        
        
                
        </table>
           
        
        
        </form>
        
        
        
        </body>
</html>