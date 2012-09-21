<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainMbMenu">
		<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
			'items'=>array(
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Ejecutados', 'url'=>array('/maedin_Cliente/admin')),
				array('label'=>'Documentos Coactivos', 'url'=>array('/ven_Deuda/admin')),
				array('label'=>'Cobranzas', 'url'=>array('fin_Cobranza/admin')),
				array('label'=>'Reportes',
				'items'=>array(
						array('label'=>'Clientes mas deudores', 'url'=>array('reportes/index','view'=>'sub1')),
						array('label'=>'Deudas de clientes por documento', 'url'=>array('reporte1/index','view'=>'sub2')),
						array('label'=>'Pastel', 'url'=>array('pastel/index','view'=>'sub3')),
				),),
				array('label'=>'Utilidades',
				  'items'=>array(
				            array('label'=>'Importar', 'url'=>array('utilidades/index')),
							),
				),
				array('label'=>'Maestros',
				  'items'=>array(
				            array('label'=>'Estados', 'url'=>array('/maeest_Estado/admin','view'=>'sub1')),
							array('label'=>'Estados Tipos', 'url'=>array('/maeest_EstadoTipo/admin','view'=>'sub2')),
							array('label'=>'Complementos', 'url'=>array('/maeest_Complemento/admin','view'=>'sub3')),
							array('label'=>'Complementos Tipos', 'url'=>array('/maeest_Complemento_tipo/admin','view'=>'sub4')),
							array('label'=>'Usuarios', 'url'=>array('/maeest_Usuario/admin','view'=>'sub5')),
                            array('label'=>'Grupos', 'url'=>array('/maeest_Grupo/admin','view'=>'sub6')),	
                            array('label'=>'Plantillas', 'url'=>array('/maeest_Plantilla/admin','view'=>'sub7')),							
				           ),		
				),
				array('label'=>'Cerrar Sesion ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<div class='info' style='text-align:left;'>
	<?php
	$flashMessages = Yii::app()->user->getFlashes();
	if($flashMessages){
	   echo '<class="flashes">';
	   foreach($flashMessages as $key => $message){
	      echo '<li><div class="flash-'.$key.'">'.$message."</div></li>\n";
	   }
	   echo '</ul>';
	}	
	?>
	</div>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> SJM - Coactivos<br/>
		Todos los derechos reservados.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

<?php
//efecto para el div de mensajes flash
Yii::app()->clientScript->registerScript(
     'myHideEffect',
	 '$(".info").animate({opacity:1.0}, 10000).slideUp("slow");',
	 CClientScript::POS_READY
);
?>
