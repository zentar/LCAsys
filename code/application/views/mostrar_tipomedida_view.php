<html>
<head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       
</head>
<body>
    <hr/>
       <form id="tabla">
           <br/>
       
          
       
      <table>
      
        
        <tr style="background: #e98b39">
            <td>Codigo</td>
            <td>Nombre</td>
           
            
        </tr>
        <?php
            foreach ($datos as $dato)
            {
            ?>
        <tr style="background: #afa">    
                <td><?php echo $dato->codigo_tipomedida ?></td>
                <td><?php echo $dato->nombre ?></td>
                
           </tr> 
            <?php
            }

            ?>    
    </table>
             </form>
     <button type="button" class="btn-default" data-toggle="modal" data-target="#myModal">NUEVO </button>   
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="formmdida" action="http://localhost:81/LCAsys/code/index.php/tipomedida/guardar" method="post">

      <div class="modal-content">
      <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INGRESO TIPO DE MEDIDA</h4>
        
      </div>
      <div class="modal-body">
		<table>
	
		 <tr>
                <td>Nombre</td>
                <td><input type="text" name='nombretipo' />
                    
                </td>        
            </tr>
			
		</table>
      <div id="validacionmedida"></div>
      </div>
      <div class="modal-footer">
       
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" id="guardarmedida">Guardar</button>
      </div>
    </div>
       </form>

  </div>
</div>
 
    
</body>

</html>

