<?php
/* @var $this AnalysisstatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Analysisstatuses',
);

$this->menu=array(
	array('label'=>'Create Analysis Status', 'url'=>array('create')),
	array('label'=>'Manage Analysis Status', 'url'=>array('admin')),
);
?>

<h1>Analysisstatuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
