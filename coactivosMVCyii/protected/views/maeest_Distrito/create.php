<?php
$this->breadcrumbs=array(
	'Maeest  Distritos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maeest_Distrito', 'url'=>array('index')),
	array('label'=>'Manage maeest_Distrito', 'url'=>array('admin')),
);
?>

<h1>Create maeest_Distrito</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>