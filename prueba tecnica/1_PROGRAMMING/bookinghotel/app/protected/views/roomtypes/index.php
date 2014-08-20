<?php
/* @var $this RoomtypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Roomtypes',
);

$this->menu=array(
	array('label'=>'Create Roomtypes', 'url'=>array('create')),
	array('label'=>'Manage Roomtypes', 'url'=>array('admin')),
);
?>

<h1>Roomtypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
