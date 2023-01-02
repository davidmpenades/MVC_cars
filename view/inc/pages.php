<?php
	switch($_GET['page']){
		case "homepage";
			include("module/inicio/view/inicio.php");
			break;
		case "controller_cars";
			include("module/cars/controller/".$_GET['page'].".php");
			break;
		case "services";
			include("module/services/".$_GET['page'].".php");
			break;
		case "aboutus";
			include("module/aboutus/".$_GET['page'].".php");
			break;
		case "contactus";
			include("module/contact/".$_GET['page'].".php");
			break;
		case "404";
			include("error".$_GET['page'].".php");
			break;
		case "503";
			include("error".$_GET['page'].".php");
			break;
		default;
			include("module/inicio/view/inicio.php");
			break;
	}
?>