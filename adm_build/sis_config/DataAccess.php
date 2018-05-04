<?php

/**
 * Description of classExecMysql
 *
 * @author gesfor.rgonzalez
 */
class DataAccess
{
    private $respConn = null;
    private $jsonparameters = null;
    
 /**
  * 
  * @param type object PDO connection. The control Conecction.php return a object with the object connection.
  *	 $obj_cn = new Connection('localhost', 'mydatabase', 'root', '');
  *	 $conn = $obj_cn->SimpleConnectionPDO(); 
  *	 $qry = new DataAccess();
  *	 $qry->SetConn($conn['obj_']); 
  */
    
    public function SetConn($respConn_)
    {
        $this->respConn = $respConn_;
    }
    public function SetJsonParams ($jsonparameters_)
    {
        $this->jsonparameters = $jsonparameters_;
    }

    public function ExecStoredProcedure()
    {
	 $pars = $this->ValidateParams();
	 if($pars['est_'] === false ){
	    return $pars;
	 }
	 foreach ($this->jsonparameters as $key => $value){
	     if ($key === 'params')
	     { $ArrayParams = $value; }
	     else if ($key === 'vars')
	     { $ArrayVar = $value; }
	 }
        $StrQry = $ArrayVar->QueryString;        
        try{

	    $DatsJson = $this->ExecuteQry($ArrayParams, $StrQry);
	    return $DatsJson;

        } catch (Exception $Ex) {
	   
	    $DatsJson = $this->MsgErrException($Ex);
	    return $DatsJson;
        }
    }
    
    private function ValidateParams()
    {
	 $json_valid = $this->jsonparameters;
	 if(is_null($json_valid))
	 {
            $values = array(
               'est_' => false
               , 'obj_' => array(0=>(object)array('id' => 1, 'code' => 0, 'messege' => 'Error in json string...'))
               , 'msg_' => 'Error in json string. Something is wrong en json string, please validate...'
               , 'num_' => 0
               , 'det_' => "Error in json string. Something is wrong en json string, please validate..."
            );
            return $values;	    
	 }
	 else
	 {
            $values = array(
               'est_' => true
               , 'obj_' => array(0=>(object)array('id' => 1, 'code' => 1, 'messege' => 'Valid json string'))
               , 'msg_' => 'Parameters ok. Valid json string...'
               , 'num_' => 1
               , 'det_' => "Success parameters!"
            );
            return $values; 
	 }	
    }
    
    private function ExecuteQry($ArrayParams, $StrSP)
    {
       $Statement = $this->respConn->prepare($StrSP);
       $i = 1;
       foreach ($ArrayParams as $value)
       {
	   $Statement->bindValue($i, $value, PDO::PARAM_STR);
	   $i++;
       }
       $result = $Statement->execute();
       if ($result === true)
       {
	   $Table   = $Statement->fetchAll(\PDO::FETCH_OBJ);
	   $NumRows = $Statement->rowCount();
	   if($NumRows === 0)
	   {   
	      $Table = array(0=>(object)array('id' => 1, 'code' => 0, 'messege' => 'Not found rows to execute query...'));
	   }
	   $values = array('est_' => true
			   , 'obj_' => $Table
			   , 'msg_' => 'Success'
			   , 'num_' => $NumRows
			   , 'det_' => "Stored Procedure is ok.");
	    $DatsJson = $values;
	    return $DatsJson;                
       }
       else
       {
	   $values = array('est_' => false
			   , 'obj_' => $result
			   , 'msg_' => 'Error'
			   , 'num_' => 0
			   , 'det_' => "Stored Procedure width errors.");
	    $DatsJson = $values;
	    return $DatsJson;                          
       }       
    }
    
    private function MsgErrException($Ex)
    {
      $values = array(
	 'est_' => false
	 , 'obj_' => array(0=>(object)array('id' => 1, 'code' => $Ex->getCode(), 'messege' => $Ex->getMessage()))
	 , 'msg_' => $Ex->getMessage()
	 , 'num_' => (int) $Ex->getCode()
	 , 'det_' => $Ex->getFile() . " | Line: " . $Ex->getLine()
      );
      $DatsJson = $values;
      return $DatsJson;          
    }
    
}
