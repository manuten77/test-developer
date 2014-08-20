<?php
/* @var $this PaymentmethodsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Paymentmethods',
);

$this->menu=array(
	array('label'=>'Create Paymentmethods', 'url'=>array('create')),
	array('label'=>'Manage Paymentmethods', 'url'=>array('admin')),
);
?>

<h1>Paymentmethods</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
