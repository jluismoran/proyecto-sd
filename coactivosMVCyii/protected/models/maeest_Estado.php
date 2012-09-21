<?php

/**
 * This is the model class for table "estado".
 *
 * The followings are the available columns in table 'estado':
 * @property string $estado_id
 * @property string $estadoTipo_id
 * @property string $descripcion
 * @property string $pordefecto
 */
class maeest_Estado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return maeest_Estado the static model class
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
		return 'estado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estadoTipo_id, descripcion', 'required'),
			array('estadoTipo_id', 'length', 'max'=>10),
			array('descripcion, pordefecto', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('estado_id, estadoTipo_id, descripcion, pordefecto', 'safe', 'on'=>'search'),
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
		'estadosTipos'=>array(self::BELONGS_TO,'maeest_EstadoTipo','estadoTipo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'estado_id' => 'Estado',
			'estadoTipo_id' => 'Estado Tipo',
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
		
		$criteria->with = 'estadosTipos';

		$criteria->compare('estado_id',$this->estado_id,true);
		$criteria->compare('estadosTipos.descripcion',$this->estadoTipo_id,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('pordefecto',$this->pordefecto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}