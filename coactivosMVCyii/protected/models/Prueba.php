<?php

/**
 * This is the model class for table "prueba".
 *
 * The followings are the available columns in table 'prueba':
 * @property integer $id
 * @property integer $descripcion
 */
class Prueba extends CModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prueba the static model class
	 */
	
	public $image;
	


	/**
	 * @return string the associated database table name
	 */


	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('image', 'file', 'types'=>'xls,xlsx'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descripcion', 'safe', 'on'=>'search'),
		);
	}


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeNames()
	{
		return array(
			'id' => 'ID',
			'descripcion' => 'Descripcion',
			'image' => 'Fichero Excel',
		);
	}

}