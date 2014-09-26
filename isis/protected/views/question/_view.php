<?php
/* @var $this QuestionController */
/* @var $data Question */
?>
<?php Yii::app()-> clientScript-> registerCssFile(
    Yii::app()-> assetManager-> publish(
        Yii::getPathOfAlias('application.assets').'/questions.css'
    ))
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idQuestion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idQuestion), array('view', 'id'=>$data->idQuestion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Question')); ?>:</b>
	<?php echo CHtml::encode($data->Question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OptA')); ?>:</b>
	<?php echo CHtml::encode($data->OptA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OptB')); ?>:</b>
	<?php echo CHtml::encode($data->OptB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OptC')); ?>:</b>
	<?php echo CHtml::encode($data->OptC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OptD')); ?>:</b>
	<?php echo CHtml::encode($data->OptD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CategoryID')); ?>:</b>
	<?php echo CHtml::encode($data->CategoryID); ?>
	<br />

</div>