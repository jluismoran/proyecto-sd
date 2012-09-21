<?php

/**
 * This is the model class for table "deuda".
 *
 * The followings are the available columns in table 'deuda':
 * @property string $deuda_id
 * @property string $cliente_id
 * @property string $complemento_idDocumento
 * @property string $nro_expediente
 * @property string $periodo
 * @property string $nro_referencia
 * @property string $importe
 * @property string $complemento_idMoneda
 * @property string $fecha_emision
 * @property string $fecha_vencimiento
 * @property string $estado_idDeuda
 * @property string $estado_idDocumento
 * @property string $usuario_id
 */
class ven_Deuda extends CActiveRecord
{
    public function behaviors()
	{
	    return array(
		    'GPuntos'=>array(
		       'class'=>'ext.puntos.GPuntos',
			   'campos'=>'importe,saldo',
			   'separador'=>',',
			),
		);
	}
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ven_Deuda the static model class
	 */	
	//public $clientecompleto_search;
	public $fullname;
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'deuda'; //" deuda" es el nombre de la tabla
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cliente_id, complemento_idDocumento, complemento_idMateria, importe, saldo, fecha_emision estado_idDeuda, estado_idDocumento', 'required'),
			array('complemento_idDocumento, complemento_idMoneda, complemento_idMateria, estado_idDeuda, estado_idDocumento, usuario_id', 'length', 'max'=>10),
			array('nro_expediente, periodo, nro_referencia', 'length', 'max'=>50),
			//array('importe','validarImporte'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('deuda_id, cliente_id, complemento_idDocumento, complemento_idMateria, nro_expediente, periodo, nro_referencia, importe
					, saldo, complemento_idMoneda, fecha_emision, estado_idDeuda, estado_idDocumento
					, usuario_id, fullname', 'safe', 'on'=>'search'),
		);
	}
	
	public function validarImporte($attribute,$params)
	{
	      if($this->importe==0)
		     $this->addError('importe','Importe no puede tener valor 0');
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		'cliente'			  =>array(self::BELONGS_TO,'maedin_Cliente','cliente_id'),
		'complementoDocumento'=>array(self::BELONGS_TO,'maeest_Complemento','complemento_idDocumento'),
		'complementoMoneda'   =>array(self::BELONGS_TO,'maeest_Complemento','complemento_idMoneda'),
		'complementoMateria'  =>array(self::BELONGS_TO,'maeest_Complemento','complemento_idMateria'),
		'estadoDeuda'         =>array(self::BELONGS_TO,'maeest_Estado','estado_idDeuda'),
		'estadoDocumento'     =>array(self::BELONGS_TO,'maeest_Estado','estado_idDocumento'),
		'usuario'             =>array(self::BELONGS_TO,'maeest_Usuario','usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'deuda_id' => '#Documento',
			'cliente_id' => 'Ejecutado',
			'complemento_idDocumento' => 'Tipo',
			'complemento_idMateria' => 'Materia',
			'nro_expediente' => 'Nro. Expediente',
			'periodo' => 'Periodo',
			'nro_referencia' => 'Nro. Referencia',
			'importe' => 'Importe',
			'saldo' => 'Saldo',
			'complemento_idMoneda' => 'Moneda',
			'fecha_emision' => 'Fecha de Emision',
			//'fecha_vencimiento' => 'Fecha de Vencimiento',
			'estado_idDeuda' => 'Deuda',
			'estado_idDocumento' => 'Estado',
			'usuario_id' => 'Usuario',
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
		
        $criteria->with = 'cliente';
		$criteria->with = 'complementoDocumento';
		$criteria->with = 'complementoMoneda';
		$criteria->with = 'estadoDeuda';
		$criteria->with = 'estadoDocumento';
		$criteria->with = 'usuario';
		$criteria->with = 'complementoMateria';

		$criteria->compare('deuda_id',$this->deuda_id,true);

		$criteria->addSearchCondition('CONCAT(cliente.descripcion1)',$this->cliente_id, true);
		
		$criteria->compare('complementoDocumento.descripcion',$this->complemento_idDocumento,true);
		$criteria->compare('complementoMateria.descripcion',$this->complemento_idMateria,true);
		$criteria->compare('nro_expediente',$this->nro_expediente,true);
		$criteria->compare('periodo',$this->periodo,true);
		$criteria->compare('nro_referencia',$this->nro_referencia,true);
		$criteria->compare('importe',$this->importe,true);
		$criteria->compare('saldo',$this->saldo,true);
		$criteria->compare('complementoMoneda.descripcion',$this->complemento_idMoneda,true);
		$criteria->compare('fecha_emision',$this->fecha_emision,true);
		//$criteria->compare('fecha_vencimiento',$this->fecha_vencimiento,true);
		$criteria->compare('estadoDeuda.descripcion',$this->estado_idDeuda,true);
		$criteria->compare('estadoDocumento.descripcion',$this->estado_idDocumento,true);
		$criteria->compare('usuario.username',$this->usuario_id,true);

        $sort=new CSort();
        $sort->defaultOrder='deuda_id DESC';
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort,
		));
	}
	
}