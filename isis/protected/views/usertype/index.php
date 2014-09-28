<?php
/* @var $this UsertypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Usertypes',
);

$this->menu=array(
	array('label'=>'Create Usertype', 'url'=>array('create')),
	array('label'=>'Manage Usertypes', 'url'=>array('admin')),
);
?>

<h1>Usertypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
