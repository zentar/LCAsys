<html>
<head>
     <title>Inventario</title>
     <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script type="text/javascript">    
             $(document).ready(function(){
             $("#guardar").click(function(){
                 //alert("hola");
                 $.ajax({
                   url: 'http://localhost/lcasys/code/index.php/tecnica/guardar', 
                  type: 'POST',
                  data: $('#form').serialize(),
                  success: function(msj){
                    //   alert(msj);
                    $("#mensaje").html(msj);
                    }
                 });
                 return false;
                })
            });
     </script>
</head>
    <body>
        <form id="form">
         <tr>
            <td>Crear Técnica</td>
            </tr>
            <br/> 
        <table>
        <tr> <!--  Muestra la lista del método -->
            <td>Metodo</td>
            <td> <select name="metodo"> 
            <?php foreach ($datos as $dato) { ?>  
            <option value=<?php echo $dato->codigo_metodo ?> >
                    <?php echo $dato->nombre_metodo ?>
            </option>  
            <?php } ?>  

            </select>  
            </td>   
        </tr>
        <tr> <!--  Muestra la lista del parametro -->
            <td>parametro</td>
            <td> <select name="parametro"> 
            <?php foreach ($datos1 as $dato1) { ?>              
            <option value=<?php echo $dato1->codigo_parametro?>>
                   <?php echo $dato1->nombre_parametro ?></option>  <?php } ?>  
            </select>
            </td>   
        </tr>
             <tr>
                <td>Tiempo</td>
                <td><input type="text" name="tiempo_tecnica"  /> </td>
            </tr>     
                <td><input type="button" value="Guardar" id="guardar" /> </td>
            </tr>
        </table>
        </form>
        <div id="mensaje"></div>
    </body>
</html>