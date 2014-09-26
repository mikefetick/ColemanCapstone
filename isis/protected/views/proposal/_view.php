<?php
/* @var $this ProposalController */
/* @var $data Proposal */
?>
<?php Yii::app()-> clientScript-> registerCssFile(
    Yii::app()-> assetManager-> publish(
        Yii::getPathOfAlias('application.assets').'/proposals.css'
    ))
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProposalID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ProposalID), array('view', 'id'=>$data->ProposalID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AnalysisID')); ?>:</b>
	<?php echo CHtml::encode($data->AnalysisID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TimeStamp')); ?>:</b>
	<?php echo CHtml::encode($data->TimeStamp), array('time'=>$theTime); ?>
	<br />


</div>