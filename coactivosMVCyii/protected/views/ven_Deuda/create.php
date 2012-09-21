<?php
$this->breadcrumbs=array(
	'Doc. Coactivos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar documentos', 'url'=>array('index')),
	array('label'=>'Gestionar documentos', 'url'=>array('admin')),
);
?>

<h1>Nuevo Documento Coactivo</h1>
<head>
<script type="text/javascript">
window.onbeforeunload = function (e) {
    e = e || window.event;

    var msg = "Seguro que quieres salir?";

    // For IE and Firefox prior to version 4
    if (e) {
        e.returnValue = msg;
    }

    // For Safari
    return msg;
};
</script>
</head>
<body>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</body>