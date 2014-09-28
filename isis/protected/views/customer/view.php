<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Customers'=>array('index'),
	$model->idCustomer,
);

$this->menu=array(
	array('label'=>'List Customers', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'Update Customer', 'url'=>array('update', 'id'=>$model->idCustomer)),
	array('label'=>'Delete Customer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCustomer),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>

<h1>View Customer #<?php echo $model->idCustomer; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCustomer',
		'Company',
		'ContactLast',
		'ContactFirst',
		'EMail',
		'Phone',
		'ContactTitle',
		'BusinessAddress',
		'StatusID',
	),
)); ?>
