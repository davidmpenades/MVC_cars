<?php
    function validate_Num_bastidor($Num_bastidor){

        $mysqli = "SELECT * FROM cars WHERE id_car='$Num_bastidor'";
    
        $conexion = connect::con();
        $res = mysqli_query($conexion, $mysqli);
        $res = mysqli_num_rows($res);
        connect::close($conexion);

        return $res;
    }

    function validate_Matricula($Matricula){

        $mysqli = "SELECT * FROM cars WHERE id_car='$Matricula'";
    
        $conexion = connect::con();
        $res = mysqli_query($conexion, $mysqli);
        $res = mysqli_num_rows($res);
        connect::close($conexion);

        return $res;
    }
    
    function validate() {

        // $data = 'hola validate php';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        $check = true;
        
        $v_Num_bastidor = $_POST['Num_bastidor'];
        $v_Matricula = $_POST['Matricula'];

        $error_Num_bastidor = validate_Num_bastidor($v_Num_bastidor);
        $error_Matricula = validate_Matricula($v_Matricula);

        if($error_Num_bastidor === 1){
            echo '<script language="javascript">toastr.error("El número de bastidor no puede estar repetido");</script>';
            $check = false;
        }

        if($error_Matricula === 1){
            echo '<script language="javascript">toastr.error("La matrícula no puede estar repetida");</script>';
            $check = false;
        }

        return $check;
    }