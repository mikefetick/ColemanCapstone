<?php
/* @var $this SurveyController */
/* @var $model Survey */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Surveys', 'url'=>array('index')),
	array('label'=>'Create Survey', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#survey-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Surveys</h1>

<p>
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>

<p>
    <br /><strong>To search within columns, enter values in the boxes below.</strong>
    <br />A comparison operator
    (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> or <b>=</b>)
    can be specified.
</p>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'survey-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idSurvey',
		'Answer',
		'idAnalysis',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
