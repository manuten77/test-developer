<?php
/* @var $this RoomtypesController */
/* @var $model Roomtypes */

$this->breadcrumbs=array(
	'Roomtypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Roomtypes', 'url'=>array('index')),
	array('label'=>'Manage Roomtypes', 'url'=>array('admin')),
);
?>

<h1>Create Roomtypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>