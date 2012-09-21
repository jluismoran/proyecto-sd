<?php
$this->breadcrumbs=array(
	'Maeest  Complementos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maeest_Complemento', 'url'=>array('index')),
	array('label'=>'Manage maeest_Complemento', 'url'=>array('admin')),
);
?>

<h1>Create maeest_Complemento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>