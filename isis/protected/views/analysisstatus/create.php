<?php
/* @var $this AnalysisstatusController */
/* @var $model Analysisstatus */

$this->breadcrumbs=array(
	'Analysisstatuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Analysis Status', 'url'=>array('index')),
	array('label'=>'Manage Analysis Status', 'url'=>array('admin')),
);
?>

<h1>Create Analysisstatus</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>