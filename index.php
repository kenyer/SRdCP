<?php

	/*
		UserPie Version: 1.0 Updated by: Kenyer Domínguez
		http://userpie.com
		

	*/

require_once("models/config.php");

if(!isUserLoggedIn())
{ 
 include('landing-page.php'); 
	
 } else { 
	 if (isUserAdmin())
		header("Location: admin-page.php"); 	 
	else
		header("Location: userpage.php"); 	 

} ?>
