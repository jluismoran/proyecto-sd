<?php

class PastelController extends Controller
{
	public function actionIndex()
	{
		$criteria = new CDbCriteria();
		$criteria->limit = 10;
		$criteria->order = 'saldo DESC';
		$models = maedin_Cliente::model()->findAll($criteria);
		
		$this->render('index',array(
			'models' => $models,
		));
		
	}
}