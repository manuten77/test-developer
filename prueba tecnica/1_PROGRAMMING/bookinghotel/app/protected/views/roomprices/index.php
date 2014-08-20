<?php
/* @var $this RoompricesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Roomprices',
);

$this->menu=array(
	array('label'=>'Create Roomprices', 'url'=>array('create')),
	array('label'=>'Manage Roomprices', 'url'=>array('admin')),
);
?>

<h1>Roomprices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
