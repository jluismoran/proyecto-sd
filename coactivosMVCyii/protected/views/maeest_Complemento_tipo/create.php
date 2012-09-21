<?php
$this->breadcrumbs=array(
	'Maeest  Complemento Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maeest_Complemento_tipo', 'url'=>array('index')),
	array('label'=>'Manage maeest_Complemento_tipo', 'url'=>array('admin')),
);
?>

<h1>Create maeest_Complemento_tipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>