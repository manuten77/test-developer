<?php
/* @var $this FacilitieslistController */
/* @var $model Facilitieslist */

$this->breadcrumbs=array(
	'Facilitieslists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Facilitieslist', 'url'=>array('index')),
	array('label'=>'Manage Facilitieslist', 'url'=>array('admin')),
);
?>

<h1>Create Facilitieslist</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>