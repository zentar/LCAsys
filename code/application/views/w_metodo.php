<html>
<head>
	 <title>Inventario</title>
	 <!--link_tag("css/estilos/metodo.css")  -->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	 <script type="text/javascript">	
	 		 $(document).ready(function(){
	 		 $("#guardar").click(function(){
	 		 	 //alert("hola");
	 		 	 $.ajax({
	 		 	   url: '<?= base_url(); ?>' + 'c_metodo/guardar',	
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
				<td>Método</td>
			</tr>
			<tr>
				<td>Nombre Método</td>
				<td><input type="text" name="nom_metodo" id="nom_metodo" /> </td>
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
			<tr>
				<td><input type="button" value="Guardar" id="guardar" /> </td>
			</tr>
		</table>
		</form>
		<div id="mensaje"></div>
	</body>
</html>