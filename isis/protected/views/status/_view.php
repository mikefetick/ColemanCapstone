<?php
/* @var $this StatusController */
/* @var $data Status */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idStatus')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idStatus), array('view', 'id'=>$data->idStatus)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />


</div>