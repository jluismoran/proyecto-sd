<?php
$this->breadcrumbs=array(
	'Maeest  Paises',
);

$this->menu=array(
	array('label'=>'Create maeest_Pais', 'url'=>array('create')),
	array('label'=>'Manage maeest_Pais', 'url'=>array('admin')),
);
?>

<h1>Maeest  Paises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
