<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	//$model->usuario_id=>array('view','id'=>$model->usuario_id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->usuario_id)),
	array('label'=>'Gestionar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Modificar Usuario # <?php echo $model->usuario_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>