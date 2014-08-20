<?php
/* @var $this GuestsController */
/* @var $model Guests */

$this->breadcrumbs=array(
	'Guests'=>array('index'),
	$model->G_Id,
);

$this->menu=array(
	array('label'=>'List Guests', 'url'=>array('index')),
	array('label'=>'Create Guests', 'url'=>array('create')),
	array('label'=>'Update Guests', 'url'=>array('update', 'id'=>$model->G_Id)),
	array('label'=>'Delete Guests', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->G_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Guests', 'url'=>array('admin')),
);
?>

<h1>View Guests #<?php echo $model->G_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'G_Id',
		'G_Title',
		'G_Name',
		'G_Surname',
		'G_DateofBirthday',
		'G_Address',
		'G_Town',
		'G_Country',
		'G_PostalCode',
		'G_ContactPhone',
	),
)); ?>
