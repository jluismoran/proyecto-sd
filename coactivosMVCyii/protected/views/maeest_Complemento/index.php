<?php
$this->breadcrumbs=array(
	'Maeest  Complementos',
);

$this->menu=array(
	array('label'=>'Create maeest_Complemento', 'url'=>array('create')),
	array('label'=>'Manage maeest_Complemento', 'url'=>array('admin')),
);
?>

<h1>Maeest  Complementos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
