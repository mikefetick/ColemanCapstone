<?php
/* @var $this AnalysisstatusController */
/* @var $model Analysisstatus */

$this->breadcrumbs=array(
	'Analysisstatuses'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Analysis Status', 'url'=>array('index')),
	array('label'=>'Create Analysis Status', 'url'=>array('create')),
	array('label'=>'Update Analysis Status', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Analysis Status', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Analysis Status', 'url'=>array('admin')),
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
