<?php
/* @var $this BookingsController */
/* @var $model Bookings */

$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bookings', 'url'=>array('index')),
	array('label'=>'Manage Bookings', 'url'=>array('admin')),
);
?>

<h1>Create Bookings</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>