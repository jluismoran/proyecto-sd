<?php
$this->breadcrumbs=array(
	'Ejecutados'=>array('index'),
	//$model->cliente_id=>array('view','id'=>$model->cliente_id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar ejecutados', 'url'=>array('index')),
	array('label'=>'Crear ejecutado', 'url'=>array('create')),
	array('label'=>'Ver ejecutado', 'url'=>array('view', 'id'=>$model->cliente_id)),
	array('label'=>'Gestionar ejecutados', 'url'=>array('admin')),
);
?>

<h1>Modificar Ejecutado # <?php echo $model->cliente_id; ?>
</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>