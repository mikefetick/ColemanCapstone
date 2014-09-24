<?php
/* @var $this CustomerController */
/* @var $data Customer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCustomer')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCustomer), array('view', 'id'=>$data->idCustomer)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Company')); ?>:</b>
	<?php echo CHtml::encode($data->Company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactLast')); ?>:</b>
	<?php echo CHtml::encode($data->ContactLast); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactFirst')); ?>:</b>
	<?php echo CHtml::encode($data->ContactFirst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMail')); ?>:</b>
	<?php echo CHtml::encode($data->EMail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Phone')); ?>:</b>
	<?php echo CHtml::encode($data->Phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactTitle')); ?>:</b>
	<?php echo CHtml::encode($data->ContactTitle); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('BusinessAddress')); ?>:</b>
	<?php echo CHtml::encode($data->BusinessAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StatusID')); ?>:</b>
	<?php echo CHtml::encode($data->StatusID); ?>
	<br />

	*/ ?>

</div>