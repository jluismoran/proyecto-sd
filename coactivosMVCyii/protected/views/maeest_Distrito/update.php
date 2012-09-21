<?php
$this->breadcrumbs=array(
	'Maeest  Distritos'=>array('index'),
	$model->dst_id=>array('view','id'=>$model->dst_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maeest_Distrito', 'url'=>array('index')),
	array('label'=>'Create maeest_Distrito', 'url'=>array('create')),
	array('label'=>'View maeest_Distrito', 'url'=>array('view', 'id'=>$model->dst_id)),
	array('label'=>'Manage maeest_Distrito', 'url'=>array('admin')),
);
?>

<h1>Update maeest_Distrito <?php echo $model->dst_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>