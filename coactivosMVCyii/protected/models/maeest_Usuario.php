<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $usuario_id
 * @property string $estado_idUsuario
 * @property string $cliente_id
 * @property string $grupo_id
 * @property string $username
 * @property string $password
 * @property string $actualizacion
 * @property string $usuario_idActualizacion
 * @property string $usuario_actualizacion
 */
class maeest_Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return maeest_Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, estado_idUsuario, password, cliente_id, grupo_id', 'required'),
			//session,
			
			array('username', 'unique', 'attributeName'=>'username','className'=>'maeest_Usuario','allowEmpty'=>false),
			array('estado_idUsuario, cliente_id, grupo_id, usuario_idActualizacion', 'length', 'max'=>10),
			array('username, password', 'length', 'max'=>50),
			array('actualizacion, usuario_actualizacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('usuario_id, estado_idUsuario, cliente_id, grupo_id, username, password, actualizacion, usuario_idActualizacion, usuario_actualizacion', 'safe', 'on'=>'search'),
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
		'estado_usuario' =>array(self::BELONGS_TO,'maeest_Estado','estado_idUsuario'),
		'grupo'          =>array(self::BELONGS_TO,'maeest_Grupo','grupo_id'),
		'cliente'		 =>array(self::BELONGS_TO,'maedin_Cliente','cliente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usuario_id' => 'Usuario',
			'estado_idUsuario' => 'Estado',
			'cliente_id' => 'Ejecutado',
			'grupo_id' => 'Grupo',
			'username' => 'Usuario',
			'password' => 'Password',
			'actualizacion' => 'Actualizacion',
			'usuario_idActualizacion' => 'Usuario Id Actualizacion',
			'usuario_actualizacion' => 'Usuario Actualizacion',
		);
	}
	
	public function validatePassword($password)
	{
	    return $this->hashPassword($password, $this->session)===$this->password;
	}
	
	public function hashPassword($password, $salt)
	{
	    return md5($salt.$password);
	}
	
	public function generateSalt()
	{
	    return uniqid('', true);
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
		
		$criteria->with = array('estado_usuario', 'grupo', 'cliente');

		$criteria->compare('usuario_id',$this->usuario_id,true);
		$criteria->compare('estado_usuario.descripcion',$this->estado_idUsuario,true);
		$criteria->compare('cliente.descripcion1',$this->cliente_id,true);
		$criteria->compare('grupo.descripcion',$this->grupo_id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('actualizacion',$this->actualizacion,true);
		$criteria->compare('usuario_idActualizacion',$this->usuario_idActualizacion,true);
		$criteria->compare('usuario_actualizacion',$this->usuario_actualizacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}