<?php
/* @var $this AnalysisController */
/* @var $model Analysis */

$this->breadcrumbs=array(
	'Analyses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Analyses', 'url'=>array('index')),
	array('label'=>'Create Analysis', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#analysis-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Analyses</h1>

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
	'id'=>'analysis-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idAnalysis',
        array(
            'name'=>'customer',
            'value'=>'$data->customer->ContactTitle',
        ),
        array(
            'name'=>'user',
            'value'=>'$data->user->LastName',
        ),
		'Comments',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
