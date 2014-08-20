<?php
/* @var $this RoomtypesController */
/* @var $model Roomtypes */

$this->breadcrumbs=array(
	'Roomtypes'=>array('index'),
	$model->R_Type_Id,
);

$this->menu=array(
	array('label'=>'List Roomtypes', 'url'=>array('index')),
	array('label'=>'Create Roomtypes', 'url'=>array('create')),
	array('label'=>'Update Roomtypes', 'url'=>array('update', 'id'=>$model->R_Type_Id)),
	array('label'=>'Delete Roomtypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->R_Type_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Roomtypes', 'url'=>array('admin')),
);
?>

<h1>View Roomtypes #<?php echo $model->R_Type_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'R_Type_Id',
		'R_Type',
	),
)); ?>
