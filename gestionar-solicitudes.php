<?php 
	/*
		UserPie Version: 1.0 Updated by: Kenyer Domínguez
		http://userpie.com
	*/
	require_once("models/config.php");

	if (!isset($loggedInUser))
		header('Location: login.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $websiteName; ?> </title>
<?php require_once("head_inc.php"); ?>
</head>

<body>
<?php require_once("navbar.php"); ?>
	<div id="content">
    
			<h1>Gestionar Solicitudes</h1>
        	<p><a href="crear-solicitud.php">Crear Solicitud</a></p>
        	<?php
				if (isUserAdmin()){?>
					<p><a href="consultar-solicitudes.php">Consultar Solicitudes</a></p>
				<?php 
				}else{ ?>
					<p><a href="consultar-mis-solicitudes.php">Consultar mis Solicitudes</a></p>
				<?php }
					
        	?>
	</div>	
	<?php require_once("footer.php"); ?>
</body>
</html>


