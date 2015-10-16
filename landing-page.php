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
<?php require_once("navbar.php"); ?>
<body>


<h3><center><?php echo $websiteName; ?> </center></h3>
<p style="text-align:center">    
<table width="1000" align=center>
  <tr>
    <td width="500"><?php include("fullcalendar/calendar.php"); ?></td>
    <td><iframe src="/SRdCP/galeria/" width="500" height="500" frameborder=0 scrolling="no"></iframe></td>
  </tr>
</table>
		<p style="text-align:center">           
			<a class="btn btn-large" href="login.php">
				<?php echo lang("LOGIN"); ?>
			</a> 
			<a class="btn-danger btn btn-large" href="register.php">
				<?php echo lang("SIGN_UP"); ?>
			</a><br>
		<?php
		  $tipo=0;
		  include("footer.php");	
		  ?>
		</p>
     
            <div class="clear"></div>
</p>
</body>
</html>