<?php

/**
 * This is the model class for table "pais_dep_prov_dst".
 *
 * The followings are the available columns in table 'pais_dep_prov_dst':
 * @property string $dst_id
 * @property string $prov_id
 * @property string $dst_idExterno
 * @property string $descripcion
 * @property string $pordefecto
 * @property string $cli_idejecutivo
 */
class maeest_Distrito extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return maeest_Distrito the static model class
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
		return 'pais_dep_prov_dst';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prov_id, dst_idExterno, descripcion', 'required'),
			array('prov_id, cli_idejecutivo', 'length', 'max'=>10),
			array('dst_idExterno', 'length', 'max'=>50),
			array('descripcion, pordefecto', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dst_id, prov_id, dst_idExterno, descripcion, pordefecto, cli_idejecutivo', 'safe', 'on'=>'search'),
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
			'dst_id' => 'Dst',
			'prov_id' => 'Prov',
			'dst_idExterno' => 'Dst Id Externo',
			'descripcion' => 'Descripcion',
			'pordefecto' => 'Pordefecto',
			'cli_idejecutivo' => 'Cli Idejecutivo',
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

		$criteria->compare('dst_id',$this->dst_id,true);
		$criteria->compare('prov_id',$this->prov_id,true);
		$criteria->compare('dst_idExterno',$this->dst_idExterno,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('pordefecto',$this->pordefecto,true);
		$criteria->compare('cli_idejecutivo',$this->cli_idejecutivo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}