<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_idExterno'); ?>
		<?php echo $form->textField($model,'cliente_idExterno',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion1'); ?>
		<?php echo $form->textField($model,'descripcion1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion2'); ?>
		<?php echo $form->textField($model,'descripcion2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_identificacion'); ?>
		<?php echo $form->textField($model,'nro_identificacion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dst_id'); ?>
		<?php echo $form->textField($model,'dst_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_idDeuda'); ?>
		<?php echo $form->textField($model,'estado_idDeuda',array('size'=>10,'maxlength'=>10)); 
		//echo CHtml::encode($data->estado_cliente->descripcion);		?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saldo'); ?>
		<?php echo $form->textField($model,'saldo',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complemento_idMoneda'); ?>
		<?php echo $form->textField($model,'complemento_idMoneda',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_saldo'); ?>
		<?php echo $form->textField($model,'fecha_saldo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->