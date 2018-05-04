<?php

/**
 * Description of DataTable
 *
 * @author gesfor.rgonzalez
 */
class DataTable
{

   private $id		 = '';
   private $style	 = '';
   private $script = '';
   private $class	 = '';
   private $btnSelect	 = array(
      "show"=>false,
      "class"=>"",
      "style"=>"",
      "type"=>"button",
      "name"=>"",
      "image"=>"",
      "colname"=>"",
      "attrib"=>"",         
      "onclick"=>"SelectRow();",
      "param"=>0
   );
   private $btnEdit	 = array(
      "show"=>false,
      "class"=>"",
      "style"=>"",
      "type"=>"button",
      "name"=>"",
      "image"=>"",
      "colname"=>"",
      "attrib"=>"",         
      "onclick"=>"EditRow();",
      "param"=>0   
   );
   private $btnDelete	 = array(
      "show"=>false,
      "class"=>"",
      "style"=>"",
      "type"=>"button",
      "name"=>"",
      "image"=>"",
      "colname"=>"",
      "attrib"=>"",         
      "onclick"=>"DeleteRow();",
      "param"=>0
   );
   private $header	 = array();
   private $datasource	 = array();

   public function SetID($id_)
   {
      $this->id = $id_;
   }

   /**
    * Agrega estilos personalizados con clases css. Usa el ID de la tabla.
    * El ID de la tabla se agrega con la propiedad SetID('MiId');
    * @param string $style_ Cadena con las clases. 
    * Por ejemplo: " #MiTabla{ color:gray; } #MiTabla tr:hover {background-color: #f00; color:white;} ".
    * @return string
    */
   public function SetStyle($style_)
   {
      $this->style = $style_;
   }

   public function SetScript($script_)
   {
      $this->script = $script_;
   }
   
   public function SetClass($class_)
   {
      $this->class = $class_;
   }

   public function SetHeader($header_)
   {
      $this->header = $header_;
   }

   public function SetBtnSelect($btnSelect_)
   {
      if(!array_key_exists('show', $btnSelect_)) { $btnSelect_['show'] = false; }
      if(!array_key_exists('class', $btnSelect_)) { $btnSelect_['class'] = ""; }
      if(!array_key_exists('style', $btnSelect_)) { $btnSelect_['style'] = ""; }
      if(!array_key_exists('type', $btnSelect_)) { $btnSelect_['type'] = "button"; }
      if(!array_key_exists('name', $btnSelect_)) { $btnSelect_['name'] = ""; }
      if(!array_key_exists('image', $btnSelect_)) { $btnSelect_['image'] = ""; }
      if(!array_key_exists('colname', $btnSelect_)) { $btnSelect_['colname'] = ""; }
      if(!array_key_exists('attrib', $btnSelect_)) { $btnSelect_['attrib'] = ""; }
      if(!array_key_exists('onclick', $btnSelect_)) { $btnSelect_['onclick'] = "SelectRow();"; }
      if(!array_key_exists('param', $btnSelect_)) { $btnSelect_['param'] = 0; }
      
      $this->btnSelect = $btnSelect_;
   }

   public function SetBtnEdit($btnEdit_)
   {
      if(!array_key_exists('show', $btnEdit_)) { $btnEdit_['show'] = false; }
      if(!array_key_exists('class', $btnEdit_)) { $btnEdit_['class'] = ""; }
      if(!array_key_exists('style', $btnEdit_)) { $btnEdit_['style'] = ""; }
      if(!array_key_exists('type', $btnEdit_)) { $btnEdit_['type'] = "button"; }
      if(!array_key_exists('name', $btnEdit_)) { $btnEdit_['name'] = ""; }
      if(!array_key_exists('image', $btnEdit_)) { $btnEdit_['image'] = ""; }
      if(!array_key_exists('colname', $btnEdit_)) { $btnEdit_['colname'] = ""; }
      if(!array_key_exists('attrib', $btnEdit_)) { $btnEdit_['attrib'] = ""; }
      if(!array_key_exists('onclick', $btnEdit_)) { $btnEdit_['onclick'] = "EditRow();"; }
      if(!array_key_exists('param', $btnEdit_)) { $btnEdit_['param'] = 0; }
      
      $this->btnEdit = $btnEdit_;
   }

   public function SetBtnDelete($btnDelete_)
   {
      if(!array_key_exists('show', $btnDelete_)) { $btnDelete_['show'] = false; }
      if(!array_key_exists('class', $btnDelete_)) { $btnDelete_['class'] = ""; }
      if(!array_key_exists('style', $btnDelete_)) { $btnDelete_['style'] = ""; }
      if(!array_key_exists('type', $btnDelete_)) { $btnDelete_['type'] = "button"; }
      if(!array_key_exists('name', $btnDelete_)) { $btnDelete_['name'] = ""; }
      if(!array_key_exists('image', $btnDelete_)) { $btnDelete_['image'] = ""; }
      if(!array_key_exists('colname', $btnDelete_)) { $btnDelete_['colname'] = ""; }
      if(!array_key_exists('attrib', $btnDelete_)) { $btnDelete_['attrib'] = ""; }
      if(!array_key_exists('onclick', $btnDelete_)) { $btnDelete_['onclick'] = "DeleteRow();"; }
      if(!array_key_exists('param', $btnDelete_)) { $btnDelete_['param'] = 0; }
      
      $this->btnDelete = $btnDelete_;
   }

