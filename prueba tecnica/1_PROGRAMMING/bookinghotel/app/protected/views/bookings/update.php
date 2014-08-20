<?php
/* @var $this BookingsController */
/* @var $model Bookings */

$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	$model->B_Id=>array('view','id'=>$model->B_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bookings', 'url'=>array('index')),
	array('label'=>'Create Bookings', 'url'=>array('create')),
	array('label'=>'View Bookings', 'url'=>array('view', 'id'=>$model->B_Id)),
	array('label'=>'Manage Bookings', 'url'=>array('admin')),
);
?>

<h1>Update Bookings <?php echo $model->B_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>