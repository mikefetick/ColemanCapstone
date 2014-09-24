<?php
/* @var $this AnalysisstatusController */
/* @var $model Analysisstatus */

$this->breadcrumbs=array(
	'Analysisstatuses'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Analysisstatus', 'url'=>array('index')),
	array('label'=>'Create Analysisstatus', 'url'=>array('create')),
	array('label'=>'View Analysisstatus', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Analysisstatus', 'url'=>array('admin')),
);
?>

<h1>Update Analysisstatus <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>