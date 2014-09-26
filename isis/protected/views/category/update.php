<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->idCategory=>array('view','id'=>$model->idCategory),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categories', 'url'=>array('index')),
	array('label'=>'Create Category', 'url'=>array('create')),
	array('label'=>'View Category', 'url'=>array('view', 'id'=>$model->idCategory)),
	array('label'=>'Manage Categories', 'url'=>array('admin')),
);
?>

<h1>Update Category <?php echo $model->idCategory; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>