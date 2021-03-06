<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Questions'=>array('index'),
	$model->idQuestion=>array('view','id'=>$model->idQuestion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Questions', 'url'=>array('index')),
	array('label'=>'Create Question', 'url'=>array('create')),
	array('label'=>'View Question', 'url'=>array('view', 'id'=>$model->idQuestion)),
	array('label'=>'Manage Questions', 'url'=>array('admin')),
);
?>

<h1>Update Question <?php echo $model->idQuestion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>