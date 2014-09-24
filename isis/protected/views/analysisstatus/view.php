<?php
/* @var $this AnalysisstatusController */
/* @var $model Analysisstatus */

$this->breadcrumbs=array(
	'Analysisstatuses'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Analysisstatus', 'url'=>array('index')),
	array('label'=>'Create Analysisstatus', 'url'=>array('create')),
	array('label'=>'Update Analysisstatus', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Analysisstatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Analysisstatus', 'url'=>array('admin')),
);
?>

<h1>View Analysisstatus #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Status',
	),
)); ?>
