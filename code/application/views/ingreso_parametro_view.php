<html>
<head>
	 <title>equipo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
        <script type="text/javascript">
          $(document).ready(function(){
             $("#guardarparametro").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/parametro/guardar',
                  type: 'POST',
                  data: $('#formparametro').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#validacionparametro").html(msj);
                  }
               });  
              
        return false;
             })  
          });
                    
                
               
        </script>   
         
</head>
	<body>
		<form id="formparametro">
		<table>
			<tr>
				<td>Crear Parámetro</td>
			</tr>
			<tr>
				<td>Nombre Parametro</td>
				<td><input type="text" name="nombre_parametro" id="nombre_parametro" /> </td>
			</tr>
		<!-- 	<tr>
				<td>Unidad</td>
				<td><input type="text" name="unidad" id="unidad" /> </td>
			</tr>     -->
			<tr>
				<td>Parámetro máximo</td>
				<td><input type="text" name="max_parametro" id="max_parametro" /> </td>
			</tr>
			<tr>
				<td>Parámetro mínimo</td>
				<td><input type="text" name="min_parametro" id="min_parametro" /> </td>
			</tr>
			<tr>
				<td>Precio</td>
				<td><input type="text" name="precio_parametro" id="precio_parametro" /> </td>
			</tr>
		<!-- 	<tr>
				<td>IVA</td>
				<td><input type="label" name="iva_parametro" id="iva_parametro" /> </td>
			</tr>     -->
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
				<td><input type="button" value="Guardar" id="guardarparametro" /> </td>
			</tr>
		</table>
		</form>
		<div id="validacionparametro"></div>
	</body>
</html>