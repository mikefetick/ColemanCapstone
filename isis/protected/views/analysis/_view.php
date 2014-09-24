<?php
/* @var $this AnalysisController */
/* @var $data Analysis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAnalysis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAnalysis), array('view', 'id'=>$data->idAnalysis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerID')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comments')); ?>:</b>
	<?php echo CHtml::encode($data->Comments); ?>
	<br />


</div>