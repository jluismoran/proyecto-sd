<?php
$this->breadcrumbs=array(
	'Maeest  Plantillas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maeest_Plantilla', 'url'=>array('index')),
	array('label'=>'Manage maeest_Plantilla', 'url'=>array('admin')),
);
?>

<h1>Create maeest_Plantilla</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>