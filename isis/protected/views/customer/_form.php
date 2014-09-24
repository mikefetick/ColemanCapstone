<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Company'); ?>
		<?php echo $form->textArea($model,'Company',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactLast'); ?>
		<?php echo $form->textArea($model,'ContactLast',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ContactLast'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactFirst'); ?>
		<?php echo $form->textArea($model,'ContactFirst',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ContactFirst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMail'); ?>
		<?php echo $form->textField($model,'EMail',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'EMail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Phone'); ?>
		<?php echo $form->textField($model,'Phone'); ?>
		<?php echo $form->error($model,'Phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactTitle'); ?>
		<?php echo $form->textArea($model,'ContactTitle',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ContactTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BusinessAddress'); ?>
		<?php echo $form->textArea($model,'BusinessAddress',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'BusinessAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StatusID'); ?>
		<?php echo $form->textField($model,'StatusID'); ?>
		<?php echo $form->error($model,'StatusID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->