<?php

/**
 * This is the model class for table "pais".
 *
 * The followings are the available columns in table 'pais':
 * @property string $pais_id
 * @property string $pais_idExterno
 * @property string $descripcion
 * @property string $pordefecto
 */
class maeest_Pais extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return maeest_Pais the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pais';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pais_idExterno, descripcion', 'required'),
			array('pais_idExterno', 'length', 'max'=>50),
			array('descripcion, pordefecto', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pais_id, pais_idExterno, descripcion, pordefecto', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pais_id' => 'Pais',
			'pais_idExterno' => 'Pais Id Externo',
			'descripcion' => 'Descripcion',
			'pordefecto' => 'Pordefecto',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('pais_id',$this->pais_id,true);
		$criteria->compare('pais_idExterno',$this->pais_idExterno,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('pordefecto',$this->pordefecto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}