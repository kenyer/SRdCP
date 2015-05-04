<?php 

	/*
		UserPie Version: 1.0 Updated by: Kenyer Domínguez
		http://usercake.com
		
	*/
	
?>	 <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container clearfix">
        <a class="brand" id="logo" href="<?php echo $websiteUrl; ?>"><?php echo lang("HOME"); ?></a>

        
        <ul class="nav pull-right">
<?php if(isUserLoggedIn()) { ?>
       			<li><a href="change-password.php">Cambiar contraseña</a></li>
                <li><a href="update-email-address.php">Actualizar Perfil</a></li>
 				<li><a href="logout.php">Salir</a></li>
 				<li><a href="#"><?php echo $loggedInUser->display_username; ?></a></li>
<?php } else { ?>
                <li><a href="login.php"><?php echo lang("LOGIN"); ?></a></li>
                <li><a href="register.php"><?php echo lang("SIGN_UP"); ?></a></li>
                
<?php } ?>
        </ul>
        
      </div>
    </div>
  </div>
