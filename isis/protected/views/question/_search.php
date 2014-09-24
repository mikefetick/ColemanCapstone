<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idQuestion'); ?>
		<?php echo $form->textField($model,'idQuestion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Question'); ?>
		<?php echo $form->textArea($model,'Question',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OptA'); ?>
		<?php echo $form->textArea($model,'OptA',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OptB'); ?>
		<?php echo $form->textArea($model,'OptB',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OptC'); ?>
		<?php echo $form->textArea($model,'OptC',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OptD'); ?>
		<?php echo $form->textArea($model,'OptD',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CategoryID'); ?>
		<?php echo $form->textField($model,'CategoryID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->