<?php
$this->breadcrumbs=array(
	'Maeest  Estado Tipos'=>array('index'),
	$model->estadoTipo_id=>array('view','id'=>$model->estadoTipo_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maeest_EstadoTipo', 'url'=>array('index')),
	array('label'=>'Create maeest_EstadoTipo', 'url'=>array('create')),
	array('label'=>'View maeest_EstadoTipo', 'url'=>array('view', 'id'=>$model->estadoTipo_id)),
	array('label'=>'Manage maeest_EstadoTipo', 'url'=>array('admin')),
);
?>

<h1>Update maeest_EstadoTipo <?php echo $model->estadoTipo_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>