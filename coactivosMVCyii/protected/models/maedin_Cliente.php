<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property string $cliente_id
 * @property string $cliente_idExterno
 * @property string $descripcion1
 * @property string $descripcion2
 * @property string $nro_identificacion
 * @property string $dst_id
 * @property string $direccion
 * @property string $estado_idDeuda
 * @property string $saldo
 * @property string $complemento_idMoneda
 * @property string $fecha_saldo
 */
class maedin_Cliente extends CActiveRecord
{
    public function behaviors()
	{
	    return array(
		    'GPuntos'=>array(
		       'class'=>'ext.puntos.GPuntos',
			   'campos'=>'saldo',
			   'separador'=>',',
			),
		);
	}
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return maedin_Cliente the static model class
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
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estado_idDeuda, cliente_idExterno, descripcion1, dst_id, direccion', 'required'),
			array('cliente_idExterno', 'unique', 'attributeName'=>'cliente_idExterno','className'=>'maedin_Cliente','allowEmpty'=>false),
			array('cliente_idExterno', 'length', 'max'=>50, 'min'=>3),
			array('descripcion1, descripcion2', 'length', 'max'=>200),
			array('nro_identificacion', 'numerical', 'integerOnly'=>true),
			array('dst_id, estado_idDeuda, complemento_idMoneda', 'length', 'max'=>10),
			array('direccion', 'length', 'max'=>200),
			//array('saldo', 'numerical'),
			array('fecha_saldo', 'safe'),
			// The following rule is used by search().
			//'integerOnly'=>true,
			//'length',
			//,'tooBig'=>'es muy grande.','tooSmall'=>'es muy peque.' 
			// Please remove those attributes that should not be searched.
			array('cliente_id, cliente_idExterno, descripcion1, descripcion2, nro_identificacion, dst_id, direccion, estado_idDeuda, saldo, complemento_idMoneda, fecha_saldo', 'safe', 'on'=>'search'),
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
		'estado_cliente'=>array(self::BELONGS_TO,'maeest_Estado','estado_idDeuda'),
		'distrito'=>array(self::BELONGS_TO,'maeest_Distrito','dst_id'),
		'moneda'=>array(self::BELONGS_TO,'maeest_Complemento','complemento_idMoneda'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cliente_id' => '#Cliente',
			'cliente_idExterno' => 'Codigo del Ejecutado',
			'descripcion1' => 'Nombres / Razon Social ',
			'descripcion2' => 'Apellidos',
			'nro_identificacion' => 'Nro. de Identificacion',
			'dst_id' => 'Distrito',
			'direccion' => 'Direccion',
			'estado_idDeuda' => 'Estado',
			'saldo' => 'Saldo',
			'complemento_idMoneda' => 'Moneda',
			'fecha_saldo' => 'Fecha de Saldo',
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
		
		$criteria->with = 'estado_cliente';
		$criteria->with = 'distrito';
		$criteria->with = 'moneda';

		$criteria->compare('cliente_id',$this->cliente_id,true);
		$criteria->compare('cliente_idExterno',$this->cliente_idExterno,true);
		$criteria->compare('descripcion1',$this->descripcion1,true);
		$criteria->compare('descripcion2',$this->descripcion2,true);
		$criteria->compare('nro_identificacion',$this->nro_identificacion,true);
		$criteria->compare('distrito.descripcion',$this->dst_id,true);
		$criteria->compare('direccion',$this->direccion,true);		
		$criteria->compare('estado_cliente.descripcion',$this->estado_idDeuda,true);	
		$criteria->compare('saldo',$this->saldo,true);
		$criteria->compare('moneda.descripcion',$this->complemento_idMoneda,true);
		$criteria->compare('fecha_saldo',$this->fecha_saldo,true);
		
		$sort=new CSort();
        $sort->defaultOrder='cliente_id DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort,
		));
	}
}