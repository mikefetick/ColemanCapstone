<?php
/* @var $this UserController */
/* @var $data User */
?>
<?php Yii::app()-> clientScript-> registerCssFile(
    Yii::app()-> assetManager-> publish(
        Yii::getPathOfAlias('application.assets').'/users.css'
    ))
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUser')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUser), array('view', 'id'=>$data->idUser)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserTypeID')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->UserTypeID), array('view', 'UserType/UserTypeID'=>'idUserType')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FirstName')); ?>:</b>
	<?php echo CHtml::encode($data->FirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Password')); ?>:</b>
	<?php echo CHtml::encode($data->Password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Phone')); ?>:</b>
	<?php echo CHtml::encode($data->Phone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('StatusID')); ?>:</b>
	<?php echo CHtml::encode($data->StatusID); ?>
	<br />

	*/ ?>

</div>