<?php
	/*
		UserPie Version: 1.0 Updated by: Kenyer Domínguez
		http://usercake.com
		

	*/
	
	require_once("models/config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>404 - Page Not Found | <?php echo $websiteName; ?> </title>
<?php require_once("head_inc.php"); ?>

</head>
<body><div class="modal-ish">
  <div class="modal-header">
    <center><img src="assets/img/not_authorized.png"></center>

  </div>
  <div class="modal-body">
	<center>  
	<h1>401</h1>
	<h2><?php echo lang("NOT_AUTHORIZED"); ?></h2>
	</center>
  </div>

                
  
</div>               
        
            <div class="clear"></div>
            
            <p style="margin-top:30px; text-align:center;">
				<a href="register.php"><?php echo lang("SIGN_UP"); ?></a> / 
				<a href="login.php"><?php echo lang("LOGIN"); ?></a> / 
				<a href="forgot-password.php"><?php echo lang("FORGOT_PASSWORD"); ?></a> / 
				<a href="<?php echo $websiteUrl; ?>"><?php echo lang("HOME"); ?></a></p>
            
</html>
