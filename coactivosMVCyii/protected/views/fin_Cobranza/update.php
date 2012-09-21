<?php
$this->breadcrumbs=array(
	'Cobranzas'=>array('index'),
	$model->cobranza_id=>array('view','id'=>$model->cobranza_id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'List fin_Cobranza', 'url'=>array('index')),
	array('label'=>'Create fin_Cobranza', 'url'=>array('create')),
	array('label'=>'View fin_Cobranza', 'url'=>array('view', 'id'=>$model->cobranza_id)),
	array('label'=>'Manage fin_Cobranza', 'url'=>array('admin')),
);
?>

<h1>Modificar Cobranza <?php echo $model->cobranza_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>