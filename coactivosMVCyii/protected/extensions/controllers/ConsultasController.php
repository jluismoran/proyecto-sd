<?php

class ConsultasController extends Controller
{
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ven_Deuda');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
}
