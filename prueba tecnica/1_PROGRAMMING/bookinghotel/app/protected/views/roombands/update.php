<?php
/* @var $this RoombandsController */
/* @var $model Roombands */

$this->breadcrumbs=array(
	'Roombands'=>array('index'),
	$model->R_Band_Id=>array('view','id'=>$model->R_Band_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Roombands', 'url'=>array('index')),
	array('label'=>'Create Roombands', 'url'=>array('create')),
	array('label'=>'View Roombands', 'url'=>array('view', 'id'=>$model->R_Band_Id)),
	array('label'=>'Manage Roombands', 'url'=>array('admin')),
);
?>

<h1>Update Roombands <?php echo $model->R_Band_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>