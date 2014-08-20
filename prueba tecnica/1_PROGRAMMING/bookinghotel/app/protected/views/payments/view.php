<?php
/* @var $this PaymentsController */
/* @var $model Payments */

$this->breadcrumbs=array(
	'Payments'=>array('index'),
	$model->P_Id,
);

$this->menu=array(
	array('label'=>'List Payments', 'url'=>array('index')),
	array('label'=>'Create Payments', 'url'=>array('create')),
	array('label'=>'Update Payments', 'url'=>array('update', 'id'=>$model->P_Id)),
	array('label'=>'Delete Payments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->P_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Payments', 'url'=>array('admin')),
);
?>

<h1>View Payments #<?php echo $model->P_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'P_Id',
		'B_Id',
		'C_Id',
		'P_Method_Id',
		'P_Amount',
		'P_Comments',
	),
)); ?>
