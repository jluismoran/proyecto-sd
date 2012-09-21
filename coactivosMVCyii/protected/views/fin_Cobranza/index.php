<?php
$this->breadcrumbs=array(
	'Cobranzas',
);

$this->menu=array(
	array('label'=>'Crear Cobranza', 'url'=>array('create')),
	array('label'=>'Gestionar Cobranzas', 'url'=>array('admin')),
);
?>

<h1>Cobranzas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>
