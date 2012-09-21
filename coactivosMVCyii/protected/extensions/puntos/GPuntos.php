<?php
class GPuntos extends CActiveRecordBehavior
{
    public $campos; //string de campos separados por comas a los cuales se desea aplicar el formato
	public $separador = ','; //separador de miles
	
	public function beforeSave($event)
	{
	    $campos = explode(',',$this->campos);
		foreach($campos as $campo){
		   if(isset($this->getOwner()->{trim($campo)}))
		       $this->getOwner()->{trim($campo)} = str_replace($this->separador,'',$this->getOwner()->{trim($campo)});   
		}
	}
	
	/*public function afterFind($event)
	{
	    $separador_dec = '.';//($this->separador != ',')? ',' : '.';
		$campos = explode(',',$this->campos);
		foreach($campos as $campo)
		   $this->getOwner()->{trim($campo)} = number_format($this->getOwner()->{trim($campo)},2,$separador_dec,$this->separador);
		   return true;
	}*/
}