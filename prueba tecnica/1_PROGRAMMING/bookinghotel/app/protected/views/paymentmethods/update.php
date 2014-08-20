<?php
/* @var $this PaymentmethodsController */
/* @var $model Paymentmethods */

$this->breadcrumbs=array(
	'Paymentmethods'=>array('index'),
	$model->P_Method_Id=>array('view','id'=>$model->P_Method_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Paymentmethods', 'url'=>array('index')),
	array('label'=>'Create Paymentmethods', 'url'=>array('create')),
	array('label'=>'View Paymentmethods', 'url'=>array('view', 'id'=>$model->P_Method_Id)),
	array('label'=>'Manage Paymentmethods', 'url'=>array('admin')),
);
?>

<h1>Update Paymentmethods <?php echo $model->P_Method_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>