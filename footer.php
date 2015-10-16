<?php
	/*
		UserPie Version: 1.0 Updated by: Kenyer Domínguez
		http://userpie.com
	*/
?>
<?php
  switch ($tipo){
      case 0:
      ?>
	  <a href="forgot-password.php"><?php echo lang("FORGOT_PASSWORD"); ?></a> | 
	  <a href="resend-activation.php"><?php echo lang("RESEND_ACTIVATION_EMAIL"); ?></a>
      <?php
      break;
      case 1:
  ?>
	<hr>
	<p style="margin-top:30px; text-align:center;">
	  <a href="register.php"><?php echo lang("SIGN_UP"); ?></a> / 
	  <a href="forgot-password.php"><?php echo lang("FORGOT_PASSWORD"); ?></a> / 
	  <a href="<?php echo $websiteUrl; ?>"><?php echo lang("HOME"); ?></a>
	</p>
    
    <?php 
      break;
      case 2:
      ?>
	<hr>
	<p style="margin-top:30px; text-align:center;">
	<?php echo $websiteName; ?> | 
	    <a href="<?php echo $websiteUrl; ?>"><?php echo lang("HOME"); ?></a>
	</p>
      <?php
      break;
      case 3:
      ?>      
	<p style="margin-top:30px; text-align:center;">
	<a href="login.php"><?php echo lang("LOGIN"); ?></a> / 
	<a href="forgot-password.php"><?php echo lang("FORGOT_PASSWORD"); ?></a> / 
	<a href="<?php echo $websiteUrl; ?>"><?php echo lang("HOME"); ?></a></p>
      <?php   
      break;
      case 4:
      ?>      
	<p style="margin-top:30px; text-align:center;">
	<a href="register.php"><?php echo lang("SIGN_UP"); ?></a> / 
	<a href="login.php"><?php echo lang("LOGIN"); ?></a> / 
	<a href="<?php echo $websiteUrl; ?>"><?php echo lang("HOME"); ?></a></p>
	<?php   
      break;      
      case 5:
      ?>      
	<p style="margin-top:30px; text-align:center;">
	<a href="register.php"><?php echo lang("SIGN_UP"); ?></a> / 
	<a href="login.php"><?php echo lang("LOGIN"); ?></a> / 
	<a href="forgot-password.php"><?php echo lang("FORGOT_PASSWORD"); ?></a> / 
	<a href="<?php echo $websiteUrl; ?>"><?php echo lang("HOME"); ?></a></p>
	<?php   
      break;      
  }
?>

