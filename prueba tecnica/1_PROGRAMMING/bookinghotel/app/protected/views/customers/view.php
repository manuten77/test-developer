<?php
/* @var $this CustomersController */
/* @var $model Customers */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->C_Id,
);

$this->menu=array(
	array('label'=>'List Customers', 'url'=>array('index')),
	array('label'=>'Create Customers', 'url'=>array('create')),
	array('label'=>'Update Customers', 'url'=>array('update', 'id'=>$model->C_Id)),
	array('label'=>'Delete Customers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->C_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>

<h1>View Customers #<?php echo $model->C_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'C_Id',
		'C_Title',
		'C_Name',
		'C_Surname',
		'C_DateofBirthday',
		'C_Address',
		'C_Town',
		'C_Country',
		'C_PostalCode',
		'C_HomePhone',
		'C_MobilePhone',
		'C_Email',
	),
)); ?>
