<?php

// Se destruyen las variable de sesion y el POST
if(filter_input(INPUT_POST, 'salir') !== NULL)
{
   $_SESSION = array();
   unset($_POST['logged']);
   $_POST = array();
   
   if (ini_get("session.use_cookies")) 
   {
       $params = session_get_cookie_params();
       setcookie(session_name(), '', time() - 42000,
	   $params["path"], $params["domain"],
	   $params["secure"], $params["httponly"]);
   }   
   session_destroy();
   header("location:login");
}
   
   
if(isset($_SESSION['logged']))
{
   if($_SESSION['logged'] === true)
   {
      $_SESSION['show_header'] = true;
   }
   else
   {
      $_SESSION['show_header'] = false;
   }
}
else
{
   $_SESSION['show_header'] = false;
}

//var_dump($_SESSION);

require_once PATH_VIEW . '/home.php';
