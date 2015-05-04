<?php
	/*
		UserPie Language File.
		Language: Spanish.
		Created by: Kenyer Domínguez
	*/
	
	/*
		%m1% - Dymamic markers which are replaced at run time by the relevant index.
	*/

	$lang = array();
	
	//Account
	$lang = array_merge($lang,array(
		"ACCOUNT_SPECIFY_USERNAME" 				=> "Por favor introduzca su nombre de usuario",
		"ACCOUNT_SPECIFY_PASSWORD" 				=> "Por favor introduzca su constraseña",
		"ACCOUNT_SPECIFY_EMAIL"					=> "Por favor introduzca su correo electrónico",
		"ACCOUNT_INVALID_EMAIL"					=> "Correo Electrónico inválido",
		"ACCOUNT_INVALID_USERNAME"				=> "Nombre de usuario inválido",
		"ACCOUNT_USER_OR_EMAIL_INVALID"			=> "Nombre de usuario o correo inválido",
		"ACCOUNT_USER_OR_PASS_INVALID"			=> "Nombre de usuario o contraseña inválido",
		"ACCOUNT_ALREADY_ACTIVE"				=> "Su cuenta ha sido activada",
		"ACCOUNT_INACTIVE"						=> "Su cuenta está inactiva, Por favor revise sus mensajes de correo electrónico, incluyendo la carpeta de SPAM o correo no deseado, dado que debió haber recibido un correo con las instrucciones",
		"ACCOUNT_USER_CHAR_LIMIT"				=> "Su nombre de usuario no puede tener menos de %m1% caracteres ni más de %m2%",
		"ACCOUNT_PASS_CHAR_LIMIT"				=> "Su contraseña no puede tener menos de %m1% caracteres ni más de %m2%",
		"ACCOUNT_PASS_MISMATCH"					=> "Las constraseñas no coinciden",
		"ACCOUNT_USERNAME_IN_USE"				=> "El nombre de usuario %m1% ya ha sido usado por otra persona, por favor elija otro",
		"ACCOUNT_EMAIL_IN_USE"					=> "El correo electrónico %m1% ya ha sido usado por otra persona, por favor elija otro",
		"ACCOUNT_LINK_ALREADY_SENT"				=> "Ha sido enviado un mensaje de activación a su correo electrónico en la(s) última(s) %m1% hora(s)",
		"ACCOUNT_NEW_ACTIVATION_SENT"			=> "Le hemos enviado un mensaje a su cuenta de correo electrónico con un link de activiación. Por favor, revise su correo electrónico y siga las instrucciones",
		"ACCOUNT_NOW_ACTIVE"					=> "Su cuenta ha sido activada satisfactoriamente",
		"ACCOUNT_SPECIFY_NEW_PASSWORD"			=> "Por favor introduzca su nueva contraseña",	
		"ACCOUNT_NEW_PASSWORD_LENGTH"			=> "La nueva contraseña no puede tener menos de %m1% caracteres ni más de %m2%",	
		"ACCOUNT_PASSWORD_INVALID"				=> "La contraseña introdujo no coincide con su contraseña actual",	
		"ACCOUNT_EMAIL_TAKEN"					=> "Este correo electrónico ya ha sido utilizado por otra persona. Por favor elija otro.",
		"ACCOUNT_DETAILS_UPDATED"				=> "Los detalles de su cuenta han sido actualizados",
		"ACTIVATION_MESSAGE"					=> "Necesita activar su cuenta antes de iniciar sesión. Por favor revise su correo y siga las instrucciones\n\n
													%m1%activate-account.php?token=%m2%",							
		"ACCOUNT_REGISTRATION_COMPLETE_TYPE1"	=> "Ha sido registrado satisfactoriamente. Ahora usted puede ingresar en el sistema <a href=\"login.php\">here</a>.",
		"ACCOUNT_REGISTRATION_COMPLETE_TYPE2"	=> "Ha sido registrado satisfactoriamente. Recibirá un mensaje a su correo electrónico con las instrucciones a seguir para activar su cuenta. Debe activar su cuenta antes para poder entrar en el sistema.",
	));
	
	//Forgot password
	$lang = array_merge($lang,array(
		"FORGOT_PASSWORD"						=> "¿Olvidó su Contraseña?",
		"FORGOTPASS_INVALID_TOKEN"				=> "Token inválido",
		"FORGOTPASS_NEW_PASS_EMAIL"				=> "Le hemos enviado un nuevo password a su cuenta de correo electrónico",
		"FORGOTPASS_REQUEST_CANNED"				=> "Se ha cancelado la petición de recordar contraseña",
		"FORGOTPASS_REQUEST_EXISTS"				=> "Ya se ha enviado una solicitud para recordar contraseña para esta cuenta",
		"FORGOTPASS_REQUEST_SUCCESS"			=> "Le hemos enviado un mensaje a su correo electrónico con las instrucciones para acceder a su cuenta",
	));
	
	//Miscellaneous
	$lang = array_merge($lang,array(
		"CONFIRM"								=> "Confirmar",
		"DENY"									=> "Rechazar",
		"SUCCESS"								=> "Éxtito",
		"ERROR"									=> "Error",
		"NOTHING_TO_UPDATE"						=> "No hay nada que modificar",
		"SQL_ERROR"								=> "Error en base de datos. Por favor contacte al administrador del sistema",
		"MAIL_ERROR"							=> "Error en envío de correo electrónico. Por favor contacte al administrador del sistema",
		"MAIL_TEMPLATE_BUILD_ERROR"				=> "Error al construir la plantilla de correo electrónico",
		"MAIL_TEMPLATE_DIRECTORY_ERROR"			=> "No se puede abrir el directorio de plantillas de correo electrónico. Intente colocar el directorio en  %m1%",
		"MAIL_TEMPLATE_FILE_EMPTY"				=> "La plantilla está vacía... No hay nada que enviar",
		"FEATURE_DISABLED"						=> "Esta funcionalidad está deshabilitada",
		"SIGN_UP"								=> "Registrarse",
		"USERNAME"								=> "Nombre de usuario",
		"PASSWORD"								=> "Contraseña",
		"NEW_PASSWORD"							=> "Contraseña nueva",
		"CONFIRM_PASSWORD"						=> "Confirmar contraseña",
		"RESEND_ACTIVATION_EMAIL"				=> "Reenviar activación de cuenta",
		"RETYPE_PASSWORD"						=> "Introduzca su Contraseña de nuevo",
		"EMAIL"									=> "Correo electrónico",
		"LOGIN"									=> "Iniciar Sesión",
		"HOME"									=> "Inicio",
		"REMEMBER_ME"							=> "¿Recordar datos de este sitio?",
		"SIGN_IN"								=> "Iniciar Sesión",
		"RESET_PASSWORD"						=> "Reiniciar Contraseña",
		"UPDATE"								=> "Actualizar",	
		"NOT_AUTHORIZED"						=> "Usted no está autorizado para ver esta página",
		"NAME"									=> "Nombre",	
		"LASTNAME"								=> "Apellido",	
//PARA LA USB		
		"USER_TYPE"								=> "Tipo de usuario",	
		"USB_MEMBER"							=> "Miembro de la Comunidad Académica de la USB",
		"USB_MEMBER_PARENT"						=> "Referido por un miembro de la Comunidad Académica de la USB",
		"OTHER"									=> "Otro",
		"DEPARTMENT"							=> "Departamento",
	));
?>
