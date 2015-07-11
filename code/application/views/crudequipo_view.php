<html>
<head>
	<title>equipo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
        <script type="text/javascript">
          $(document).ready(function(){
             $("#cargando").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/inventario/cargar',
                  type: 'POST',
                  data: $('#tabla').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#equipo").html(msj);
                  }
               });
              
        return false;
             })  
          });
                    
                
               
        </script>  
</head>
<body>
    <hr/>
       <form id="tabla">
           <br/>
       
          
       <a href="javascript:void(0);" onclick="" id="cargando">nuevo articulo</a><hr/>
 
       
       <div id="equipo"></div>
       
       <div id="validacion"></div>
       
       
      <table>
       
       
        
        <tr style="background: #e98b39">
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Accion</td>
            
        </tr>
        <?php
            foreach ($datos as $dato)
            {
            ?>
        <tr style="background: #afa">    
                <td><?php echo $dato->codigo_articulo ?></td>
                <td><?php echo $dato->nombre ?></td>
                <td><?php echo $dato->marca ?></td>
                <td><?php echo $dato->modelo ?></td>
      <!--          <td><a href="http://localhost:81/LCAsys/code/index.php/inventario/equipo">editar</a></td>  -->
           </tr> 
            <?php
            }

            ?>    
    </table>
             </form>
     
    
</body>

</html>

