<?php

/**
 * This is the model class for table "cobranza_deuda".
 *
 * The followings are the available columns in table 'cobranza_deuda':
 * @property string $cobranzaDeuda_id
 * @property string $cobranza_id
 * @property string $deuda_id
 * @property string $importe
 */
class fin_Cobranza_deuda extends CActiveRecord
{
    public function behaviors()
	{
	    return array(
		    'GPuntos'=>array(
		       'class'=>'ext.puntos.GPuntos',
			   'campos'=>'importe',
			   'separador'=>',',
			),
		);
	}
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return fin_Cobranza_deuda the static model class
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
		return 'cobranza_deuda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cobranza_id, deuda_id', 'required'),
			array('cobranza_id, deuda_id', 'length', 'max'=>10),
			array('importe', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cobranzaDeuda_id, cobranza_id, deuda_id, importe', 'safe', 'on'=>'search'),
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
			'deuda'=>array(self::BELONGS_TO,'ven_Deuda','deuda_id'),
			'cobranza'=>array(self::BELONGS_TO,'fin_Cobranza','cobranza_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cobranzaDeuda_id' => 'Cobranza Deuda',
			'cobranza_id' => 'Cobranza',
			'deuda_id' => 'Deuda',
			'importe' => 'Importe',
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

		$criteria->compare('cobranzaDeuda_id',$this->cobranzaDeuda_id,true);
		$criteria->compare('cobranza_id',$this->cobranza_id,true);
		$criteria->compare('deuda_id',$this->deuda_id,true);
		$criteria->compare('importe',$this->importe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}