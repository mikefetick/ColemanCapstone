<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create', 'UserTypeID'=>3)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'itemsTagName' => 'ol',
    'itemsCssClass' => 'users',
    'sortableAttributes' => array(
        'LastName', 'Email', 'StatusID'
    ),
    'template' => '{sorter} {pager} {items} {sorter} {pager}',
)); ?>
