<html>
<head>
     <title>Activo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
         /* $(document).ready(function(){
             $("#registrartecnica").click(function(){
               //alert ('hola');
               $.ajax({
                //  url:'http://localhost:81/LCAsys/code/index.php/tecnica/guardar',
                     url: '<?= base_url(); ?>' + 'tecnica/guardar', 
                  type: 'POST',
                  data: $('#formtecnica').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#validaciontecnica").html(msj);
                  }
               });  
              
        return false;
             })  
          });*/
                    
                
               
        </script>   
</head>
    <body>
        <form id="formtecnica">
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
            <td><input type="text" name="tiempo_tecnica"  size="1"/> </td>
        </tr> 
        <tr>
          <td>
           <tr style="background: #e98b39">
            <td>Articulo</td>
            <td>Tipo de medida</td>
            <td>Cantidad</td>
            </tr> 
          </td>
		  
        <tr>
          <td>
            <a href="#" class="btn btn-primary" id="agregar_articulos">Agregar</a>
           <div id="articulos"></div>
           </td>
         </tr>
           </tr>
        
           <td><input type="button" value="Guardar" id="registrartecnica" /> </td>         
        </table>
        </form>
        <tr>
         <td>
          <div id="validaciontecnica"></div>
          <script>
           $(document).ready(function(){
          //CARGAR ARTICULOS EN EL SELECT
           $('#agregar_articulos').click(function(){
            var articulos = $.parseJSON('<?php echo json_encode($datos2); ?>'); 
            var options = '';
            for (var i=0; i<articulos.length; i++) {
              options = options + '<option value="'+articulos[i]['codigo_articulo']+'">'+articulos[i]['nombre_articulo']+'</option>';
            }
            var medidas = $.parseJSON('<?php echo json_encode($datos3); ?>');
            var options_medidas = '';
            for (var i=0; i<medidas.length; i++) {
              options_medidas = options_medidas + '<option value="'+medidas[i]['codigo_tipomedida']+'">'+medidas[i]['nombre']+'</option>';
            }
          
            

            $('#articulos').append('<div><select name="articulo">'+options+'</select><select name="medida">'+options_medidas+'</select><input type="text" name="cantidad"></div>');
            });

          //GUARDAR DATOS
            $('#registrartecnica').click(function(e){
              e.preventDefault();

             var datos = {
                'tb_metodo_codigo_metodo' : $('select[name="metodo"] option:selected').val(),
                'tb_parametro_codigo_parametro' : $('select[name="parametro"] option:selected').val(),
                'tiempo_tecnica' : $('input[name="tiempo_tecnica"]').val()
            };

            //RECORREMOS LOS ARTICULOS
            var articulos_aux = [];
            $('#articulos div').each(function(){
              var aux = {
                'tb_articulo_codigo_articulo' : $(this).find('select[name="articulo"] option:selected').val(),
                'cantidad' : $(this).find('input[name="cantidad"]').val(),

                'tb_tipomedida_codigo_tipomedida' : $('select[name="medida"] option:selected').val(),
                'tb_articulo_tb_categoria_cod_categoria': $('select[name="categoria"] option:selected').val(),
              };

              articulos_aux.push(aux);
            });

            datos['articulos'] = articulos_aux;

            $.ajax({
               type: "POST",
               dataType: "json",
               url: "<?php echo base_url() ?>tecnica/guardar",
               data:datos,
               success: function(data) {
                  $("#validaciontecnica").html(msj);
               }
             });
          });
        });
        </script>
        </td>
        </tr>
    </body>
</html>