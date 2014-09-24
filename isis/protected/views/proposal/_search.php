<?php
/* @var $this ProposalController */
/* @var $model Proposal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ProposalID'); ?>
		<?php echo $form->textField($model,'ProposalID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AnalysisID'); ?>
		<?php echo $form->textField($model,'AnalysisID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TimeStamp'); ?>
		<?php echo $form->textField($model,'TimeStamp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->