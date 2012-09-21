<?php
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Grupo', 'url'=>array('index')),
	array('label'=>'Gestionar Grupo', 'url'=>array('admin')),
);
?>

<h1>Crear Grupo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>