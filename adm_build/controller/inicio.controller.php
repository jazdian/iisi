<?php

if(isset($_SESSION['logged']))
{
   if($_SESSION['logged'] === true)
   {
      require_once PATH_VIEW . '/sistema/inicio.php';
   }
   else
   {
      header("location:login");
      //require_once PATH_CLLER . '/login.controller.php';      
   }
}
   


