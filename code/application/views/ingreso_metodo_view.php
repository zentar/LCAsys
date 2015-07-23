<html>
<head>
	<title>equipo</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
        <script type="text/javascript">
          $(document).ready(function(){
             $("#registrarmetodo").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/metodo/guardar',
                  type: 'POST',
                  data: $('#formmetodo').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#validacionmetodo").html(msj);
                  }
               });  
              
        return false;
             })  
          });
                    
                
               
        </script>   
</head>
	<body>
		<form id="formmetodo">
		<table>
			<tr>
				<td>Método</td>
			</tr>
			<tr>
				<td>Nombre Método</td>
				<td><input type="text" name="nombre_metodo" id="nombre_metodo" /> </td>
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
				<td><input type="button" value="Guardar" id="registrarmetodo" /> </td>
			</tr>
		</table>
		</form>
		<div id="validacionmetodo"></div>
	</body>
</html>