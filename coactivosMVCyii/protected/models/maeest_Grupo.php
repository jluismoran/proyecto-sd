<?php

/**
 * This is the model class for table "grupo".
 *
 * The followings are the available columns in table 'grupo':
 * @property string $grupo_id
 * @property string $estado_idGrupo
 * @property string $descripcion
 * @property string $pordefecto
 */
class maeest_Grupo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return maeest_Grupo the static model class
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
		return 'grupo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estado_idGrupo, descripcion', 'required'),
			array('estado_idGrupo', 'length', 'max'=>10),
			array('descripcion, pordefecto', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('grupo_id, estado_idGrupo, descripcion, pordefecto', 'safe', 'on'=>'search'),
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
		'estado_grupo'=>array(self::BELONGS_TO,'maeest_Estado','estado_idGrupo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'grupo_id' => 'Grupo',
			'estado_idGrupo' => 'Estado',
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
		
		$criteria->with = 'estado_grupo';

		$criteria->compare('grupo_id',$this->grupo_id,true);
		$criteria->compare('estado_grupo.descripcion',$this->estado_idGrupo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('pordefecto',$this->pordefecto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}