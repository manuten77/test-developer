<?php
/* @var $this RoomsController */
/* @var $model Rooms */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	$model->R_Id,
);

$this->menu=array(
	array('label'=>'List Rooms', 'url'=>array('index')),
	array('label'=>'Create Rooms', 'url'=>array('create')),
	array('label'=>'Update Rooms', 'url'=>array('update', 'id'=>$model->R_Id)),
	array('label'=>'Delete Rooms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->R_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rooms', 'url'=>array('admin')),
);
?>

<h1>View Rooms #<?php echo $model->R_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'R_Id',
		'R_Type_Id',
		'R_Band_Id',
		'R_Price_Id',
		'R_Floor',
		'R_AdditionalNotes',
		'H_Id',
	),
)); ?>
