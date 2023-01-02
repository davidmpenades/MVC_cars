<div id="Informacion del coche">
    <h1>Informacion del coche</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Numero Bastidor: </td>
            <td>
                <?php
                    echo $id_car['Num_bastidor'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Marca: </td>
            <td>
                <?php
                    echo $id_car['Marca'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Modelo: </td>
            <td>
                <?php
                    echo $id_car['Modelo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Matricula: </td>
            <td>
                <?php
                    echo $id_car['Matricula'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>kms: </td>
            <td>
                <?php
                    echo $id_car['kms'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Categoria: </td>
            <td>
                <?php
                    echo $id_car['Categoria'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Tipo: </td>
            <td>
                <?php
                    echo $id_car['Tipo'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Comentarios: </td>
            <td>
                <?php
                    echo $id_car['Comentarios'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de matriculacion: </td>
            <td>
                <?php
                    echo $id_car['Fecha_alta'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Color: </td>
            <td>
                <?php
                    echo $id_car['Color'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Extras: </td>
            <td>
                <?php
                    echo $id_car['Extras'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Imagenes: </td>
            <td>
                <?php
                    echo $id_car['Imagenes'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Precio: </td>
            <td>
                <?php
                    echo $id_car['Precio'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Numero de puertas: </td>
            <td>
                <?php
                    echo $id_car['Num_puertas'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Ciudad: </td>
            <td>
                <?php
                    echo $id_car['Ciudad'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Latitud: </td>
            <td>
                <?php
                    echo $id_car['Latitud'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Longitud: </td>
            <td>
                <?php
                    echo $id_car['Longitud'];
                ?>
            </td>
        </tr>
        
    </table>
    </p>
    <p><a href="index.php?page=controller_cars&op=list">Volver</a></p>
</div>