<?php
$this->breadcrumbs=array(
	'Maeest  Distritos',
);

$this->menu=array(
	array('label'=>'Create maeest_Distrito', 'url'=>array('create')),
	array('label'=>'Manage maeest_Distrito', 'url'=>array('admin')),
);
?>

<h1>Maeest  Distritos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
