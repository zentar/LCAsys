<html>
<head>
	<title>equipo</title>
         
       
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
            <select name="datos">
              <?php
            foreach ($datos as $dato)
            {
            ?>
                <option ><?php echo $dato->nombre_embalaje ?></option>   
                
            <?php
            }

            ?> 
           </select>
             </form>
     
    
</body>

</html>
