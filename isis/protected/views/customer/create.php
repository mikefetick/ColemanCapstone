<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Customers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Customers', 'url'=>array('index')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>

<h1>Create Customer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>