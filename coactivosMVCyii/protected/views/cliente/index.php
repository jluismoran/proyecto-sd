<?php
$this->breadcrumbs=array(
	'Maedin  Clientes',
);

$this->menu=array(
	array('label'=>'Create maedin_Cliente', 'url'=>array('create')),
	array('label'=>'Manage maedin_Cliente', 'url'=>array('admin')),
);
?>

<h1>Maedin  Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
