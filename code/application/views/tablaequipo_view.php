 <table>
       
       
        
        <tr style="background: #e98b39">
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Accion</td>
            
        </tr>
        <?php
            foreach ($datos as $dato)
            {
            ?>
        <tr style="background: #afa">    
                <td><?php echo $dato->codigo_articulo ?></td>
                <td><?php echo $dato->nombre_articulo ?></td>
                <td><?php echo $dato->marca_articulo ?></td>
                <td><?php echo $dato->marca_articulo ?></td>
                <td><button type="button" class="btn-default" data-toggle="modal" data-target="#myModal">editar </button></td> 
           </tr> 
            <?php
            }

            ?>    
    </table>