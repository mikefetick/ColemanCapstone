<?php
/* @var $this StatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Statuses',
);

$this->menu=array(
	array('label'=>'Create Status', 'url'=>array('create')),
	array('label'=>'Manage Statuses', 'url'=>array('admin')),
);
?>

<h1>Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
