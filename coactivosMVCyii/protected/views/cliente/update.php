<?php
$this->breadcrumbs=array(
	'Maedin  Clientes'=>array('index'),
	$model->cliente_id=>array('view','id'=>$model->cliente_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maedin_Cliente', 'url'=>array('index')),
	array('label'=>'Create maedin_Cliente', 'url'=>array('create')),
	array('label'=>'View maedin_Cliente', 'url'=>array('view', 'id'=>$model->cliente_id)),
	array('label'=>'Manage maedin_Cliente', 'url'=>array('admin')),
);
?>

<h1>Update maedin_Cliente <?php echo $model->cliente_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>