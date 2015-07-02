<?php 

	/*
		UserPie Version: 1.0 Updated by: Kenyer Domínguez
		http://usercake.com
	*/
	
?>	 
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container clearfix">
				
					<?php if(isUserLoggedIn()) { ?>
				<ul class="nav pull-left">		
					<a class="brand" id="logo" href="<?php echo $websiteUrl; ?>"><?php echo lang("HOME"); ?></a>
				</ul>
				<ul class="nav pull-right">		
						<?php 
						if (isUserAdmin()){ ?>
							<li><a href="admin-options.php">Opciones Administrativas</a></li>
						<?php  } ?>
						<div id="header">
							<ul class="nav">
								<li><a href="">Gestionar Solicitudes</a>
									<ul>
										<li><a href="crear-solicitud.php">Crear Solicitud</a></li>
										<li><a href="consultar-mis-solicitudes.php">Consultar mis solicitudes</a></li>
									</ul>
								</li>
								<li><a href=""><?php echo strtoupper($loggedInUser->display_username); ?></a>
									<ul>
										<li><a href="change-password.php">Cambiar contraseña</a></li>
										<li><a href="update-email-address.php">Actualizar Perfil</a></li>
										<li><a href="logout.php">Salir</a></li>										
									</ul>
								</li>
								
							</ul>
						</div>
				</ul>
											
					<?php 
				} else { ?>
					<ul class="nav pull-left">	
						<a class="brand" id="logo" href="#">BIENVENIDO</a>
					</ul>      
				<?php } ?>
      </div>
    </div>
  </div>
