<?php
	/*
		UserPie Version: 1.0 Updated by: Kenyer Domínguez
		http://userpie.com
	*/
	require_once("models/config.php");
	
	//Prevent the user visiting the logged in page if he/she is already logged in
		if (!isset($loggedInUser)) header('Location: login.php');
	/* 
		Below is a very simple example of how to process a new event.
		 Some simple validation (ideally more is needed).
		
		The first goal is to check for empty / null data, to reduce workload here we let the event class perform it's own internal checks, 
		just in case they are missed.
	*/

//Forms posted
if(!empty($_POST))
{
		$errors = array();
		$email = trim($_POST["email"]);
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);
		$confirm_pass = trim($_POST["passwordc"]);
	
		//Perform some validation
		//Feel free to edit / change as required
		
		if(minMaxRange(5,25,$username))
		{
			$errors[] = lang("ACCOUNT_USER_CHAR_LIMIT",array(5,25));
		}
		if(minMaxRange(8,50,$password) && minMaxRange(8,50,$confirm_pass))
		{
			$errors[] = lang("ACCOUNT_PASS_CHAR_LIMIT",array(8,50));
		}
		else if($password != $confirm_pass)
		{
			$errors[] = lang("ACCOUNT_PASS_MISMATCH");
		}
		if(!isValidemail($email))
		{
			$errors[] = lang("ACCOUNT_INVALID_EMAIL");
		}
		//End data validation
		if(count($errors) == 0)
		{	
				//Construct a user object
				$user = new User($username,$password,$email);
				
				//Checking this flag tells us whether there were any errors such as possible data duplication occured
				if(!$user->status)
				{
					if($user->username_taken) $errors[] = lang("ACCOUNT_USERNAME_IN_USE",array($username));
					if($user->email_taken) 	  $errors[] = lang("ACCOUNT_EMAIL_IN_USE",array($email));		
				}
				else
				{
					//Attempt to add the user to the database, carry out finishing  tasks like emailing the user (if required)
					if(!$user->userPieAddUser())
					{
						if($user->mail_failure) $errors[] = lang("MAIL_ERROR");
						if($user->sql_failure)  $errors[] = lang("SQL_ERROR");
					}
				}
		}
	   if(count($errors) == 0) 
	   {
		        if($emailActivation)
		        {
		             $message = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE2");
		        } else {
		             $message = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE1");
		        }
	   }
	   else
	   {
	   			$message = '<span style="color: red;">'.implode("<br> ", $errors).'</span>';
	   }
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo lang("SIGN_UP"); ?> | <?php echo $websiteName; ?> </title>
<?php require_once("head_inc.php"); ?>
</head>

<body>
<?php require_once("navbar.php"); ?>
<div class="clear"></div>

<div class="modal-ish">
	<div class="modal-header">
		<h2><?php echo "Crear Solicitud" ?></h2>
	</div>
	  <div class="modal-body">
				<div id="success">
				   <p nowrap><small><?php if (isset($message)) echo $message; ?></small></p>   
				</div>

				<div id="regbox">
					<form name="newUser" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					
					<p>
						<label>Fecha de inicio:
						<input type="text" name="name" /></label>
						
						<label>Fecha de Fin:
						<input type="text" name="lastname" /></label>
																		
						<label>Descripción:
						<input type="text" name="username" /></label>
				 
						<label>Tipo:
							<select name="event-type">
								<option value"0">--Seleccione--</option>
								<?=get_event_types();?>		
							</select> 
						</label>
						
						<hr> <small><center>Solo para miembros USB</center></small>
						<label><?php echo lang("DEPARTMENT"); ?>:
							<select name="dpto">
								<option value"0">--Seleccione--</option>
								<option value"1">Esto debería ser una tabla en la BD</option>
								<option value"2">Computación</option>
								<option value"3">Procesos y Sistemas</option>
							</select> 				
						</label>

						<label>Extensión:
						<input type="text" name="extension" />	</label>		

						<label>Correo USB:
						<input type="text" name="usb-email" />	</label>	

						<hr> <small><center>Solo para referidos</center></small>
						<label>Correo USB del referido:
						<input type="text" name="usb-email-referido" />	</label>

						<label>Parentezco:											
						<select name="parentezco">
							<option value"0">--Seleccione--</option>
							<option value"1">Padre o madre</option>
							<option value"2">Hijo(a)</option>
							<option value"3">Hermano(a)</option>
						</select> 	</label>
						
						<hr> <small><center>Solo para usuarios del tipo "Otro"</center></small>
						<label>¿Cómo se enteró de este servicio?:
						<input type="text" name="fuente" />	</label>					
		
					</p>                
				</div>           
		</div>

			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" name="new" id="newfeedform" value="<?php echo lang("SIGN_UP"); ?>" />
			</div>  
                
	</form>
            </div>

			<div class="clear"></div>
	<?php $tipo=2; require_once("footer.php"); ?>
</body>
</html>
