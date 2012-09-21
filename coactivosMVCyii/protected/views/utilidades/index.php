<?php
$this->breadcrumbs=array(
	'Utilidades',
);?>
<h1>Carga de Archivo <?php echo $texto; ?></h1>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'fin--cobranza-form',
    'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>


    <div class="row">
        <?php echo $form->labelEx($model,'image'); ?>
        <?php echo $form->fileField($model,'image'); ?>
        <?php echo $form->error($model,'image'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Cargar'); ?>
    </div>

<?php $this->endWidget(); ?>