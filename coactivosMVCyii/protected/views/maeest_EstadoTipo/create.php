<?php
$this->breadcrumbs=array(
	'Maeest  Estado Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maeest_EstadoTipo', 'url'=>array('index')),
	array('label'=>'Manage maeest_EstadoTipo', 'url'=>array('admin')),
);
?>

<h1>Create maeest_EstadoTipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>