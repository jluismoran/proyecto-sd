<?php
$this->breadcrumbs=array(
	'Doc. Coactivos'=>array('index'),
	'Plantilla'
);

$this->menu=array(
	array('label'=>'Exportar en PDF', 'url'=>array('exportarplantilla3','id'=>$model->deuda_id)),
);
?>
<table width="800" height="343" border="0" align="center">
  <tr>
    <td height="100" colspan="3" align="left"><h4><?php echo $model->complementoDocumento->plantilla->descripcion;?></h4>
	  <h4><?php echo $model->complementoDocumento->plantilla->descripcion2;?></h4>
      <h4><?php echo $model->complementoDocumento->plantilla->campo0;?></h4>
    <h4><u><?php echo $model->complementoDocumento->plantilla->campo1;?></u></h4>
	</td>
  </tr>
  <tr>
    <td width="300"></td>
    <td align="left"><strong><?php echo $model->complementoDocumento->plantilla->campo4;?></strong><br>
  
    <strong><?php echo $model->complementoDocumento->plantilla->campo5;?></strong> <?php echo $model->cliente->descripcion1.' '.$model->cliente->descripcion2;?><br>
  
    <strong><?php echo $model->complementoDocumento->plantilla->campo6." ".$model->complementoMateria->descripcion;?></strong> <?php echo $model->periodo;?><br>
  
    <strong><?php echo $model->complementoDocumento->plantilla->campo7;?></strong> Luis Quispe Valencia<br>
  
    <strong><?php echo $model->complementoDocumento->plantilla->campo8;?></strong> <?php echo $model->usuario->cliente->descripcion1.' '.$model->usuario->cliente->descripcion2;?><br>
    <p>&nbsp;</p>
	</td>
  </tr>
  <tr>
    <td><strong><?php echo $model->complementoDocumento->plantilla->campo9;?></strong><br>
    <?php echo $model->complementoDocumento->plantilla->campo10;?> <?php echo date('d-m-Y');?><br>
	&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><p align="justify">
	<?php echo $model->complementoDocumento->plantilla->campo11;?> 
	<strong><?php echo $model->complementoDocumento->plantilla->campo12;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo13;?> <strong><?php echo $model->cliente->descripcion1.' '.$model->cliente->descripcion2;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo14;?> <strong><?php echo $model->nro_referencia;?></strong>.
	<strong><?php echo $model->complementoDocumento->plantilla->campo15;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo16;?> 
	<strong><?php echo $model->complementoDocumento->plantilla->campo17;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo18;?> <?php echo $model->importe;?> 
	<strong><?php echo $model->complementoDocumento->plantilla->campo19;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo20;?> <strong><?php echo $model->cliente->descripcion1.' '.$model->cliente->descripcion2;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo21;?> <strong><?php echo $model->complementoDocumento->plantilla->campo22;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo23;?> 
	<strong><?php echo $model->complementoDocumento->plantilla->campo24;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo25;?> <?php echo $model->usuario->cliente->descripcion1.' '.$model->usuario->cliente->descripcion2;?> 
    <?php echo $model->complementoDocumento->plantilla->campo26;?>
	<strong><?php echo $model->complementoDocumento->plantilla->campo27;?></strong>
	</td>
  </tr>
