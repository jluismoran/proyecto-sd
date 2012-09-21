<?php
$this->breadcrumbs=array(
	'Doc. Coactivos'=>array('index'),
	//$model->deuda_id=>array('view','id'=>$model->deuda_id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar documentos', 'url'=>array('index')),
	array('label'=>'Crear documento', 'url'=>array('create')),
	array('label'=>'Ver documento', 'url'=>array('view', 'id'=>$model->deuda_id)),
	array('label'=>'Gestionar documentos', 'url'=>array('admin')),
);
?>

<h1>Modificar Documento # <?php echo $model->deuda_id; ?>
</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>