<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>