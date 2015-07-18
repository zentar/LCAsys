<html>
<head>
	 <title>Inventario</title>
	 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	 <script type="text/javascript">	
	 		 $(document).ready(function(){
	 		 $("#guardar").click(function(){
	 		 	 //alert("hola");
	 		 	 $.ajax({
	 		 	   url: '<?= base_url(); ?>' + 'c_solicitante/guardar',	
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
		<table>
			<tr>
				<td>Crear Solicitante</td>
			</tr>
			<tr>
				<td>Nombre </td>
				<td><input type="text" name="nom_solicitante" id="nom_solicitante" /> </td>
			</tr>
			<tr>
				<td>Apellido</td>
				<td><input type="text" name="ape_solicitante" id="ape_solicitante" /> </td>
			</tr>
			<tr>
				<td>Cedula</td>
				<td><input type="text" name="ced_solicitante" id="ced_solicitante" /> </td>
			</tr>
			<td>Estado</td>
				<td>
					<select name="estado" id="estado">
					<option value="A">Activo </option>
					<option value="I">Inactivo </option>
				</select>
				</td>
			</tr>
			<tr>
				<td><input type="button" value="Guardar" id="guardar" /> </td>
			</tr>
		</table>
		</form>
		<div id="mensaje"></div>
	</body>
</html>