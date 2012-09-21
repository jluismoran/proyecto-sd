<?php

/**
 * This is the model class for table "cobranza".
 *
 * The followings are the available columns in table 'cobranza':
 * @property string $cobranza_id
 * @property string $cliente_id
 * @property string $usuario_id
 * @property string $importe
 * @property string $complemento_idMoneda
 * @property string $estado_idDeuda
 * @property string $fecha
 */
class Upload extends CModel
{
	public $excel;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return fin_Cobranza the static model class
	 */

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('excel', 'file','types'=>'xls,xlsx'),
		);
	}
	
	public function attributeNames()
	{
		return array(
			'excel' => 'Fichero Excel',
		);
	}

}