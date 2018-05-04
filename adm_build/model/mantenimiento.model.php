<?php

   /**
    * Description of mantenimiento
    *
    * @author gesfor.rgonzalez
    */
   class MantenimientoModel
   {

      function __construct()
      {
         
      }

      function RecuperaEdificios()
      {
         $Dats = array(
            0 => (object) array('id' => 1, 'edificio' => 'Edificio Torre Mayor', 'direccion' => 'Reforma 544'),
            1 => (object) array('id' => 2, 'edificio' => 'Edificio Bancomer', 'direccion' => 'Reforma 200'),
            1 => (object) array('id' => 3, 'edificio' => 'Edificio Torre de Luz', 'direccion' => 'Chapultepec 100'),
            1 => (object) array('id' => 4, 'edificio' => 'Edificio Infierno en la torre', 'direccion' => 'Tlalpan 14'),
            1 => (object) array('id' => 5, 'edificio' => 'Edificio Slim Center', 'direccion' => 'Insurgentes 1200')
         );

         $ObjDat = array(
            'est_' => true
            , 'obj_' => $Dats
            , 'msg_' => 'Usuario encontrado...'
            , 'num_' => 1
            , 'det_' => "Success in Query!"
         );


         return $ObjDat;
      }

   }
   