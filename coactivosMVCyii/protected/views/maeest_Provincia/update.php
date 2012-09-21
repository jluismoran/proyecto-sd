<?php
$this->breadcrumbs=array(
	'Maeest  Provincias'=>array('index'),
	$model->prov_id=>array('view','id'=>$model->prov_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maeest_Provincia', 'url'=>array('index')),
	array('label'=>'Create maeest_Provincia', 'url'=>array('create')),
	array('label'=>'View maeest_Provincia', 'url'=>array('view', 'id'=>$model->prov_id)),
	array('label'=>'Manage maeest_Provincia', 'url'=>array('admin')),
);
?>

<h1>Update maeest_Provincia <?php echo $model->prov_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>