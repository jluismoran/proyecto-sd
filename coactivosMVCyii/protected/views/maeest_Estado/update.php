<?php
$this->breadcrumbs=array(
	'Maeest  Estados'=>array('index'),
	$model->estado_id=>array('view','id'=>$model->estado_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maeest_Estado', 'url'=>array('index')),
	array('label'=>'Create maeest_Estado', 'url'=>array('create')),
	array('label'=>'View maeest_Estado', 'url'=>array('view', 'id'=>$model->estado_id)),
	array('label'=>'Manage maeest_Estado', 'url'=>array('admin')),
);
?>

<h1>Update maeest_Estado <?php echo $model->estado_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>