<?php

   require_once PATH_MODEL . '/login.model.php';

   if (!isset($_SESSION['logged']))
   {
      $_SESSION['firs_time'] = true;
   }

   class LoginController
   {

      function __construct()
      {
         
      }

      function RecuperaCredenciales($user, $passw)
      {
         $cred = new LoginModel();

         $DatCred = $cred->RecuperaCredenciales($user, $passw);

         return $DatCred;
      }

   }

// SE RECUPERAN LOS DATOS SOLICITADOS POR POST =================================

   if (isset($_POST['user']) && isset($_POST['passw']))
   {

      $cred     = new LoginController();
      $dat_cred = $cred->RecuperaCredenciales($_POST['user'], $_POST['passw']);

      if ($dat_cred['num_'] > 0 && $dat_cred['est_'] === true)
      {
         $_SESSION['logged']    = true;
         $_SESSION['firs_time'] = false;
         header('Location: ' . PATH_FOLD . '/inicio');
         exit;
      }
      else
      {
         $_SESSION['logged']    = false;
         $_SESSION['firs_time'] = false;
      }
   }

// =============================================================================

   require_once PATH_VIEW . '/sistema/login.php';

   