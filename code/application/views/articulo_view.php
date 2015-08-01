<html>

<head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
          $(document).ready(function(){
             $("#equipo").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/articulo/mostrarequipo',
                 // url: '<?= base_url(); ?>' + 'articulo/guardar_equipo',
                  type: 'POST',
                  data: $('#formarticulo').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#articulo").html(msj);
                  }
               });  
              
        return false;
             })  
          });
        </script> 
        <script type="text/javascript">
          $(document).ready(function(){
             $("#vidrieria").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/articulo/mostrarvidrieria',
                 // url: '<?= base_url(); ?>' + 'articulo/guardar_equipo',
                  type: 'POST',
                  data: $('#formarticulo').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#articulo").html(msj);
                  }
               });  
              
        return false;
             })  
          });
        </script> 
         <script type="text/javascript">
          $(document).ready(function(){
             $("#reactivo").click(function(){
               //alert ('hola');
               $.ajax({
                  url:'http://localhost:81/LCAsys/code/index.php/articulo/mostrarreactivo',
                 // url: '<?= base_url(); ?>' + 'articulo/guardar_equipo',
                  type: 'POST',
                  data: $('#formarticulo').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#articulo").html(msj);
                  }
               });  
              
        return false;
             })  
          });
        </script> 


       
</head>

<body>
    <form id="formarticulo">
    <table>
        <tr> <td><input type="button" value='EQUIPO' id="equipo" class="btn-info"/></td>
            <td><input type="button" value='VIDRIERIA' id="vidrieria" class="btn-primary" /></td>
            <td><input type="button" value='REACTIVO' id="reactivo" class="btn-secondary"/></td>
        </tr>
    </table>
    
      <div id="articulo">
        
    </div>  
    </form>
    
    
</body>

</html>