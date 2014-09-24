<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Question'); ?>
		<?php echo $form->textArea($model,'Question',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OptA'); ?>
		<?php echo $form->textArea($model,'OptA',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'OptA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OptB'); ?>
		<?php echo $form->textArea($model,'OptB',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'OptB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OptC'); ?>
		<?php echo $form->textArea($model,'OptC',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'OptC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OptD'); ?>
		<?php echo $form->textArea($model,'OptD',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'OptD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CategoryID'); ?>
		<?php echo $form->textField($model,'CategoryID'); ?>
		<?php echo $form->error($model,'CategoryID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->