<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
    'Dashboard'=>array('/dashboard/Admin'),
	'Questions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Questions', 'url'=>array('index')),
    array('label'=>'Create Question', 'url'=>array('create')),
    array('label'=>'List Categories', 'url'=>array('category/index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#question-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Questions</h1>

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
	'id'=>'question-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idQuestion',
        array(
            'name'=>'category',
            'value'=>'$data->category->Category',
        ),
		'Question',
		'OptA',
		'OptB',
		'OptC',
		'OptD',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
