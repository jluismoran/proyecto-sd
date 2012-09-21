<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array('size'=>10,'maxlength'=>10,'readonly'=>true)); ?>
    <a href="./?r=cliente/admin" id="buscar_cliente"><img src="images/icono_buscar.png" ></a>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->