<?php
$this->breadcrumbs=array(
	'Maeest  Paises'=>array('index'),
	$model->pais_id=>array('view','id'=>$model->pais_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maeest_Pais', 'url'=>array('index')),
	array('label'=>'Create maeest_Pais', 'url'=>array('create')),
	array('label'=>'View maeest_Pais', 'url'=>array('view', 'id'=>$model->pais_id)),
	array('label'=>'Manage maeest_Pais', 'url'=>array('admin')),
);
?>

<h1>Update maeest_Pais <?php echo $model->pais_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>