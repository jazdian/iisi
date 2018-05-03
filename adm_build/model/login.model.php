<?php

class LoginModel
{

   function __construct()
   {
      
   }
   
   function RecuperaCredenciales()
   {
      //$ObjDat = array(0=>(object)array('id' => 1, 'user' => 'jazdian', 'password' => '123'),
      //                1=>(object)array('id' => 2, 'user' => 'bopa', 'password' => '123'));
      
      $ObjDat = array(
         'est_' => true
         , 'obj_' => array(0=>(object)array('id' => 1, 'user' => 'jazdian', 'password' => '123'))
         , 'msg_' => 'Usuario encontrado...'
         , 'num_' => 1
         , 'det_' => "Success in Query!"
      );
            
      
      return $ObjDat;
   }

}

