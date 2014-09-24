<?php
/* @var $this ProposalController */
/* @var $model Proposal */

$this->breadcrumbs=array(
	'Proposals'=>array('index'),
	$model->ProposalID,
);

$this->menu=array(
	array('label'=>'List Proposal', 'url'=>array('index')),
	array('label'=>'Create Proposal', 'url'=>array('create')),
	array('label'=>'Update Proposal', 'url'=>array('update', 'id'=>$model->ProposalID)),
	array('label'=>'Delete Proposal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ProposalID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proposal', 'url'=>array('admin')),
);
?>

<h1>View Proposal #<?php echo $model->ProposalID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ProposalID',
		'AnalysisID',
		'TimeStamp',
	),
)); ?>
