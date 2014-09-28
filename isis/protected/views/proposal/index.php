<?php
/* @var $this ProposalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Proposals',
);

$this->menu=array(
	array('label'=>'Create Proposal', 'url'=>array('create')),
	array('label'=>'Manage Proposals', 'url'=>array('admin')),
);
?>

<h1>Proposals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
