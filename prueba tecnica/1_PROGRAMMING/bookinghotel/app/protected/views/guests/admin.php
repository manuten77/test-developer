<?php
/* @var $this GuestsController */
/* @var $model Guests */

$this->breadcrumbs=array(
	'Guests'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Guests', 'url'=>array('index')),
	array('label'=>'Create Guests', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#guests-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Guests</h1>

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
	'id'=>'guests-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'G_Id',
		'G_Title',
		'G_Name',
		'G_Surname',
		'G_DateofBirthday',
		'G_Address',
		/*
		'G_Town',
		'G_Country',
		'G_PostalCode',
		'G_ContactPhone',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
