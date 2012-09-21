<?php
$this->breadcrumbs=array(
	'Maeest  Departamentos',
);

$this->menu=array(
	array('label'=>'Create maeest_Departamento', 'url'=>array('create')),
	array('label'=>'Manage maeest_Departamento', 'url'=>array('admin')),
);
?>

<h1>Maeest  Departamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
