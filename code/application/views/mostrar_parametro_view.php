<html>
<head>
	<title>equipo</title>
         
       
</head>
<body>
    <hr/>
       <form id="tabla">
           <br/>
       
          
       
      <table>
       
       
        
        <tr style="background: #e98b39">
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Maximo Parametro</td>           
            <td>Minimo Parametro</td>
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

                
           </tr> 
            <?php
            }

            ?>    
    </table>
             </form>
     
    
</body>

</html>

