<?php
/* @var $this RoompricesController */
/* @var $model Roomprices */

$this->breadcrumbs=array(
	'Roomprices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Roomprices', 'url'=>array('index')),
	array('label'=>'Manage Roomprices', 'url'=>array('admin')),
);
?>

<h1>Create Roomprices</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>