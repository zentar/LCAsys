<html>
<head>
	 <title>Inventario</title>
	 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	 <script type="text/javascript">	
	 		 $(document).ready(function(){
	 		 $("#guardar").click(function(){
	 		 	 //alert("hola");
	 		 	 $.ajax({
	 		 	   url: '<?= base_url(); ?>' + 'c_proveedor/guardar',	
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
				<td>Crear Proveedor</td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nom_prov" id="nom_prov" /> </td>
			</tr>
			<tr>
				<td>Apellido</td>
				<td><input type="text" name="ape_prov" id="ape_prov" /> </td>
			</tr>
			<tr>
				<td>Tipo documento</td>
				<td>
					<select name="tipo_docum" id="estado">
					<option value="C">Cedula</option>
					<option value="R">RUC</option>
					<option value="P">Pasaporte</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Identificación</td>
				<td><input type="text" name="cod_ced" id="cod_ced" /> </td>
			</tr>
			<tr>
				<td>Numero telefono 1</td>
				<td><input type="text" name="num_telfprinc" id="num_telfprinc" /> </td>
			</tr>
			<tr>
				<td>Numero telefono 2</td>
				<td><input type="text" name="num_telfsec" id="num_telfsec" /> </td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email_prov" id="email_prov" /> </td>
			</tr>
			<tr>
				<td>Direccion</td>
				<td><input type="text" name="dir_prov" id="dir_prov" /> </td>
			</tr>
			<tr>
				<td>Razon social</td>
				<td><input type="text" name="ra_social_prov" id="ra_social_prov" /> </td>
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