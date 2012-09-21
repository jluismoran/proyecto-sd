<?php
$this->breadcrumbs=array(
	'Maeest  Provincias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maeest_Provincia', 'url'=>array('index')),
	array('label'=>'Manage maeest_Provincia', 'url'=>array('admin')),
);
?>

<h1>Create maeest_Provincia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>