<?php
$this->breadcrumbs=array(
	'Maeest  Departamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maeest_Departamento', 'url'=>array('index')),
	array('label'=>'Manage maeest_Departamento', 'url'=>array('admin')),
);
?>

<h1>Create maeest_Departamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>