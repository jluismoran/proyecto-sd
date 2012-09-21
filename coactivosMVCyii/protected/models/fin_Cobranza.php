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
class fin_Cobranza extends CActiveRecord
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
	 * @return fin_Cobranza the static model class
	 */
	
	public $cliente_search;
	public $moneda_search;
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cobranza';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cliente_id, usuario_id, importe, complemento_idMoneda, estado_idDeuda, fecha', 'required'),
			array('cliente_id, usuario_id, complemento_idMoneda, estado_idDeuda', 'length', 'max'=>10),
			array('importe', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cobranza_id, cliente_id, usuario_id, importe, complemento_idMoneda, estado_idDeuda, fecha, cliente_search, moneda_search', 'safe', 'on'=>'search'),
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
		'cliente'=>array(self::BELONGS_TO,'maedin_Cliente','cliente_id'),
		'usuario'=>array(self::BELONGS_TO,'maeest_Usuario','usuario_id'),
		'moneda'=>array(self::BELONGS_TO,'maeest_Complemento','complemento_idMoneda'),
		'deuda'=>array(self::BELONGS_TO,'maeest_Estado','estado_idDeuda'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cobranza_id' => '#Cobranza',
			'cliente_id' => 'Ejecutado',
			'usuario_id' => 'Usuario',
			'importe' => 'Total Importe',
			'complemento_idMoneda' => 'Moneda',
			'estado_idDeuda' => 'Estado Cobranza',
			'fecha' => 'Fecha',
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
		
		$criteria->with = array('cliente','moneda','usuario','deuda');
		$criteria->compare('cliente.descripcion1', $this->cliente_search, true );
		$criteria->compare('cobranza_id',$this->cobranza_id,true);
		$criteria->compare('cliente.descripcion1',$this->cliente->descripcion1,true);
        $criteria->compare('usuario.username',$this->usuario_id,true);
		$criteria->compare('importe',$this->importe,true);
		$criteria->compare('moneda.descripcion',$this->moneda_search,true);
		$criteria->compare('deuda.descripcion',$this->estado_idDeuda,true);
		$criteria->compare('fecha',$this->fecha,true);
		
		$sort=new CSort();
        $sort->defaultOrder='cobranza_id DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort,
		));
	}
}