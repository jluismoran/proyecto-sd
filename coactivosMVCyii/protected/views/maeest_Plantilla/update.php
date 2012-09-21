<?php
$this->breadcrumbs=array(
	'Maeest  Plantillas'=>array('index'),
	$model->plantilla_id=>array('view','id'=>$model->plantilla_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maeest_Plantilla', 'url'=>array('index')),
	array('label'=>'Create maeest_Plantilla', 'url'=>array('create')),
	array('label'=>'View maeest_Plantilla', 'url'=>array('view', 'id'=>$model->plantilla_id)),
	array('label'=>'Manage maeest_Plantilla', 'url'=>array('admin')),
);
?>

<h1>Update maeest_Plantilla <?php echo $model->plantilla_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>