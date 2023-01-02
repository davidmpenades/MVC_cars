<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE COCHES</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_cars&op=create"><img src="view/img/anadir.png"></a></p>
    		
    		<table>
                <tr>
                    <td width=50><b>id_car</b></th>
                    <td width=100><b>Marca</b></th>
                    <td width=100><b>Modelo</b></th>
                    <td width=100><b>Matricula</b></th>
                    <th width=350><b>Accion</b></th>

                </tr>
                 <?php

                //    die('<script>console.log('.json_encode( $rdo->num_rows ) .');</script>');
                    
                   if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN COCHE</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                            echo '<td width=50>'. $row['id_car'] . '</td>';                    
                    	   	echo '<td width=100>'. $row['Marca'] . '</td>';
                    	   	echo '<td width=100>'. $row['Modelo'] . '</td>';
                    	   	echo '<td width=100>'. $row['Matricula'] . '</td>';
                            echo '<td width=350>';
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_cars&op=read&id_car='.$row['id_car'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_cars&op=update&id_car='.$row['id_car'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_cars&op=delete&id_car='.$row['id_car'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }

                ?>
            </table>
    	</div>
    </div>
</div>