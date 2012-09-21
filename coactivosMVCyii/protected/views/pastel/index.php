<?php
$this->breadcrumbs=array(
	'Reportes',
);

Yii::app()->clientScript->registerScriptFile('https://www.google.com/jsapi');

$js = '';

foreach($models as $elemento)
{
	$js .= '["'.$elemento->descripcion1.$elemento->descripcion2.'", '.$elemento->saldo.'],';
}

$js = substr($js,0,strlen($js)-1);

Yii::app()->clientScript->registerScript('grafica','
      google.load("visualization", "1", {packages:["piechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Clientes", "Deuda"],
          '.$js.'
        ]);
		var options = {
          title: "Clientes deudores",
          hAxis: {title: "Clientes", titleTextStyle: {color: "red"}}
        };

        var chart = new google.visualization.PieChart(document.getElementById("chart_div"));
        chart.draw(data, options);
      }
',CClientScript::POS_HEAD);

?>

<h1><?php //echo $this->id . '/' . $this->action->id; ?></h1>
<div id="pastel" >
<?php
/*$criteria = new CDbCriteria;
//$dataProvider=new CActiveDataProvider('maedin_Cliente');
$data = maedin_Cliente::model()->findAll($criteria);
$cadena = array();
foreach ($data as $item){
    $cadena[] = array($item->descripcion1,$item->saldo);
}
echo CJSON::encode($cadena);

$this->Widget('ext.highcharts.HighchartsWidget', array(
   'options' => array(
                'title' => array('text' => 'Gráfico de pastel'),
                'tooltip'=>array(
                    'formatter'=>'js:function() { return "<b>"+ this.point.name +"</b>: "+ this.percentage +" %"; }'
                ),
				'plotOptions'=>array(
                    'pie'=>array(
                        'allowPointSelect'=> true,
                        'cursor'=>'pointer',
                        'dataLabels'=>array(
                            'enabled'=> true,
                            'color'=>'#000000',
                            'connectorColor'=>'#000000',
                            //'formatter'=>'js:function() { return "<b>"+ this.point.name +"</b>:"+this.percentage +" %"; }'  
                            )
                        )
                ),
                'series' => array(
				    array(
                        'type' => 'pie',
						'name' => 'Pastel',
                        'data' => $js
                    )
				)	
    )
));*/
?>
</div>
<div id="chart_div" style="width: 900px; height: 500px;"></div>
<?php


?>