<?php
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	//$model->grupo_id=>array('view','id'=>$model->grupo_id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'List maeest_Grupo', 'url'=>array('index')),
	array('label'=>'Create maeest_Grupo', 'url'=>array('create')),
	array('label'=>'View maeest_Grupo', 'url'=>array('view', 'id'=>$model->grupo_id)),
	array('label'=>'Manage maeest_Grupo', 'url'=>array('admin')),
);
?>

<h1>Modificar Grupo # <?php echo $model->grupo_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>