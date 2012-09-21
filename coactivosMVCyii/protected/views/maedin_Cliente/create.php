<?php
$this->breadcrumbs=array(
	'Ejecutados'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar ejecutados', 'url'=>array('index')),
	array('label'=>'Gestionar ejecutados', 'url'=>array('admin')),
);
?>

<h1>Crear Ejecutado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>