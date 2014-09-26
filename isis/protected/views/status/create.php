<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Statuses', 'url'=>array('index')),
	array('label'=>'Manage Statuses', 'url'=>array('admin')),
);
?>

<h1>Create Status</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>