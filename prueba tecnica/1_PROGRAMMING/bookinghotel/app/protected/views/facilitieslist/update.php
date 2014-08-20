<?php
/* @var $this FacilitieslistController */
/* @var $model Facilitieslist */

$this->breadcrumbs=array(
	'Facilitieslists'=>array('index'),
	$model->F_Id=>array('view','id'=>$model->F_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facilitieslist', 'url'=>array('index')),
	array('label'=>'Create Facilitieslist', 'url'=>array('create')),
	array('label'=>'View Facilitieslist', 'url'=>array('view', 'id'=>$model->F_Id)),
	array('label'=>'Manage Facilitieslist', 'url'=>array('admin')),
);
?>

<h1>Update Facilitieslist <?php echo $model->F_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>