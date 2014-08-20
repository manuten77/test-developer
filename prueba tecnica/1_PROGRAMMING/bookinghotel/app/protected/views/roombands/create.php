<?php
/* @var $this RoombandsController */
/* @var $model Roombands */

$this->breadcrumbs=array(
	'Roombands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Roombands', 'url'=>array('index')),
	array('label'=>'Manage Roombands', 'url'=>array('admin')),
);
?>

<h1>Create Roombands</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>