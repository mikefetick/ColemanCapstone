<?php
/* @var $this QuestionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Questions',
);

$this->menu=array(
	array('label'=>'Create Question', 'url'=>array('create')),
	array('label'=>'Manage Questions', 'url'=>array('admin')),
);
?>

<h1>Questions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'itemsTagName' => 'ol',
    'itemsCssClass' => 'questions',
    'sortableAttributes' => array(
        'CategoryID', 'Question'
    ),
    'template' => '{sorter} {pager} {items} {sorter} {pager}',
)); ?>
