<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Gestionar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Crear Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>