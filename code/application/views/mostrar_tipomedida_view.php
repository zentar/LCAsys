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
     
    
</body>

</html>

