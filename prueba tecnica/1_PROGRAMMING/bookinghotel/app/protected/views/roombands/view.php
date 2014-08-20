<?php
/* @var $this RoombandsController */
/* @var $model Roombands */

$this->breadcrumbs=array(
	'Roombands'=>array('index'),
	$model->R_Band_Id,
);

$this->menu=array(
	array('label'=>'List Roombands', 'url'=>array('index')),
	array('label'=>'Create Roombands', 'url'=>array('create')),
	array('label'=>'Update Roombands', 'url'=>array('update', 'id'=>$model->R_Band_Id)),
	array('label'=>'Delete Roombands', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->R_Band_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Roombands', 'url'=>array('admin')),
);
?>

<h1>View Roombands #<?php echo $model->R_Band_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'R_Band_Id',
		'R_Band_Description',
	),
)); ?>
