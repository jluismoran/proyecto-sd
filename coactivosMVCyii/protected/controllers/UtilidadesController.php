<?php

class UtilidadesController extends Controller
{
	public function actionIndex()
	{
		Yii::import('ext.phpexcelreader.JPhpExcelReader');
		
		
		$model = new Prueba();
		$texto = '';
		if(isset($_POST['Prueba']))
		{
			$model->image = CUploadedFile::getInstance($model,'image');
			if($model->validate())
			{
				$model->image->saveAs(Yii::app()->basePath . '/../upload/xls/' . $model->image);
				$data = new JPhpExcelReader(Yii::app()->basePath . '/../upload/xls/' . $model->image);
				$datos = $data->as_array();
				$filas = count($datos);
				for($i=1;$i<$filas;$i++)
				{
					$sql = 'INSERT INTO cliente SET ';
					for($j=1;$j<=count($datos[$i]);$j++)
					{
						switch($j){
							case '1' : $sql.='cliente_idExterno=\''.$datos[$i][$j].'\',';break;
							case '2' : $sql.='descripcion1=\''.$datos[$i][$j].'\',';break;
							case '3' : $sql.='descripcion2=\''.$datos[$i][$j].'\',';break;
							case '4' : $sql.='nro_identificacion=\''.$datos[$i][$j].'\',';break;
							case '5' : $sql.='dst_id=\''.$datos[$i][$j].'\',';break;
							case '6' : $sql.='direccion=\''.$datos[$i][$j].'\',';break;
							case '7' : $sql.='estado_idDeuda=\''.$datos[$i][$j].'\',';break;
							case '8' : $sql.='saldo=\''.$datos[$i][$j].'\',';break;
							case '9' : $sql.='complemento_idMoneda=\''.$datos[$i][$j].'\',';break;
							case '10' : $sql.='fecha_saldo=\''.$datos[$i][$j].'\'';break;
						}
					}
					// echo $sql;
					Yii::app()->db->createCommand($sql)->execute();
				}
				$texto = 'FINALIZADO';
			}else{
				print_r($model->getErrors());
			}
		}
		
		$this->render('index',array(
			'model'=>$model,
			'texto'=>$texto,
		));
	}

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