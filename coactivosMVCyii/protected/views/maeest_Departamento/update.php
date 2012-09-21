<?php
$this->breadcrumbs=array(
	'Maeest  Departamentos'=>array('index'),
	$model->dep_id=>array('view','id'=>$model->dep_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maeest_Departamento', 'url'=>array('index')),
	array('label'=>'Create maeest_Departamento', 'url'=>array('create')),
	array('label'=>'View maeest_Departamento', 'url'=>array('view', 'id'=>$model->dep_id)),
	array('label'=>'Manage maeest_Departamento', 'url'=>array('admin')),
);
?>

<h1>Update maeest_Departamento <?php echo $model->dep_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>