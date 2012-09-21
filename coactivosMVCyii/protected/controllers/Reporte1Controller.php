<?php

class Reporte1Controller extends Controller
{
	public function actionIndex()
	{
		$criteria = new CDbCriteria();
		$criteria->limit = 10;
		$criteria->order = 'importe DESC';
		$models = ven_Deuda::model()->findAll($criteria);
		
		$this->render('index',array(
			'models' => $models,
		));
		
	}
	/*
	public function actionIndex()
	{
		
		
		$criteria = new CDbCriteria();
		$criteria->limit = 5;
		$criteria->order = 'importe DESC';
		$models = ven_Deuda::model()->findAll($criteria);
		
		$this->render('index1',array(
			'models' => $models,
		));
	}
*/
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}