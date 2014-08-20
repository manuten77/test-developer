<?php
/* @var $this PaymentmethodsController */
/* @var $model Paymentmethods */

$this->breadcrumbs=array(
	'Paymentmethods'=>array('index'),
	$model->P_Method_Id,
);

$this->menu=array(
	array('label'=>'List Paymentmethods', 'url'=>array('index')),
	array('label'=>'Create Paymentmethods', 'url'=>array('create')),
	array('label'=>'Update Paymentmethods', 'url'=>array('update', 'id'=>$model->P_Method_Id)),
	array('label'=>'Delete Paymentmethods', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->P_Method_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paymentmethods', 'url'=>array('admin')),
);
?>

<h1>View Paymentmethods #<?php echo $model->P_Method_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'P_Method_Id',
		'P_Method',
	),
)); ?>
