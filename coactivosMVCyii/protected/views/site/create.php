<?php
$this->breadcrumbs=array(
	'Maedin  Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maedin_Cliente', 'url'=>array('index')),
	array('label'=>'Manage maedin_Cliente', 'url'=>array('admin')),
);
?>

<h1>Create maedin_Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>