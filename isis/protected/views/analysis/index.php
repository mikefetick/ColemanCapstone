<?php
/* @var $this AnalysisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Analyses',
);

$this->menu=array(
	array('label'=>'Create Analysis', 'url'=>array('create')),
	array('label'=>'Manage Analyses', 'url'=>array('admin')),
);
?>

<h1>Analyses</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'itemsTagName' => 'ol',
    'itemsCssClass' => 'analyses',
    'sortableAttributes' => array(
        'CustomerID', 'UserID', 'Comments'
    ),
    'template' => '{sorter} {pager} {items} {sorter} {pager}',
)); ?>