</table>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<table width="800" height="343" border="0" align="center">
  <tr>
    <td height="100" colspan="3" align="left"><h4><?php echo $model->complementoDocumento->plantilla->descripcion;?></h4>
	  <h4><?php echo $model->complementoDocumento->plantilla->descripcion2;?></h4>
      <h4><?php echo $model->complementoDocumento->plantilla->campo0;?></h4>
    <h4><u><?php echo $model->complementoDocumento->plantilla->campo1;?></u></h4><p>&nbsp;</p>
	<strong><?php echo $model->complementoDocumento->plantilla->campo2;?></strong><br>
    <strong><?php echo $model->complementoDocumento->plantilla->campo3;?></strong><br>
	</td>
  </tr>
  <tr>
    <td width="300"></td>
    <td align="left"><strong><?php echo $model->complementoDocumento->plantilla->campo4;?></strong><br>
  
    <strong><?php echo $model->complementoDocumento->plantilla->campo5;?></strong> <?php echo $model->cliente->descripcion1.' '.$model->cliente->descripcion2;?><br>
  
    <strong><?php echo $model->complementoDocumento->plantilla->campo6." ".$model->complementoMateria->descripcion;?></strong> <?php echo $model->periodo;?><br>
  
    <strong><?php echo $model->complementoDocumento->plantilla->campo7;?></strong> Luis Quispe Valencia<br>
  
    <strong><?php echo $model->complementoDocumento->plantilla->campo8;?></strong> <?php echo $model->usuario->cliente->descripcion1.' '.$model->usuario->cliente->descripcion2;?><br>
    <p>&nbsp;</p>
	</td>   
  </tr>
  <tr>
    <td><strong><?php echo $model->complementoDocumento->plantilla->campo9;?></strong><br>
    <?php echo $model->complementoDocumento->plantilla->campo10;?> <?php echo date('d-m-Y');?><br>
	&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><p align="justify">
	<?php echo $model->complementoDocumento->plantilla->campo11;?> 
	<strong><?php echo $model->complementoDocumento->plantilla->campo12;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo13;?> <strong><?php echo $model->cliente->descripcion1.' '.$model->cliente->descripcion2;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo14;?> <strong><?php echo $model->nro_referencia;?></strong>.
	<strong><?php echo $model->complementoDocumento->plantilla->campo15;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo16;?> 
	<strong><?php echo $model->complementoDocumento->plantilla->campo17;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo18;?> <?php echo $model->importe;?> 
	<strong><?php echo $model->complementoDocumento->plantilla->campo19;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo20;?> <strong><?php echo $model->cliente->descripcion1.' '.$model->cliente->descripcion2;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo21;?> <strong><?php echo $model->complementoDocumento->plantilla->campo22;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo23;?> 
	<strong><?php echo $model->complementoDocumento->plantilla->campo24;?></strong> 
	<?php echo $model->complementoDocumento->plantilla->campo25;?> <?php echo $model->usuario->cliente->descripcion1.' '.$model->usuario->cliente->descripcion2;?>
    <?php echo $model->complementoDocumento->plantilla->campo26;?>
	<strong><?php echo $model->complementoDocumento->plantilla->campo27;?></strong>
	</td>
  </tr>
</table>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<table width="800" height="343" border="0" align="center">
  <tr>
    <td colspan="3" align="left"><strong>NRO. DE EXPEDIENTE: <?php echo $model->nro_expediente;?></strong><br></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><p>&nbsp;</p><p>&nbsp;</p><strong><?php echo $model->complementoDocumento->plantilla->campo28;?></strong><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="3"><p> <?php echo $model->complementoDocumento->plantilla->campo29;?> <?php echo '.....................';//date('d-m-Y');?> <?php echo $model->complementoDocumento->plantilla->campo30;?> <?php echo '....................';//date('H:i:s');?> 
	<?php echo $model->complementoDocumento->plantilla->campo31;?></br><p>&nbsp;</p>
      <?php echo $model->complementoDocumento->plantilla->campo32;?> <?php echo '............................................................................';//$model->cliente->descripcion1.' '.$model->cliente->descripcion2;?><br /><p>&nbsp;</p>
      <?php echo $model->complementoDocumento->plantilla->campo33;?> <?php echo '.....................';//$model->cliente->nro_identificacion;?> <?php echo $model->complementoDocumento->plantilla->campo34;?> .................................................<br /><p>&nbsp;</p>
      <?php echo $model->complementoDocumento->plantilla->campo35;?> 
	  &nbsp;&nbsp;&nbsp;
...........................................................................................................<p><br></p>
	  
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
...........................................................................................................<br /><p>&nbsp;</p>
      
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php echo $model->complementoDocumento->plantilla->campo39;?> .........................................................<br /><p>&nbsp;</p>
	  </p></td>
  </tr>
</table>	
 <table width="800" height="343" border="0" align="center">
  <tr>
    <td colspan="3" align="center"><p>&nbsp;</p><p>&nbsp;</p><strong><?php echo $model->complementoDocumento->plantilla->campo46;?></strong><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="3">
	<p>
      <?php echo $model->complementoDocumento->plantilla->campo47;?> .........................................................<br /><p>&nbsp;</p>
      <?php echo $model->complementoDocumento->plantilla->campo48;?> .........................................................<br /><p>&nbsp;</p>
	  <?php echo $model->complementoDocumento->plantilla->campo49;?> .........................................................<br /><p>&nbsp;</p>
	  <?php echo $model->complementoDocumento->plantilla->campo50;?> .........................................................<br /><p>&nbsp;</p>
	  <?php echo $model->complementoDocumento->plantilla->campo51;?> .........................................................
	</p><br /><p>&nbsp;</p>
	<p><?php echo $model->complementoDocumento->plantilla->campo36;?> ................................................................................................................<br /><p>&nbsp;</p>
	   <?php echo $model->complementoDocumento->plantilla->campo37;?> ............................................................<br /><p>&nbsp;</p>
	   <?php echo $model->complementoDocumento->plantilla->campo38;?> .........................................................
	</p>
	</td>
  </tr>
</table>