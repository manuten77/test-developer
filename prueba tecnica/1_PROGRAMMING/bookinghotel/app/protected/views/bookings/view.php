<?php
/* @var $this BookingsController */
/* @var $model Bookings */

$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	$model->B_Id,
);

$this->menu=array(
	array('label'=>'List Bookings', 'url'=>array('index')),
	array('label'=>'Create Bookings', 'url'=>array('create')),
	array('label'=>'Update Bookings', 'url'=>array('update', 'id'=>$model->B_Id)),
	array('label'=>'Delete Bookings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->B_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bookings', 'url'=>array('admin')),
);
?>

<h1>View Bookings #<?php echo $model->B_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'B_Id',
		'B_DateMade',
		'B_TimeMade',
		'B_StartDate',
		'B_EndDate',
		'Tot_Pay_Due_Date',
		'Tot_Pay_Due_Amount',
		'Tot_Pay_Made_On',
		'B_Notes_Comments',
		'H_Id',
	),
)); ?>
