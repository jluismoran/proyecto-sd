<?php
$this->breadcrumbs=array(
	'Maeest  Plantillas',
);

$this->menu=array(
	array('label'=>'Create maeest_Plantilla', 'url'=>array('create')),
	array('label'=>'Manage maeest_Plantilla', 'url'=>array('admin')),
);
?>

<h1>Maeest  Plantillas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
