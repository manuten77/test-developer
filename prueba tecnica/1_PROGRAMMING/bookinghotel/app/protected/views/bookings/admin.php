<?php
/* @var $this BookingsController */
/* @var $model Bookings */

$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bookings', 'url'=>array('index')),
	array('label'=>'Create Bookings', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bookings-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bookings</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bookings-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'B_Id',
		'B_DateMade',
		'B_TimeMade',
		'B_StartDate',
		'B_EndDate',
		'Tot_Pay_Due_Date',
		/*
		'Tot_Pay_Due_Amount',
		'Tot_Pay_Made_On',
		'B_Notes_Comments',
		'H_Id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
