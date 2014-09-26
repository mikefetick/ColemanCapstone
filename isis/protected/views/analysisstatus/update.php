<?php
/* @var $this AnalysisstatusController */
/* @var $model Analysisstatus */

$this->breadcrumbs=array(
	'Analysisstatuses'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Analysis Status', 'url'=>array('index')),
	array('label'=>'Create Analysis Status', 'url'=>array('create')),
	array('label'=>'View Analysis Status', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Analysis Status', 'url'=>array('admin')),
);
?>

<h1>Update Analysisstatus <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>