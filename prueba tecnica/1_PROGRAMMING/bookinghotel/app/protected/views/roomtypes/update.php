<?php
/* @var $this RoomtypesController */
/* @var $model Roomtypes */

$this->breadcrumbs=array(
	'Roomtypes'=>array('index'),
	$model->R_Type_Id=>array('view','id'=>$model->R_Type_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Roomtypes', 'url'=>array('index')),
	array('label'=>'Create Roomtypes', 'url'=>array('create')),
	array('label'=>'View Roomtypes', 'url'=>array('view', 'id'=>$model->R_Type_Id)),
	array('label'=>'Manage Roomtypes', 'url'=>array('admin')),
);
?>

<h1>Update Roomtypes <?php echo $model->R_Type_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>