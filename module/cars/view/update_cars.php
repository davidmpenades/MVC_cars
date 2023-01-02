<div id="Contenido">
    <form autocomplete="on" method="post" name="update_car" id="update_car" onsubmit="return validate();" action="index.php?page=controller_user&op=update">
        <h1>Modificar coche</h1>
        <table border='0'>        
            <!-- <tr>
                <td>Numero de bastidor: </td>
                <td><input type="text" id="Num_bastidor" name="Num_bastidor" placeholder="0000A000A00A000A0" value="<?php echo $id_car['Num_bastidor'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_Num_bastidor" class="error">
                        <?php
                            echo"error_Num_bastidor";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Marca: </td>
                <td><input type="text" id="Marca" name="Marca" placeholder="BMW" value="<?php echo $id_car['Marca'];?>"/></td>
                <td><font color="red">
                    <span id="error_Marca" class="error"></span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Modelo: </td>
                <td><input type="text" id= "Modelo" name="Modelo" placeholder="X6" value="<?php echo $id_car['Modelo'];?>"/></td>
                <td><font color="red">
                    <span id="error_Modelo" class="error"></span>
                </font></font></td>
            </tr>

            <tr>
                <tdç>Matricula: </td>
                <td><input type="text" id= "Matricula" name="Matricula" placeholder="0000XXX" value="<?php echo $id_car['Matricula'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_Matricula" class="error">
                        <?php
                            echo"error_Matricula";
                        ?>
                    </span>
                </font></font></td>
            </tr> -->
            
            <tr>
                <td>kms: </td>
                <td><input type="text" id="kms" name="kms" placeholder="000000" value="<?php echo $id_car['kms'];?>"/></td>
                <td><font color="red">
                    <span id="error_kms" class="error"></span>
                </font></font></td>
            </tr>

            <!-- <tr>
                <td>Tipo: </td>
                <td>
                    <?php
                        // $data = 'hola crtl user create';
                        // die('<script>console.log('.json_encode( $id['type'] ) .');</script>');

                        if ($id_car['Tipo']==="GS"){
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="GS" readonly checked/>Gasolina
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="DS" readonly/>Diesel
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="ET" readonly/>Electrico
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="HB" readonly/>Hybrid
                    <?php    
                        } else if ($id_car['Tipo']==="DS"){
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="GS" readonly/>Gasoline
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="DS" readonly checked/>Diesel
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="ET" readonly/>Electric
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="HB" readonly/>Hybrid
                    <?php
                        } else if ($id_car['Tipo']==="ET"){
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="GS" readonly/>Gasoline
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="DS" readonly/>Diesel
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="ET" readonly checked/>Electric
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="HB" readonly/>Hybrid
                    <?php   
                        } else if ($id_car['Tipo']==="HB") {
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="GS" readonly/>Gasoline
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="DS" readonly/>Diesel
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="ET" readonly/>Electric
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="HB" readonly checked/>Hybrid
                    <?php   
                        }
                    ?> 
                </td>
                <td><font color="red">
                    <span id="error_Tipo" class="error"></span>
                </font></font></td>
            </tr> -->

            <tr>
                <td>Comentarios: </td>
                <td><textarea cols="30" rows="5" id="Comentarios" name="Comentarios" placeholder="Comentarios"><?php echo $id_car['Comentarios'];?></textarea></td>
                <td><font color="red">
                    <span id="error_Comentarios" class="error">
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Cambiar fecha de matriculacion: </td>
                <td><input id="fecha" type="text" name="Cambiar_fecha" placeholder="dd/mm/yyyy" value="<?php echo $id_car['Fecha_alta'];?>"/></td>
                <td><font color="red">
                    <span id="error_Cambiar_fecha" class="error"></span>
                </font></font></td>
            </tr>

            <tr>
                <td>Color: </td>
                <td><input type="text" id="color" name="color" placeholder="Red" value="<?php echo $id_car['Color'];?>"/></td>
                <td><font color="red">
                    <span id="error_Color" class="error"></span>
                </font></font></td>
            </tr>

            <tr>
                <td>Extras: </td>
                <td>
                    <?php
                        // $data = 'hola crtl user create';
                        // die('<script>console.log('.json_encode( $id['type'] ) .');</script>');

                        if ($id_car['Extras']==="CT"){
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CT" readonly checked/>Camara Trasera
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="MC" readonly/>Modo Crucero
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="NV" readonly/>Navegador
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CI" readonly/>navegador inhalambrico
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="Ll" readonly/>Luces led
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="AC" readonly/>Asientos calefactables
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CA" readonly/>Conduccion autonoma
                    <?php    
                        } else if ($id_car['Extras']==="MC"){
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CT" readonly />Camara Trasera
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="MC" readonly checked/>Modo Crucero
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="NV" readonly/>Navegador
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CI" readonly/>cargador inhalambrico
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="Ll" readonly/>Luces led
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="AC" readonly/>Asientos calefactables
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CA" readonly/>Conduccion autonoma
                    <?php
                        } else if ($id_car['Extras']==="NV"){
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CT" readonly/>Camara Trasera
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="MC" readonly/>Modo Crucero
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CI" readonly checked/>Navegador 
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="NV" readonly/>cargador inhalambrico
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="Ll" readonly/>Luces led
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="AC" readonly/>Asientos calefactables
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CA" readonly/>Conduccion autonoma
                    <?php   
                        } else if ($id_car['Extras']==="CI") {
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CT" readonly/>Camara Trasera
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="MC" readonly/>Modo Crucero
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="NV" readonly/>Navegador
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CI" readonly checked/>cargador inhalambrico
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="Ll" readonly/>Luces led
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="AC" readonly/>Asientos calefactables
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CA" readonly/>Conduccion autonoma
                    
                    <?php   
                        } else if ($id_car['Extras']==="Ll") {
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CT" readonly>Camara Trasera
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="MC" readonly/>Modo Crucero
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="NV" readonly/>Navegador
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CI" readonly/>cargador inhalambrico
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="Ll" readonly checked/>Luces led
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="AC" readonly/>Asientos calefactables
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CA" readonly/>Conduccion autonoma
                    
                    <?php   
                        } else if ($id_car['Extras']==="AC") {
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CT" readonly/>Camara Trasera
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="MC" readonly/>Modo Crucero
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="NV" readonly/>Navegador
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CI" readonly/>Cargador inhalambrico
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="Ll" readonly/>Luces led
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="AC" readonly checked/>Asientos calefactables
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CA" readonly/>Conduccion autonoma
                
                    <?php   
                        } else if ($id_car['Extras']==="CA") {
                    ?>
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CT" readonly checked/>Camara Trasera
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="MC" readonly/>Modo Crucero
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="NV" readonly/>Navegador
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CI" readonly/>Cargador inhalambrico
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="Ll" readonly/>Luces led
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="AC" readonly/>Asientos calefactables
                        <input type="radio" id="type" name="Tipo" placeholder="Tipo" value="CA" readonly checked/>Conduccion autonoma
                    <?php   
                        }
                    ?> 
                </td>
                <td><font color="red">
                    <span id="error_Extras" class="error"></span>
                </font></font></td>
            
            <tr>
                <td>Imagenes: </td>
                <td><input type="text" id="Imagenes" name="Imagenes" placeholder=".jpg/.png" value="<?php echo $id_car['Imagenes'];?>"/></td>
                <td><font color="red">
                    <span id="error_Imagenes" class="error"></span>
                </font></font></td>
            </tr>

            <tr>
                <td>Precio: </td>
                <td><input type="text" id="Precio" name="Precio" placeholder="000000" value="<?php echo $id_car['Precio'];?>"/></td>
                <td><font color="red">
                    <span id="error_Precio" class="error"></span>
                </font></font></td>
            </tr>

            <!-- <tr>
                <td>Numero de puertas: </td>
                <td><input type="text" id="Num_puertas" name="Num_puertas" placeholder="0" value="<?php echo $id_car['Num_puertas'];?>"/></td>
                <td><font color="red">
                    <span id="error_Num_puertas" class="error"></span>
                </font></font></td>
            </tr> -->
            <tr>
                <td>Ciudad: </td>
                <td><input type="text" id="Ciudad" name="Ciudad" placeholder="Ontinyent" value="<?php echo $id_car['Ciudad'];?>"/></td>
                <td><font color="red">
                    <span id="error_Ciudad" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Latitud: </td>
                <td><input type="text" id="Latitud" name="Latitud" placeholder="38.8232769" value="<?php echo $id_car['Latitud'];?>"/></td>
                <td><font color="red">
                    <span id="error_Latitud" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Longitud: </td>
                <td><input type="text" id="Longitud" name="Longitud" placeholder="-0.600155" value="<?php echo $id_car['Longitud'];?>"/></td>
                <td><font color="red">
                    <span id="error_Longitud" class="error"></span>
                </font></font></td>
            </tr>
            

            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <!-- <td><br><input name="Submit" type="button" class="Button_red_2" onclick="validate('update')" value="Aplicar Cambios"/></td> -->
                <td align="right"><br><a class="Button_green" href="index.php?module=cars&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>