<?php

if(isset($_SESSION['logged']))
{
   if($_SESSION['logged'] === true)
   {
      require_once PATH_VIEW . '/sistema/inicio.php';
   }
   else
   {
      header("location:" . PATH_FOLD . "/login");
      exit;
   }
}
else
{
   header("location:" . PATH_FOLD . "/login");
   exit;   
}
   


