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
    
       <form id="tabla">
        <table>
       
       
        
        <tr style="background: #e98b39">
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            
        </tr>
        
            <?php
            foreach ($datos as $dato)
            {
            ?>
        <tr style="background: #afa">    
                <td><?php echo $dato->codigo_embalaje ?></td>
                <td><?php echo $dato->nombre_embalaje ?></td>
                 <td><?php echo $dato->descrp_embalaje ?></td>
               
                
                
           </tr> 
            
             <?php
             
            } ?> 
        </table>       
  </form>
     <button type="button" class="btn-default" data-toggle="modal" data-target="#myModal">NUEVO </button>   
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
   <form id="formparametro" action="http://localhost:81/LCAsys/code/index.php/embalaje/guardar" method="post">

      <div class="modal-content">
      <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INGRESO DE TIPOS DE EMBALAJE</h4>
        
      </div>
      <div class="modal-body">
		<table>
			
                       <tr>
                <td>Nombre</td>
                <td><input type="text" name='nombre' id="sandro" />
                    
                </td>        
            </tr>
                 <tr>
                <td>Descripcion</td>
                <td> 
                   
                   <textarea name="descripcion" rows="10" cols="40"></textarea>
                </td>        
            </tr>
			
		</table>
      <div id="validacionembalaje"></div>
      </div>
      <div class="modal-footer">
       
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" id="guardarparametro" >Guardar</button>
      </div>
    </div>
       </form>

  </div>
</div>
    
</body>

</html>
