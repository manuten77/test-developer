<?php
/* @var $this HotelsController */
/* @var $model Hotels */

$this->breadcrumbs=array(
	'Hotels'=>array('index'),
	$model->H_Id,
);

$this->menu=array(
	array('label'=>'List Hotels', 'url'=>array('index')),
	array('label'=>'Create Hotels', 'url'=>array('create')),
	array('label'=>'Update Hotels', 'url'=>array('update', 'id'=>$model->H_Id)),
	array('label'=>'Delete Hotels', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->H_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hotels', 'url'=>array('admin')),
);
?>

<h1>View Hotels #<?php echo $model->H_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'H_Id',
		'H_Name',
		'H_Address',
		'H_Town',
		'H_Country',
		'H_PostalCode',
		'H_Phone',
		'H_Email',
		'H_Number_Rooms',
		'H_Services',
		'H_Star_Level',
	),
)); ?>
