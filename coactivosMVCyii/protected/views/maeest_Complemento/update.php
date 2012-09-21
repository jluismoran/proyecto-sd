<?php
$this->breadcrumbs=array(
	'Maeest  Complementos'=>array('index'),
	$model->complemento_id=>array('view','id'=>$model->complemento_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maeest_Complemento', 'url'=>array('index')),
	array('label'=>'Create maeest_Complemento', 'url'=>array('create')),
	array('label'=>'View maeest_Complemento', 'url'=>array('view', 'id'=>$model->complemento_id)),
	array('label'=>'Manage maeest_Complemento', 'url'=>array('admin')),
);
?>

<h1>Update maeest_Complemento <?php echo $model->complemento_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>