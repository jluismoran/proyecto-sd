<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'fin--cobranza-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'cliente_id'); ?>
        <?php echo $form->textField($model,'cliente_id',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'cliente_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'usuario_id'); ?>
        <?php echo $form->textField($model,'usuario_id',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'usuario_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'importe'); ?>
        <?php echo $form->textField($model,'importe',array('size'=>16,'maxlength'=>16)); ?>
        <?php echo $form->error($model,'importe'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'complemento_idMoneda'); ?>
        <?php echo $form->textField($model,'complemento_idMoneda',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'complemento_idMoneda'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'estado_idDeuda'); ?>
        <?php echo $form->textField($model,'estado_idDeuda',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'estado_idDeuda'); ?>
    </div>

	
    <div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php //echo $form->textField($model,'fecha_saldo'); 
		              $this->widget('zii.widgets.jui.CJuiDatePicker',
			                array(
							      'model'=>$model,
								  'attribute'=>'fecha',
								  'language'=>'es',
								  'options'=>array(
								                    'dateformat'=>'yy-mm-dd',
													'constrainInput'=>'false',
													'duration'=>'fast',
													'showAnim'=>'slide',
													),
								  )
							);
		?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->