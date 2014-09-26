<?php
/* @var $this AnalysisController */
/* @var $model Analysis */

$this->breadcrumbs=array(
	'Analyses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Analyses', 'url'=>array('index')),
	array('label'=>'Manage Analyses', 'url'=>array('admin')),
);
?>

<h1>Create Analysis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>