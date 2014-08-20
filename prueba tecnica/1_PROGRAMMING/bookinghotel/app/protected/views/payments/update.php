<?php
/* @var $this PaymentsController */
/* @var $model Payments */

$this->breadcrumbs=array(
	'Payments'=>array('index'),
	$model->P_Id=>array('view','id'=>$model->P_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Payments', 'url'=>array('index')),
	array('label'=>'Create Payments', 'url'=>array('create')),
	array('label'=>'View Payments', 'url'=>array('view', 'id'=>$model->P_Id)),
	array('label'=>'Manage Payments', 'url'=>array('admin')),
);
?>

<h1>Update Payments <?php echo $model->P_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>