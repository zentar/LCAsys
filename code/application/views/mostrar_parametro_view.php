<html>
<head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
    
          $(document).ready(function (){
           /*$("#nombre_parametro").blur();
           $("#max_parametro").blur();
           $("#min_parametro").blur();*/
            $("#precio_parametro").blur();
          });   
                
   
           function validar(){
               var nombre=$("#nombre_parametro").val();               
               var max=$("#max_parametro").val();               
               var min=$("#min_parametro").val();               
               var precio=$("#precio_parametro").val();
           
        if(nombre=="" && max==""&& min=="" && precio=="")
        //
        $("#validacionparametro").html("campos vacios");
    else
        
        {
            $("#validacionparametro").html("perfecto");
            document.getElementById("guardarparametro").disabled=false;
        }  
    
        }
           
 </script>  
       
</head>
<body>
    <hr/>
       <form id="tabla">
           <br/>
       
          
       
           <table class="modal-content">
             <tr style="background: #e98b39">
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Rango Min</td>           
            <td>Rango Max</td>
            <td>Precio</td>
            <td>IVA</td>  
            
        </tr>
        <?php
            foreach ($datos as $dato)
            {
            ?>
        <tr style="background: #afa">    
                <td><?php echo $dato->codigo_parametro ?></td>
                <td><?php echo $dato->nombre_parametro ?></td>
                <td><?php echo $dato->max_parametro ?></td>
                <td><?php echo $dato->min_parametro ?></td>
                <td><?php echo $dato->precio_parametro ?></td>
                <td><?php echo $dato->iva_parametro ?></td> 
                <td><button type="button" class="btn-default" data-toggle="modal" data-target="#myModal" >editar</button>   
 </td> 
                
           </tr> 
            <?php
            }

            ?>    
    </table>
 </form>
 <button type="button" class="btn-default" data-toggle="modal" data-target="#myModal">NUEVO </button>   
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="formparametro" action="http://localhost:81/LCAsys/code/index.php/parametro/mostrar" method="post">

      <div class="modal-content">
      <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INGRESO DE PARAMETRO</h4>
        
      </div>
      <div class="modal-body">
		<table>
			
			<tr>
				<td>Nombre Parametro</td>
                                <td><input type="text" name="nombre_parametro" id="nombre_parametro" /> </td>
			</tr>
			<tr>
				<td>Rango Maximo</td>
				<td><input type="text" name="max_parametro" id="max_parametro" /> </td>
			</tr>
			<tr>
				<td>Rango mínimo</td>
				<td><input type="text" name="min_parametro" id="min_parametro" /> </td>
			</tr>
			<tr>
				<td>Precio</td>
				<td><input type="text" name="precio_parametro" id="precio_parametro" onblur="validar()"/> </td>
			</tr>
			<tr>
				<td>Estado</td>
				<td>
                                    <select name="estado" id="estado">
                                    <option value="A">Activo </option>
                                    <option value="I">Inactivo </option>
                                    </select>
				</td>
			</tr>
			
		</table>
      <div id="validacionparametro"></div>
      </div>
      <div class="modal-footer">
       
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" id="guardarparametro" disabled>Guardar</button>
      </div>
    </div>
       </form>

  </div>
</div>
 
</body>

</html>

