<?php

/**
 * Description of ListBox
 *
 * @author gesfor.rgonzalez
 */
class ListBox
{
    //Propiedades
    
    private $id = '';
    private $name = '';      
    private $style = '';
    private $class = '';
    private $datavaluefield = '';
    private $datatextfield = '';
    private $datasource = array();
    private $selected = false;
    private $valselected = '0';
    private $onblur = '';
    private $onchange = '';    
    private $onfocus = '';    
    private $onselect = '';
    private $onclick = '';    
    private $onsubmit = '';
    private $disabled = false;
    
    public function SetID($id_)
    {
        $this->id = $id_;
    }
    public function SetName($name_)
    {
        $this->name = $name_;
    }     
    public function SetStyle($style_)
    {
        $this->style = $style_;
    }
    public function SetClass($class_)
    {
        $this->class = $class_;
    }
    public function SetDataValueField($valsource_)
    {
        $this->datavaluefield = $valsource_;
    }
    public function SetDataTextField($textsource_)
    {
        $this->datatextfield = $textsource_;
    }
    public function SetDataSource($arraysource_)
    {
        $this->datasource = $arraysource_;
    }
    public function SetSelected($selected_)
    {
        $this->selected = $selected_;
    }
    public function SetValSelected($valselected_)
    {
        $this->valselected = $valselected_;
    }
    public function SetOnBlur($onblur_)
    {
        $this->onblur = $onblur_;
    }
    public function SetOnChange($onchange_)
    {
        $this->onchange = $onchange_;
    } 
    public function SetOnFocus($onfocus_)
    {
        $this->onfocus = $onfocus_;
    } 
    public function SetOnSelect($onselect_)
    {
        $this->onselect = $onselect_;
    } 
    public function SetOnClick($onclick_)
    {
        $this->onclick = $onclick_;
    }
    public function SetOnSubmit($onsubmit_)
    {
        $this->onsubmit = $onsubmit_;
    }
    public function SetDisabled($disabled_)
    {
        $this->disabled = $disabled_;
    }    
    
    public function CreateListBox()
    {
        $disabled = '';
        if($this->disabled === true) { $disabled = 'disabled'; }
	
        $IniSelect = '<select multiple id="'.$this->id.'" class="'.$this->class.'" style="'.$this->style.'" name="'.$this->name.'" '
                . ''.$this->StringFunctionsJavaScript().' '.$disabled.'>';
        
        $Options = '';
        $valfield = $this->datavaluefield;
        $textfield = $this->datatextfield;

        if($this->datasource !== null)
        {        
            foreach ($this->datasource as $key => $value)
            {
                if($this->valselected == $value->$valfield)
                {
                    $Options = $Options . '<option selected value="' . $value->$valfield . '">' . $value->$textfield . '</option>';                    
                }
                else
                {
                    $Options = $Options . '<option value="' . $value->$valfield . '">' . $value->$textfield . '</option>';                    
                }
            }

            $FinSelect = '</select>';
            return $IniSelect . $Options . $FinSelect;
        }else
        {
            $Options = '<option selected value="0">.: Connection or DataBase error :.</option>';
            $FinSelect = '</select>';
            return $IniSelect . $Options . $FinSelect; 
        }

        
    }
    
    private function StringFunctionsJavaScript()
    {
        $eventosscript = '';
        
        if ($this->onblur !== '') { $eventosscript .= 'onblur="'.$this->onblur.'"'; }
        if ($this->onchange !== '') { $eventosscript .= 'onchange="'.$this->onchange.'"'; }
        if ($this->onfocus !== '') { $eventosscript .= 'onfocus="'.$this->onfocus.'"'; }
        if ($this->onselect !== '') { $eventosscript .= 'onselect="'.$this->onselect.'"'; }
        if ($this->onclick !== '') { $eventosscript .= 'onclick="'.$this->onclick.'"'; }
        if ($this->onsubmit !== '') { $eventosscript .= 'onsubmit="'.$this->onsubmit.'"'; }
        
        return $eventosscript;
    }
    
}
