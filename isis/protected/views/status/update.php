<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->idStatus=>array('view','id'=>$model->idStatus),
	'Update',
);

$this->menu=array(
	array('label'=>'List Statuses', 'url'=>array('index')),
	array('label'=>'Create Status', 'url'=>array('create')),
	array('label'=>'View Status', 'url'=>array('view', 'id'=>$model->idStatus)),
	array('label'=>'Manage Statuses', 'url'=>array('admin')),
);
?>

<h1>Update Status <?php echo $model->idStatus; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>