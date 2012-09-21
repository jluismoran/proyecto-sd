<?php
$this->breadcrumbs=array(
	'Maeest  Complemento Tipos'=>array('index'),
	$model->complementoTipo_id=>array('view','id'=>$model->complementoTipo_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maeest_Complemento_tipo', 'url'=>array('index')),
	array('label'=>'Create maeest_Complemento_tipo', 'url'=>array('create')),
	array('label'=>'View maeest_Complemento_tipo', 'url'=>array('view', 'id'=>$model->complementoTipo_id)),
	array('label'=>'Manage maeest_Complemento_tipo', 'url'=>array('admin')),
);
?>

<h1>Update maeest_Complemento_tipo <?php echo $model->complementoTipo_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>