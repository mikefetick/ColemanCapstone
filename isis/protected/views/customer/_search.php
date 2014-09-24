<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCustomer'); ?>
		<?php echo $form->textField($model,'idCustomer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Company'); ?>
		<?php echo $form->textArea($model,'Company',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContactLast'); ?>
		<?php echo $form->textArea($model,'ContactLast',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContactFirst'); ?>
		<?php echo $form->textArea($model,'ContactFirst',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMail'); ?>
		<?php echo $form->textField($model,'EMail',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Phone'); ?>
		<?php echo $form->textField($model,'Phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContactTitle'); ?>
		<?php echo $form->textArea($model,'ContactTitle',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BusinessAddress'); ?>
		<?php echo $form->textArea($model,'BusinessAddress',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StatusID'); ?>
		<?php echo $form->textField($model,'StatusID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->