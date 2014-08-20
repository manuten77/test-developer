<?php
/* @var $this PaymentmethodsController */
/* @var $model Paymentmethods */

$this->breadcrumbs=array(
	'Paymentmethods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Paymentmethods', 'url'=>array('index')),
	array('label'=>'Manage Paymentmethods', 'url'=>array('admin')),
);
?>

<h1>Create Paymentmethods</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>