<?php
/* @var $this FacilitieslistController */
/* @var $model Facilitieslist */

$this->breadcrumbs=array(
	'Facilitieslists'=>array('index'),
	$model->F_Id,
);

$this->menu=array(
	array('label'=>'List Facilitieslist', 'url'=>array('index')),
	array('label'=>'Create Facilitieslist', 'url'=>array('create')),
	array('label'=>'Update Facilitieslist', 'url'=>array('update', 'id'=>$model->F_Id)),
	array('label'=>'Delete Facilitieslist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->F_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facilitieslist', 'url'=>array('admin')),
);
?>

<h1>View Facilitieslist #<?php echo $model->F_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'F_Id',
		'F_Description',
	),
)); ?>
