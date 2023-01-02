<?php
    include("model/connect.php");

   class DAOCars{
    function insert_cars($datos){
        $Num_bastidor = $datos['Num_bastidor'];
        $Marca = $datos['Marca'];
        $Modelo = $datos['Modelo'];
        $Matricula = $datos['Matricula'];
        $kms = $datos['kms'];
        $Categoria = $datos['Categoria'];
        $Tipo = $datos['Tipo'];
        $Comentarios = $datos['Comentarios'];
        $Fecha_alta = $datos['Fecha_alta'];
        $Color = $datos['Color'];
        $Extras = $datos['Extras'];
        $Imagenes = $datos['Imagenes'];
        $Precio = $datos['Precio'];
        $Num_puertas = $datos['Num_puertas'];
        $Ciudad = $datos['Ciudad'];
        $Latitud = $datos['Latitud'];
        $Longitud = $datos['Longitud'];

        $sql = "INSERT INTO cars(Num_bastidor,Marca,Modelo,Matricula,kms,Categoria,Tipo,
           Comentarios,Fecha_alta,Color,Extras,Imagenes,Precio,Num_puertas,Ciudad,Latitud,Longitud)
             VALUES('$Num_bastidor','$Marca','$Modelo','$Matricula','$kms','$Categoria','$Tipo',
               '$Comentarios','$Fecha_alta','$Color','$Extras','$Imagenes','$Precio','$Num_puertas','$Ciudad',
               '$Latitud','$Longitud')";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
           return $res;
    }


    function select_all_cars(){
        	// $data = 'hola DAO select_all_user';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM cars ORDER BY id_car ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
		
            return $res;
		}
    function select_car($id_car){
        // $data = 'hola DAO select_car';
        //     die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM cars WHERE id_car='$id_car'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
    function update_car($datos, $id_car) {
			
			// $license_number = $datos['license_number'];
        	$Marca = $datos['Marca'];
        	$Modelo = $datos['Modelo'];
        	// $car_plate = $datos['car_plate'];
        	$kms = $datos['kms'];
            $Categoria = "";
            foreach ($datos['Categoria'] as $indice) {
        	    $Extras = $Categoria."$indice:";
        	}
        	$Tipo = "";
            foreach ($datos['Tipo'] as $indice) {
        	    $Extras = $Tipo."$indice:";
        	}
			$Comentarios=$datos['Comentarios'];
			$Fecha_alta=$datos['Fecha_alta'];
        	$Color=$datos['Color'];
            $Extras="";
        	foreach ($datos['Extras'] as $indice) {
        	    $Extras = $Extras."$indice:";
        	}
            $Imagenes = $datos['Imagenes'];
            $Precio = $datos['Precio'];
            $Num_puertas = $datos['Num_puertas'];
            $Ciudad = $datos['Ciudad'];
            $Latitud = $datos['Latitud'];
            $Longitud = $datos['Longitud'];


        	$sql = "UPDATE cars SET Marca='$Marca', Modelo='$Modelo', kms='$kms',Categoria='$Categoria', Tipo='$Tipo', Comentarios='$Comentarios', Fecha_alta='$Fecha_alta',Color='$Color',Extras='$Extras'
            ,Imagenes='$Imagenes',Precio='$Precio',Num_puertas='$Num_puertas',Ciudad='$Ciudad', Latitud='$Latitud',Longitud='$Longitud'
			  WHERE id_car='$id_car'";

            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);

			return $res;
		}

		function delete_cars($id_car){
			$sql = "DELETE FROM cars WHERE id_car='$id_car'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

        function delete_all_cars(){
			$sql = "DELETE FROM cars";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);

            return $res;
		}
   }
?>