<?php

class Ven_DeudaController extends Controller
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
				'actions'=>array('index','view','Exportar'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','ListarClientes','Verplantilla'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('Exportarplantilla1','Exportarplantilla2','Exportarplantilla3','Exportarplantilla4'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
    
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */	 
	public function actionCreate()
	{
		$model = new ven_Deuda;
		// Uncomment the following line if AJAX validation is needed
		//$this->performAjaxValidation($model);
		
		if(isset($_POST['ven_Deuda']))
		{
		
		    $model->attributes=$_POST['ven_Deuda'];
		    if($model->complemento_idDocumento && $model->cliente_id && $model->importe)
			{
			    //cogemos datos a ser usados: idcliente, materia, importe(registro antiguo) 
			    $idcliente = $model->cliente_id;
			    $materia = $model->complemento_idMateria;
			    $select = "SELECT deuda_id,importe FROM deuda 
			               WHERE cliente_id='$idcliente' AND estado_idDeuda=4 
					       AND complemento_idMateria='$materia'";
			    $query = Yii::app()->db->createCommand($select)->queryRow();
			    $importe = $query['importe'];
				$id = $query['deuda_id'];

			    if($query!=0) //si la consulta del select encontro datos
			    {
				    //modifica estado de la deuda a cancelado automatico
			        $mod = "UPDATE deuda SET estado_idDeuda=11,saldo=0
			                WHERE cliente_id='$idcliente' AND estado_idDeuda=4
					        AND complemento_idMateria='$materia'";
			        Yii::app()->db->createCommand($mod)->execute();
					
				    //registrar deuda
				    $model->saldo = $model->importe;
		            $model->save();
					
					$query_new = Yii::app()->db->createCommand($select)->queryRow();
			        $importe_new = $query_new['importe'];
					   
					//actualiza saldo del cliente haciendo una resta del importe antiguo
					//y sumando el nuevo importe
			        $cliente = maedin_Cliente::model()->findByPk($idcliente);
			        $cliente->saldo -= $importe;
				    $cliente->saldo += $importe_new;
			        $cliente->save();
					
					//registra una cobranza	
			        $cobranza = new fin_Cobranza();
			        $cobranza->cliente_id = $idcliente;
			        $cobranza->usuario_id = Yii::app()->user->id;
			        $cobranza->importe = $importe;
			        $cobranza->complemento_idMoneda = 7;
			        $cobranza->estado_idDeuda = 11;
			        $cobranza->fecha = date('d/m/Y');
			        $cobranza->save();
					   
                    //registra una cobranza_deuda por la cobranza anterior
			        $cobranza_deuda = new fin_Cobranza_deuda();
			        $cobranza_deuda->cobranza_id = $cobranza->cobranza_id;
		            $cobranza_deuda->deuda_id = $id;
			        $cobranza_deuda->importe = $importe;
			        $cobranza_deuda->save();
			        //echo $conteo;
			        //Yii::app()->end();
			    }else{ //en caso las materias sean diferentes
				       //registrar deuda
				       $model->saldo = $model->importe;
		               $model->save();

			           $query_new = Yii::app()->db->createCommand($select)->queryRow();
			           $importe_new = $query_new['importe'];
			           
					   //actualiza saldo del cliente sumandole el nuevo importe
			           $cliente = maedin_Cliente::model()->findByPk($idcliente);
			           $cliente->saldo += $importe_new;
			           $cliente->save(); 
				    }
			    $this->redirect(array('view','id'=>$model->deuda_id));
			}else{
			    $msg='Ingrese todos los campos requeridos';
			    Yii::app()->user->setFlash('error',$msg);
			    $this->render('create',array(
			            'model'=>$model,));
				}
		}else{
		    $this->render('create',array(
			         'model'=>$model,));
			}
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
		// $this->performAjaxValidation($model);

		if(isset($_POST['ven_Deuda']))
		{
			$model->attributes=$_POST['ven_Deuda'];
			
			//actualiza saldo del cliente
			if($model->estado_idDeuda == 4){
			$idcliente = $model->cliente_id;
			$cliente = maedin_Cliente::model()->findByPk($idcliente);
			$cliente->saldo = $model->importe;
			$cliente->save();
			}
			$model->saldo = $model->importe;
			if($model->save())
				$this->redirect(array('view','id'=>$model->deuda_id));
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
		$dataProvider=new CActiveDataProvider('ven_Deuda');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ven_Deuda('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ven_Deuda']))
			$model->attributes=$_GET['ven_Deuda'];			
			
		$this->render('admin',array(
			// 'dataProvider'=>$dataProvider,
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
		$model=ven_Deuda::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='ven--deuda-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionListarClientes($term)
	{
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(CONCAT(descripcion1 , ' ', descripcion2)) like LOWER(:term)";
		$criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $data = maedin_Cliente::model()->findAll($criteria);
        $arr = array();
        foreach ($data as $item) {
            $arr[] = array(
			'label' => $item->descripcion1.' '.$item->descripcion2,
			'value' => $item->cliente_id,
            'id' => $item->cliente_id,
            );
        }
		echo CJSON::encode($arr);
    }
	
	public function actionExportar($id)
	{

		$mPDF1 = Yii::app()->ePdf->mpdf();
		$mPDF1->WriteHTML($this->render('view',array(
			'model'=>$this->loadModel($id),
			),true)
			);
		$mPDF1->Output();
	}
	
	public function actionVerplantilla($doc,$id)
	{
		/*$dataProvider=new CActiveDataProvider('ven_Deuda', array(
				'criteria'=>array(
					'condition'=>'deuda_id='.$id,
				),
			));*/
		$model=$this->loadModel($id);
		
        if($doc==1)
		$this->render('plantilla1',array(
			'model'=>$model,
		));
		if($doc==2)
		$this->render('plantilla2',array(
			'model'=>$model,
		));
		if($doc==3)
		$this->render('plantilla3',array(
			'model'=>$model,
		));
		if($doc==4)
		$this->render('plantilla4',array(
			'model'=>$model,
		));
	}
	
	public function actionExportarplantilla1($id)
	{
        $this->layout="//layouts/pdf";
		$mPDF1 = Yii::app()->ePdf->mpdf('','A4');
		$mPDF1->WriteHTML($this->render('plantilla1',array(
			'model'=>$this->loadModel($id),
			),true)
			);
		$mPDF1->Output('resolucion_coactiva',"I");
	}
	
	public function actionExportarplantilla2($id)
	{
        $this->layout="//layouts/pdf";
		$mPDF1 = Yii::app()->ePdf->mpdf('','A4');
		$mPDF1->WriteHTML($this->render('plantilla2',array(
			'model'=>$this->loadModel($id),
			),true)
			);
		$mPDF1->Output();
	}
	
	public function actionExportarplantilla3($id)
	{
        $this->layout="//layouts/pdf";
		$mPDF1 = Yii::app()->ePdf->mpdf('','A4');
		$mPDF1->WriteHTML($this->render('plantilla3',array(
			'model'=>$this->loadModel($id),
			),true)
			);
		$mPDF1->Output();
	}
	
	public function actionExportarplantilla4($id)
	{
        $this->layout="//layouts/pdf";
		$mPDF1 = Yii::app()->ePdf->mpdf('','A4');
		$mPDF1->WriteHTML($this->render('plantilla4',array(
			'model'=>$this->loadModel($id),
			),true)
			);
		$mPDF1->Output();
	}                                                                                                                 
}
