<?php
/* @var $this CustomersController */
/* @var $model Customers */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->C_Id=>array('view','id'=>$model->C_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Customers', 'url'=>array('index')),
	array('label'=>'Create Customers', 'url'=>array('create')),
	array('label'=>'View Customers', 'url'=>array('view', 'id'=>$model->C_Id)),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>

<h1>Update Customers <?php echo $model->C_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>