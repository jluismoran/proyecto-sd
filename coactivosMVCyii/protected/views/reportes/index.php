<?php
$this->breadcrumbs=array(
	'Reportes',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('reportes-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

Yii::app()->clientScript->registerScriptFile('https://www.google.com/jsapi');

$js = '';

foreach($models as $elemento)
{
	$js .= '["'.$elemento->descripcion1.$elemento->descripcion2.'", '.$elemento->saldo.'],';
}

$js = substr($js,0,strlen($js)-1);

Yii::app()->clientScript->registerScript('grafica','
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Clientes", "Deuda"],
          '.$js.'
        ]);
		var options = {
          title: "Clientes mas deudores",
          hAxis: {title: "Clientes", titleTextStyle: {color: "red"}}
        };

        var chart = new google.visualization.BarChart(document.getElementById("chart_div"));
        chart.draw(data, options);
      }
',CClientScript::POS_HEAD);

?>
<h1><?php //echo $this->id . '/' . $this->action->id; ?></h1>

<div id="chart_div" style="width: 900px; height: 500px;"></div>
