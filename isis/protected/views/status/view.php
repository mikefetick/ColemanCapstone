<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->idStatus,
);

$this->menu=array(
	array('label'=>'List Statuses', 'url'=>array('index')),
	array('label'=>'Create Status', 'url'=>array('create')),
	array('label'=>'Update Status', 'url'=>array('update', 'id'=>$model->idStatus)),
	array('label'=>'Delete Status', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idStatus),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Statuses', 'url'=>array('admin')),
);
?>

<h1>View Status #<?php echo $model->idStatus; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idStatus',
		'Status',
	),
)); ?>
