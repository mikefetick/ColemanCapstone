<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Customers'=>array('index'),
	$model->idCustomer=>array('view','id'=>$model->idCustomer),
	'Update',
);

$this->menu=array(
	array('label'=>'List Customers', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'View Customer', 'url'=>array('view', 'id'=>$model->idCustomer)),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>

<h1>Update Customer <?php echo $model->idCustomer; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>