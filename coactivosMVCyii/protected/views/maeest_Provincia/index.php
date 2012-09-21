<?php
$this->breadcrumbs=array(
	'Maeest  Provincias',
);

$this->menu=array(
	array('label'=>'Create maeest_Provincia', 'url'=>array('create')),
	array('label'=>'Manage maeest_Provincia', 'url'=>array('admin')),
);
?>

<h1>Maeest  Provincias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
