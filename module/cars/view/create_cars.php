<div id="contenido">
    <form autocomplete="on" method="post" name="alta_cars" id="alta_cars" onsubmit="return validate();" action="index.php?page=controller_cars&op=create">
        <h1>Coche nuevo</h1>
        <table border='0'>
            <tr>
                <td>Numero de bastidor: </td>
                <td><input type="text" id="Num_bastidor" name="Num_bastidor" placeholder="2OUD50JIL04J" value=""/></td>
                <td><font color="red">
                    <span id="error_Num_bastidor" class="error">
                        <?php
                            //  echo "$error_Num_bastidor";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Marca: </td>
                <td><input type="Text" id="Marca" name="Marca" placeholder="Audi" value=""/></td>
                <td><font color="red">
                    <span id="error_Marca" class="error"></span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Modelo: </td>
                <td><input type="text" id="Modelo" name="Modelo" placeholder="A3" value=""/></td>
                <td><font color="red">
                    <span id="error_Modelo" class="error"></span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Matricula: </td>
                <td><input type="text" id= "Matricula" name="Matricula" placeholder="0000DDD" value=""/></td>
                <td><font color="red">
                    <span id="error_Matricula" class="error">
                        <?php
                            // echo "$error_Matricula";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>kms: </td>
                <td><input type="text" id="kms" name="kms" placeholder="000000" value=""/>
                <td><font color="red">
                    <span id="error_sexo" class="error"></span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Categoria: </td>
                <td>
                    <input type="checkbox" id= "Categoria[]" name="Categoria[]" placeholder= "Categoria" value="Sport"/>Sport
                    <input type="checkbox" id= "Categoria[]" name="Categoria[]" placeholder= "Categoria" value="Sedan"/>Sedan
                    <input type="checkbox" id= "Categoria[]" name="Categoria[]" placeholder= "Categoria" value="SUV"/>SUV
                    <input type="checkbox" id= "Categoria[]" name="Categoria[]" placeholder= "Categoria" value="Familiar"/>Familiar
                </td>
                <td><font color="red">
                    <span id="error_Categoria" class="error"></span>
                </font></font></td>
            </tr>
            
           <tr>
                <td>Tipo: </td>
                <td><select id="Tipo[]" name="Tipo[]" placeholder="Tipo de combustible">
                    <option value="Gasolina">Gasolina</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Electrico">Electrico</option>
                    <option value="Hybrid">Hybrid</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_Tipo" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Comentarios: </td>
                <td><textarea cols="30" rows="5" id="Comentarios" name="Comentarios" placeholder="Comentarios" value=""></textarea></td>
                <td><font color="red">
                    <span id="error_Comentarios" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Fecha de matriculacion: </td>
                <td><input id="fecha" type="text" name="Fecha_alta" placeholder="dd/mm/yyyy" value=""/></td>
                <td><font color="red">
                    <span id="error_Fecha_alta" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Color: </td>
                <td><input type="text" id="Color" name="Color" placeholder="Rojo" value=""/></td>
                <td><font color="red">
                    <span id="error_Color" class="error"></span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Extras: </td>
                <td>
                    <input type="radio" id="Extras" name="Extras" placeholder="type" value="CT"/>Camara Trasera
                    <input type="radio" id="Extras" name="Extras" placeholder="type" value="MC"/>Modo Crucero
                    <input type="radio" id="Extras" name="Extras" placeholder="type" value="NV"/>Navegador
                    <input type="radio" id="Extras" name="Extras" placeholder="type" value="CI"/>Cargador inhalambrico
                    <input type="radio" id="Extras" name="Extras" placeholder="type" value="Ll"/>Luces led
                    <input type="radio" id="Extras" name="Extras" placeholder="type" value="AC"/>Asientos calefactables
                    <input type="radio" id="Extras" name="Extras" placeholder="type" value="CA"/>Conduccion autonoma   
                </td> 
                <td><font color="red">
                    <span id="error_Extras" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Imagenes: </td>
                <td><input type="text" id="Imagenes" name="Imagenes" placeholder=".jpg/.png" value=""/></td>
                <td><font color="red">
                    <span id="error_Imagenes" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Precio: </td>
                <td><input type="text" id="Precio" name="Precio" placeholder="000000" value=""/></td>
                <td><font color="red">
                    <span id="error_Precio" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Numero de puertas: </td>
                <td><input type="text" id="Num_puertas" name="Num_puertas" placeholder="3/4/5" value=""/></td>
                <td><font color="red">
                    <span id="error_Num_puertas" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Ciudad: </td>
                <td><input type="text" id="Ciudad" name="Ciudad" placeholder="Ontinyent" value=""/></td>
                <td><font color="red">
                    <span id="error_Ciudad" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Latitud: </td>
                <td><input type="text" id="Latitud" name="Latitud" placeholder="38.8232769" value=""/></td>
                <td><font color="red">
                    <span id="error_Latitud" class="error"></span>
                </font></font></td>
            </tr>
            <tr>
                <td>Longitud: </td>
                <td><input type="text" id="Longitud" name="Longitud" placeholder="-0.600155" value=""/></td>
                <td><font color="red">
                    <span id="error_Longitud" class="error"></span>
                </font></font></td>
            </tr>           
            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_cars&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>