<?php
$this->breadcrumbs=array(
	'Maeest  Estados',
);

$this->menu=array(
	array('label'=>'Create maeest_Estado', 'url'=>array('create')),
	array('label'=>'Manage maeest_Estado', 'url'=>array('admin')),
);
?>

<h1>Maeest  Estados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
