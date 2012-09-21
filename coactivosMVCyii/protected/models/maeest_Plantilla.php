<?php

/**
 * This is the model class for table "plantilla".
 *
 * The followings are the available columns in table 'plantilla':
 * @property string $plantilla_id
 * @property string $nombre
 * @property string $descripcion
 * @property string $campo0
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $campo5
 * @property string $campo6
 * @property string $campo7
 * @property string $campo8
 * @property string $campo9
 * @property string $campo10
 * @property string $campo11
 * @property string $campo12
 * @property string $campo13
 * @property string $campo14
 * @property string $campo15
 * @property string $campo16
 * @property string $campo17
 * @property string $campo18
 * @property string $campo19
 * @property string $campo20
 * @property string $campo21
 * @property string $campo22
 * @property string $campo23
 * @property string $campo24
 * @property string $campo25
 * @property string $campo26
 * @property string $campo27
 * @property string $campo28
 * @property string $campo29
 * @property string $campo30
 * @property string $campo31
 * @property string $campo32
 * @property string $campo33
 * @property string $campo34
 * @property string $campo35
 * @property string $campo36
 * @property string $campo37
 * @property string $campo38
 * @property string $campo39
 * @property string $campo40
 * @property string $campo41
 * @property string $campo42
 * @property string $campo43
 */
class maeest_Plantilla extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return maeest_Plantilla the static model class
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
		return 'plantilla';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('nombre, descripcion, campo0, campo1, campo2, campo3, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, campo13, campo14, campo15, campo16, campo17, campo18, campo19, campo20, campo21, campo22, campo23, campo24, campo25, campo26, campo27, campo28, campo29, campo30, campo31, campo32, campo33, campo34, campo35, campo36, campo37, campo38, campo39, campo40, campo41, campo42, campo43', 'required'),
			array('nombre, descripcion, campo0, campo1, campo2, campo3, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, campo13, campo14, campo15, campo16, campo17, campo19, campo20, campo21, campo23, campo24, campo25, campo26, campo27, campo29, campo30, campo31, campo32, campo33, campo34, campo35, campo36, campo37, campo38, campo39, campo40, campo41, campo42, campo43', 'length', 'max'=>255),
			array('campo18, campo22, campo28', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('plantilla_id, nombre, descripcion, campo0, campo1, campo2, campo3, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, campo13, campo14, campo15, campo16, campo17, campo18, campo19, campo20, campo21, campo22, campo23, campo24, campo25, campo26, campo27, campo28, campo29, campo30, campo31, campo32, campo33, campo34, campo35, campo36, campo37, campo38, campo39, campo40, campo41, campo42, campo43', 'safe', 'on'=>'search'),
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
			'plantilla_id' => 'Plantilla',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'campo0' => 'Campo0',
			'campo1' => 'Campo1',
			'campo2' => 'Campo2',
			'campo3' => 'Campo3',
			'campo4' => 'Campo4',
			'campo5' => 'Campo5',
			'campo6' => 'Campo6',
			'campo7' => 'Campo7',
			'campo8' => 'Campo8',
			'campo9' => 'Campo9',
			'campo10' => 'Campo10',
			'campo11' => 'Campo11',
			'campo12' => 'Campo12',
			'campo13' => 'Campo13',
			'campo14' => 'Campo14',
			'campo15' => 'Campo15',
			'campo16' => 'Campo16',
			'campo17' => 'Campo17',
			'campo18' => 'Campo18',
			'campo19' => 'Campo19',
			'campo20' => 'Campo20',
			'campo21' => 'Campo21',
			'campo22' => 'Campo22',
			'campo23' => 'Campo23',
			'campo24' => 'Campo24',
			'campo25' => 'Campo25',
			'campo26' => 'Campo26',
			'campo27' => 'Campo27',
			'campo28' => 'Campo28',
			'campo29' => 'Campo29',
			'campo30' => 'Campo30',
			'campo31' => 'Campo31',
			'campo32' => 'Campo32',
			'campo33' => 'Campo33',
			'campo34' => 'Campo34',
			'campo35' => 'Campo35',
			'campo36' => 'Campo36',
			'campo37' => 'Campo37',
			'campo38' => 'Campo38',
			'campo39' => 'Campo39',
			'campo40' => 'Campo40',
			'campo41' => 'Campo41',
			'campo42' => 'Campo42',
			'campo43' => 'Campo43',
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

		$criteria->compare('plantilla_id',$this->plantilla_id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('campo0',$this->campo0,true);
		$criteria->compare('campo1',$this->campo1,true);
		$criteria->compare('campo2',$this->campo2,true);
		$criteria->compare('campo3',$this->campo3,true);
		$criteria->compare('campo4',$this->campo4,true);
		$criteria->compare('campo5',$this->campo5,true);
		$criteria->compare('campo6',$this->campo6,true);
		$criteria->compare('campo7',$this->campo7,true);
		$criteria->compare('campo8',$this->campo8,true);
		$criteria->compare('campo9',$this->campo9,true);
		$criteria->compare('campo10',$this->campo10,true);
		$criteria->compare('campo11',$this->campo11,true);
		$criteria->compare('campo12',$this->campo12,true);
		$criteria->compare('campo13',$this->campo13,true);
		$criteria->compare('campo14',$this->campo14,true);
		$criteria->compare('campo15',$this->campo15,true);
		$criteria->compare('campo16',$this->campo16,true);
		$criteria->compare('campo17',$this->campo17,true);
		$criteria->compare('campo18',$this->campo18,true);
		$criteria->compare('campo19',$this->campo19,true);
		$criteria->compare('campo20',$this->campo20,true);
		$criteria->compare('campo21',$this->campo21,true);
		$criteria->compare('campo22',$this->campo22,true);
		$criteria->compare('campo23',$this->campo23,true);
		$criteria->compare('campo24',$this->campo24,true);
		$criteria->compare('campo25',$this->campo25,true);
		$criteria->compare('campo26',$this->campo26,true);
		$criteria->compare('campo27',$this->campo27,true);
		$criteria->compare('campo28',$this->campo28,true);
		$criteria->compare('campo29',$this->campo29,true);
		$criteria->compare('campo30',$this->campo30,true);
		$criteria->compare('campo31',$this->campo31,true);
		$criteria->compare('campo32',$this->campo32,true);
		$criteria->compare('campo33',$this->campo33,true);
		$criteria->compare('campo34',$this->campo34,true);
		$criteria->compare('campo35',$this->campo35,true);
		$criteria->compare('campo36',$this->campo36,true);
		$criteria->compare('campo37',$this->campo37,true);
		$criteria->compare('campo38',$this->campo38,true);
		$criteria->compare('campo39',$this->campo39,true);
		$criteria->compare('campo40',$this->campo40,true);
		$criteria->compare('campo41',$this->campo41,true);
		$criteria->compare('campo42',$this->campo42,true);
		$criteria->compare('campo43',$this->campo43,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}