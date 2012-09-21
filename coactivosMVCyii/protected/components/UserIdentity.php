<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
  
  private $_id;
	public function authenticate()
	{
		/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;*/
		
            
		$user=maeest_Usuario::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->usuario_id;
			//echo Yii::app()->user->usuario_id; //devuelve el id del usuario logueado
			$this->setState('username', $user->username);
			$this->username=$user->username;
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
		
    }
	
	public function getId()
	{
	    return $this->_id;
	}

}