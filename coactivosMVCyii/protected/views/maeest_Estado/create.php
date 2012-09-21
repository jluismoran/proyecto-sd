<?php
$this->breadcrumbs=array(
	'Maeest  Estados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maeest_Estado', 'url'=>array('index')),
	array('label'=>'Manage maeest_Estado', 'url'=>array('admin')),
);
?>

<h1>Create maeest_Estado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>