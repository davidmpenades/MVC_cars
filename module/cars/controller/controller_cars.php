<?php
        // $data = 'hola crtl cars';
        // die('<script>console.log('.json_encode( $data ) .');</script>');
    include("module/cars/model/DAOCars.php");
    //  session_start();

    switch($_GET['op']){
    case 'list';
    //    $data = 'hola crtl user';
    //         die('<script>console.log('.json_encode( $data ) .');</script>');

            try{
                 $daocars = new DAOCars();
            	 $rdo = $daocars->select_all_cars();
                // die('<script>console.log('.json_encode( $rdo->num_rows ) .');</script>');
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
             if(!$rdo){
    			$callback = 'index.php?page=503';
			     die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/cars/view/list_cars.php");
    		}
        break;
        case 'read';
        // $data='hola tio';
        // die('<script>console.log('.json_encode( $_GET['id_car'] ) .');</script>');
        try{
            // die('<script>console.log('.json_encode( $_GET['id_car'] ) .');</script>');
            $dao_cars = new DAOCars();
            $result = $dao_cars -> select_car($_GET['id_car']);
            $id_car = get_object_vars($result);
         //die('<script>console.log('.json_encode( $id_car ) .');</script>');
        }catch (Exception $e){
            $callback = 'index.php?module=errors&op=503';
            die('<script>window.location.href="'.$callback .'";</script>');
        }
        if(!$result){
            $callback = 'index.php?module=errors&op=503&desc=Read error';
            die('<script>window.location.href="'.$callback .'";</script>');
        }else{
           // $data='hola tio';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            include("module/cars/view/read_cars.php");
        }
        break;
        
    case 'create';
    
        // $data = 'hola crtl user create';
        // echo('<script>console.log('.json_encode( $data ) .');</script>');

        include("module/cars/model/validate.php");
        $check = true;

        if (isset($_POST['create'])){

        //   $data = 'hola  create';
        //   die('<script>console.log('.json_encode( $data ) .');</script>');
           
          $check = validate();
        //   $data = 'hola validate';
        // die('<script>console.log('.json_encode( $data) .');</script>');
            if ($check){
                $_SESSION['id_car']=$_POST;

                // die('<script>console.log('.json_encode( $_POST) .');</script>');

                try{
                        $daocars = new DAOCars();
    		            $rdo = $daocars->insert_cars($_POST);
                        // die('<script>console.log('.json_encode( $rdo) .');</script>');
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_cars&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
        include("module/cars/view/create_cars.php");
        break;

    case 'update';
    include("module/cars/model/validate.php");

        $check = true;

        if (isset($_POST['update'])){
            $check = validate();
            if ($check){
                $_SESSION['id_car']=$_POST;
                try{
                    $dao_cars = new DAOCars();
    		        $rdo = $dao_cars -> update_car($_POST, $_GET['id_car']);
                }catch (Exception $e){
                    $callback = 'index.php?module=errors&op=503';
        			die('<script>window.location.href="'.$callback .'";</script>');
                }
                    
		        if($rdo){
            		echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            		$callback = 'index.php?module=cars&op=list';
        			die('<script>window.location.href="'.$callback .'";</script>');
            	}else{
            		$callback = 'index.php';
    			    die('<script>window.location.href="'. $callback .'";</script>');
            	}
            }
        }
            
        try{
            $dao_cars = new DAOCars();
            $result = $dao_cars -> select_car($_GET['id_car']);
            $id_car = get_object_vars($result);
        }catch (Exception $e){
            $callback = 'index.php?module=errors&op=503';
			die('<script>window.location.href="'.$callback .'";</script>');
        }
            
        if(!$result){
    		$callback = 'index.php?module=errors&op=503&desc=Update error';
    		die('<script>window.location.href="'.$callback .'";</script>');
    	}else{
        	include("module/cars/view/update_cars.php");
    	}
        break;

        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daocars = new DAOcars();
                	$rdo = $daocars->delete_cars($_GET['id_car']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_cars&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            // die('<script>console.log('.json_encode( $_GET['id_car'] ) .');</script>');
            include("module/cars/view/delete_cars.php");
            break;

    case 'delete_all';
        if ($_POST){
            try{
                $dao_cars = new DAOCars();
                $result = $dao_cars -> delete_all_cars();
            }catch (Exception $e){
                $callback = 'index.php?module=errors&op=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if($result){
                echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
                $callback = 'index.php?module=cars&op=list';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                $callback = 'index.php?module=errors&op=503&desc=Delete all error';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
        }
        
        include("Module/cars/view/delete_all_cars.php");
        break;
    }


?>