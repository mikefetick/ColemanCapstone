<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Users'=>array('index'),
	$model->idUser=>array('view','id'=>$model->idUser),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->idUser)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Update User <?php echo $model->idUser; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>