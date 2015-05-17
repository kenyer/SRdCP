<?php 

	/*
		UserPie Version: 1.0 Updated by: Kenyer Domínguez
		http://usercake.com
	*/
	
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $websiteName; ?> </title>
<?php	require_once("head_inc.php"); ?>




</head>
<body>
<?php require_once("navbar.php"); ?>


	<div id="content">
		
		<p style="text-align:center">      
		<h3><center><?php echo $websiteName; ?> </center></h3>
		</p>

		<?php include("fullcalendar/calendar.php"); ?>
            
            <hr>
			<p style="text-align:center">           
				<a class="btn btn-large" href="login.php">
					<?php echo lang("LOGIN"); ?>
				</a> 
				<a class="btn-danger btn btn-large" href="register.php">
					<?php echo lang("SIGN_UP"); ?>
				</a>
			</p>
            <br>
                
<p style="text-align:center">
	<a href="forgot-password.php"><?php echo lang("FORGOT_PASSWORD"); ?></a> | 
	<a href="resend-activation.php"><?php echo lang("RESEND_ACTIVATION_EMAIL"); ?></a></p>
     
            <div class="clear"></div>
</div>

</body>
</html>


