<?php

/**
 * This is the model class for table "complemento".
 *
 * The followings are the available columns in table 'complemento':
 * @property string $complemento_id
 * @property string $complementoTipo_id
 * @property string $descripcion
 * @property string $pordefecto
 */
class maeest_Complemento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return maeest_Complemento the static model class
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
		return 'complemento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('complementoTipo_id, descripcion', 'required'),
			array('complementoTipo_id', 'length', 'max'=>10),
			array('descripcion, pordefecto', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('complemento_id, complementoTipo_id, descripcion, pordefecto, plantilla_id', 'safe', 'on'=>'search'),
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
		'complementosTipos'=>array(self::BELONGS_TO,'maeest_Complemento_tipo','complementoTipo_id'),
		'plantilla'        =>array(self::BELONGS_TO,'maeest_Plantilla','plantilla_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'complemento_id' => 'Complemento',
			'complementoTipo_id' => 'Complemento Tipo',
			'descripcion' => 'Descripcion',
			'pordefecto' => 'Pordefecto',
			'plantilla_id'=> 'Plantilla',
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
		
		$criteria->with = 'complementosTipos';

		$criteria->compare('complemento_id',$this->complemento_id,true);
		$criteria->compare('complementosTipos.descripcion',$this->complementoTipo_id,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('pordefecto',$this->pordefecto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}