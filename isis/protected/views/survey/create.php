<?php
/* @var $this SurveyController */
/* @var $model Survey */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Surveys', 'url'=>array('index')),
	array('label'=>'Manage Surveys', 'url'=>array('admin')),
);
?>

<h1>Create Survey</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>