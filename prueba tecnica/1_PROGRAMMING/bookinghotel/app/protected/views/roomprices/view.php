<?php
/* @var $this RoompricesController */
/* @var $model Roomprices */

$this->breadcrumbs=array(
	'Roomprices'=>array('index'),
	$model->R_Price_Id,
);

$this->menu=array(
	array('label'=>'List Roomprices', 'url'=>array('index')),
	array('label'=>'Create Roomprices', 'url'=>array('create')),
	array('label'=>'Update Roomprices', 'url'=>array('update', 'id'=>$model->R_Price_Id)),
	array('label'=>'Delete Roomprices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->R_Price_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Roomprices', 'url'=>array('admin')),
);
?>

<h1>View Roomprices #<?php echo $model->R_Price_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'R_Price_Id',
		'R_Price',
	),
)); ?>
