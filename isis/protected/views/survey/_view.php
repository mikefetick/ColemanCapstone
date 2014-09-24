<?php
/* @var $this SurveyController */
/* @var $data Survey */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSurvey')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSurvey), array('view', 'id'=>$data->idSurvey)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Answer')); ?>:</b>
	<?php echo CHtml::encode($data->Answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAnalysis')); ?>:</b>
	<?php echo CHtml::encode($data->idAnalysis); ?>
	<br />


</div>