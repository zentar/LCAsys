<html>
<head>
	 <title>Inventario</title>
	 <!--link_tag("css/estilos/metodo.css")  -->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	 <script type="text/javascript">	
	 		 $(document).ready(function(){
	 		 $("#guardardettec").click(function(){
	 		 	 //alert("hola");
	 		 	 $.ajax({
	 		 	   url: '<?= base_url(); ?>' + 'tecnica/guardar', 
				  type: 'POST',
                  data: $('#formdettec').serialize(),
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
		<form id="formdetted">
		<table>
			<tr>
				<td>Detalle Tecnica</td>
			</tr>
			<tr> <!--  Muestra la lista de articulos -->
            	<td>Articulos</td>
           		<td> <select name="listart"> 
           		<?php foreach ($datos2 as $dato2) { ?>              
           		<option value=<?php echo $dato2->codigo_articulo?>>
                <?php echo $dato2->nombre_articulo ?></option>  <?php } ?>  
                </select>
                </td>   
            </tr>
   			<tr>
				<td>Cantidad</td>
				<td><input type="text" name="cantidad" id="cantidad" /> </td>
			</tr>
			 <tr>
         </tr>
			<tr>

			<!--<td><input type="submit" value="agregar" title="Agregar" /></td>-->
			 <!--	<td><input type="button" value="Agregar" id="guardardettec" /> </td>  -->
			<td>
            <div class="form-actions">
        	<button name="" type="submit" class="btn btn-primary" >Aceptar</button><a href="<?php echo base_url()?>tecnica/ingresar" class="btn">Cancelar</a></div>
			</td>
			</tr>
		</table>
		</form>
		<div id="mensaje"></div>
	</body>
</html>