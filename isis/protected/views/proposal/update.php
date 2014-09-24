<?php
/* @var $this ProposalController */
/* @var $model Proposal */

$this->breadcrumbs=array(
	'Proposals'=>array('index'),
	$model->ProposalID=>array('view','id'=>$model->ProposalID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proposal', 'url'=>array('index')),
	array('label'=>'Create Proposal', 'url'=>array('create')),
	array('label'=>'View Proposal', 'url'=>array('view', 'id'=>$model->ProposalID)),
	array('label'=>'Manage Proposal', 'url'=>array('admin')),
);
?>

<h1>Update Proposal <?php echo $model->ProposalID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>