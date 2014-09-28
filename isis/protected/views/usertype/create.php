<?php
/* @var $this UsertypeController */
/* @var $model Usertype */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Usertypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usertypes', 'url'=>array('index')),
	array('label'=>'Manage Usertypes', 'url'=>array('admin')),
);
?>

<h1>Create Usertype</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>