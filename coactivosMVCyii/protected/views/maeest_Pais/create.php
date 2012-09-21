<?php
$this->breadcrumbs=array(
	'Maeest  Paises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maeest_Pais', 'url'=>array('index')),
	array('label'=>'Manage maeest_Pais', 'url'=>array('admin')),
);
?>

<h1>Create maeest_Pais</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>