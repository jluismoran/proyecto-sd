<?php
$this->breadcrumbs=array(
	'Maeest  Complemento Tipos',
);

$this->menu=array(
	array('label'=>'Create maeest_Complemento_tipo', 'url'=>array('create')),
	array('label'=>'Manage maeest_Complemento_tipo', 'url'=>array('admin')),
);
?>

<h1>Maeest  Complemento Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
