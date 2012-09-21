<?php

class Fin_CobranzaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','guardar'),
				'users'=>array('@'),
			),
			
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		
		$model_detalle = new fin_Cobranza_deuda('search');
		// $criteria = new CDbCriteria;
		// $criteria->with = array( 'cliente' );
		// $criteria->compare( 'cliente.descripcion1', $model->cliente_search, true );
		$dataProvider = new CActiveDataProvider('fin_Cobranza_deuda',array(
			'criteria' => array(
								'condition' => 'cobranza_id = '.$id,
								'with'=>'deuda',
								),
			'sort'=>array('attributes'=>array('*',),)
		));

		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'model_detalle'=>$model_detalle,
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	 
	public function beforeSave()
	{
	
	        $import=$_POST['fin_Cobranza']['total_seleccionado'];
			$idcliente=$_POST['fin_Cobranza']['cliente_id'];
			$sql="update cliente set saldo=0 where cliente_id='$idcliente'";
			Yii::app()->db->createCommand($sql)->execute();	
			
	}
	
	public function actionCreate()
	{
		$dataProvider = new CActiveDataProvider('ven_Deuda',array(
			'criteria'=>array(
				'condition'=>'cliente_id=0.00',
			),
		));
		
		
		if(isset($_POST['send']))
		{
			$dataProvider = new CActiveDataProvider('ven_Deuda',array(
				'criteria'=>array(
					'condition'=>'saldo > 0 and estado_idDeuda=4 and cliente_id='.$_POST['cliente_id'],
				),
			));
		}
			
		$this->render('create',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['fin_Cobranza']))
		{
			$model->attributes=$_POST['fin_Cobranza'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->cobranza_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('fin_Cobranza');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/* Guardar deudas */
	
	public function actionGuardar()
	{
		
		if(isset($_POST['guardar_deuda']))
		{
		    $total=$_POST['total_seleccionado'];
		    if(!$total){
			    echo "<script>alert('Debe seleccionar un registro')</script>";
                $this->actionAdmin();
			}
			else{
			$items = $_POST['lista_deudas'];

			$cobranza = new fin_Cobranza();
			$cobranza->cliente_id = $_POST['cliente_id'];
			$cobranza->usuario_id = Yii::app()->user->id;
			$cobranza->importe = 0;
			$cobranza->complemento_idMoneda = 7;
			$cobranza->estado_idDeuda = 1;
			$cobranza->fecha = date('d/m/Y');
			if(!$cobranza->validate())
			{
				$this->actionAdmin();
			}else{
				$cobranza->save();
				$importe_total = 0;
				foreach($items as $item)
				{
					$cobranza_deuda = new fin_Cobranza_deuda();
					$cobranza_deuda->cobranza_id = $cobranza->cobranza_id;
					$cobranza_deuda->deuda_id = $item;
					
					$idcliente=$_POST['cliente_id'];
					
						//Por seguridad se trae el importe del documento deuda
						$deuda = ven_Deuda::model()->findByPk($item);				
						$deuda->saldo 		   = 0;//$deuda->saldo - $deuda->importe;
						$deuda->estado_idDeuda = 6;
						$deuda->save();
						// $sql="update deuda set saldo = saldpo - , estado_idDeuda = 6 where deuda_id = '$item'";					
						// Yii::app()->db->createCommand($sql)->execute();					
					
					$cobranza_deuda->importe = $deuda->importe;
					
					$cobranza_deuda->save();
					
					$importe_total += $deuda->importe;
				}
				$import=$_POST['total_seleccionado'];
			    $idcliente=$_POST['cliente_id'];
			    $sql="update cliente set saldo=saldo-'$import' where cliente_id='$idcliente'";
			    Yii::app()->db->createCommand($sql)->execute();
					
				$cobranza->importe = $importe_total;
				$cobranza->save();
				
				$this->redirect(array('admin', $model));
				
				//$this->actionAdmin();
				//esto no se hace xq sino al actualizar la pagina
				//sigue creando registros
			}
		  }
		}else{
			$this->actionAdmin();
		}
	}
	
	
	/**
	 * Manages all models.
	 */
	
	public function actionAdmin()
	{
		
		$model=new fin_Cobranza('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['fin_Cobranza']))
			$model->attributes=$_GET['fin_Cobranza'];
		// $criteria = new CDbCriteria;
		// $criteria->with = array( 'cliente' );
		// $criteria->compare( 'cliente.descripcion1', $model->cliente_search, true );
		$dataProvider = new CActiveDataProvider('fin_Cobranza',array(
			'sort'=>array(
				'attributes'=>array(
					'cliente_search'=>array(
						'asc'=>'cliente.descripcion1',
						'desc'=>'cliente.descripcion1 DESC',
					),
					'moneda_search'=>array(
						'asc'=>'moneda.descripcion',
						'desc'=>'moneda.descripcion DESC',
					),
					'*',
				),
			)
		));

		$this->render('admin',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=fin_Cobranza::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='fin--cobranza-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
