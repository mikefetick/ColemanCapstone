<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Users'=>array('index'),
	$model->idUser,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->idUser)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUser),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->idUser; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idUser',
		'UserTypeID',
		'LastName',
		'FirstName',
		'Password',
		'Email',
		'Phone',
		'StatusID',
	),
)); ?>
