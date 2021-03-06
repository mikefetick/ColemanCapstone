<?php
/* @var $this SurveyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Surveys',
);

$this->menu=array(
	array('label'=>'Create Survey', 'url'=>array('create')),
	array('label'=>'Manage Surveys', 'url'=>array('admin')),
);
?>

<h1>Surveys</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'itemsTagName' => 'ol',
    'itemsCssClass' => 'surveys',
    'sortableAttributes' => array(
        'Answer', 'idAnalysis'
    ),
    'template' => '{sorter} {pager} {items} {sorter} {pager}',
)); ?>
