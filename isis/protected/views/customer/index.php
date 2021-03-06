<?php
/* @var $this CustomerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Customers',
);

$this->menu=array(
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>

<h1>Customers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'itemsTagName' => 'ol',
    'itemsCssClass' => 'customers',
    'sortableAttributes' => array(
        'ContactLast', 'EMail', 'StatusID'
    ),
    'template' => '{sorter} {pager} {items} {sorter} {pager}',
)); ?>
