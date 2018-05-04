<?php

   require_once PATH_MODEL . '/mantenimiento.model.php';
   require_once PATH_CLAS . '/DataTable.php';
   
   /**
    * Description of mantenimiento
    *
    * @author gesfor.rgonzalez
    */
   class MantenimientoController
   {
      
      function __construct()
      {
         
      }

      function RecuperaEdificios()
      {
         $edif = new MantenimientoModel();
         $dats_edif = $edif->RecuperaEdificios();
         return $dats_edif['obj_'];
      }
      
      function CrearTablaEdificios()
      {
         $dt = new DataTable();
         $dt->SetDataSource($this->RecuperaEdificios());
         $dt->SetID("tabla_edificios");
         return $dt->CreateDataTable();
      }
      
      
   }

   
// SE RECUPERAN LOS DATOS SOLICITADOS POR POST =================================

   if (isset($_POST['un_post']))
   {


   }

// =============================================================================   

$mc = new MantenimientoController();
$dte = $mc->CrearTablaEdificios();

require_once PATH_VIEW . '/sistema/matenimientos.php';