   public function SetDataSource($datasource_)
   {
      $this->datasource = $datasource_;
   }

   public function CreateDataTable()
   {
      if ($this->datasource !== null)
      {	 
         $styles = '<style type="text/css">' . $this->style . '</style>';
         $script = '<script>'. $this->script . '</script>';
         $Table = '<table id="' . $this->id . '" class="' . $this->class . '">';
         $HeadTable = $this->CreateHead();
         $BodyTable = $this->CreatBody();
         $EndTable = '</table>';
	 
         return $styles . '<br>' . $Table . $HeadTable . $BodyTable . $EndTable . '<br>' . $script;
           }
           else
           {
         $styles	 = '<style type="text/css">' . $this->style . '</style>';
         $Table		 = '<table id="' . $this->id . '" class="' . $this->class . '">';
         $HeadTable	 = '<thead><tr><td>Messege</td></tr></thead>';
         $BodyTable	 = '<tbody>';	 
         $BodyTable	.= '<tr><td>.: Connection or DataBase error :.</td></tr>';
         $BodyTable	.= '</tbody>';
         $EndTable	 = '</table>';
         return $styles . '<br>' . $Table . $HeadTable . $BodyTable . $EndTable . '<br>' . $script;
      }
   }

   private function CreateHead()
   {
      $HeadTable = '
            <thead>
                <tr>';

      $numHeader = count($this->header);
      if ($numHeader === 0)
      {
	 $getCols	 = current($this->datasource);
	 $this->header	 = array_keys(get_object_vars($getCols));
	 $numHeader	 = count($this->header);
      }
      for ($i = 0; $i < $numHeader; $i++)
      {
	 $HeadTable .= '<th>' . $this->header[$i] . '</th>';
      }
      $HeadTable	 .= $this->btnSelect['show'] === true ? '<th>' . $this->btnSelect['colname'] . '</th>' : '';
      $HeadTable	 .= $this->btnEdit['show'] === true ? '<th>' . $this->btnEdit['colname'] . '</th>' : '';
      $HeadTable	 .= $this->btnDelete['show'] === true ? '<th>' . $this->btnDelete['colname'] . '</th>' : '';
      $HeadTable	 .= '
                </tr>
            </thead>';
      
      return $HeadTable;
   }
   
   private function CreatBody()
   {
      $BodyTable = '<tbody>';
	 foreach ($this->datasource as $row)
	 {
	    $i		 = 0;
	    $BodyTable	 .= '<tr>';
	    foreach ($row as $key => $value)
	    {
	       if ($key == $this->btnSelect['param']){ $ids = $value; }
	       if ($key == $this->btnEdit['param']){ $ide = $value; }
	       if ($key == $this->btnDelete['param']){ $idd = $value; }
	       
	       $BodyTable	 .= '<td>' . $value . '</td>';
	    }
	    $BodyTable	 .= $this->btnSelect['show'] === true ? '<td>' . $this->ButtonSelect($ids) . '</td>' : '';
	    $BodyTable	 .= $this->btnEdit['show'] === true ? '<td>' . $this->ButtonEdit($ide) . '</td>' : '';
	    $BodyTable	 .= $this->btnDelete['show'] === true ? '<td>' . $this->ButtonDelete($idd) . '</td>' : '';
	    $BodyTable	 .= '</tr>';
	 }

	 $BodyTable .= '
                </tbody>';
	 return $BodyTable;
   }
   
   private function ButtonSelect($IdRow)
   {
      $class	 = $this->btnSelect['class'];
      $image	 = $this->btnSelect['image'];
      $name	 = $this->btnSelect['name'];
      $attrib	 = $this->btnSelect['attrib'];
      $style	 = $this->btnSelect['style'];
      $type	 = $this->btnSelect['type'];
      $onclick	 = $this->btnSelect['onclick'];
      $onclick = str_replace("()", "($IdRow)", $onclick);
      
      $btnSelect = <<<EOF
<button type="$type" class="$class" style="$style" $attrib onclick="$onclick">
<img src="$image">&nbsp;$name
</button>
EOF;

      return $btnSelect;
   }

   private function ButtonEdit($IdRow)
   {
      $class	 = $this->btnEdit['class'];
      $image	 = $this->btnEdit['image'];
      $name	 = $this->btnEdit['name'];
      $attrib	 = $this->btnEdit['attrib'];
      $style	 = $this->btnEdit['style'];
      $type	 = $this->btnEdit['type'];
      $onclick	 = $this->btnEdit['onclick'];      
      $onclick = str_replace("()", "($IdRow)", $onclick);	      

      $btnEdit = <<<EOF
<button type="$type" class="$class" style="$style" $attrib onclick="$onclick">
<img src="$image">&nbsp;$name
</button>
EOF;

      return $btnEdit;
   }

   private function ButtonDelete($IdRow)
   {
      $class	 = $this->btnDelete['class'];
      $image	 = $this->btnDelete['image'];
      $name	 = $this->btnDelete['name'];
      $attrib	 = $this->btnDelete['attrib'];
      $style	 = $this->btnDelete['style'];
      $type	 = $this->btnDelete['type'];
      $onclick	 = $this->btnDelete['onclick'];
      $onclick = str_replace("()", "($IdRow)", $onclick);	            
      
      $btnDelete = <<<EOF
<button type="$type" class="$class" style="$style" $attrib onclick="$onclick">
<img src="$image">&nbsp;$name
</button>
EOF;

      return $btnDelete;
   }

}
