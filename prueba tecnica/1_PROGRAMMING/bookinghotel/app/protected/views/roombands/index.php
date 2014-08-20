<?php
/* @var $this RoombandsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Roombands',
);

$this->menu=array(
	array('label'=>'Create Roombands', 'url'=>array('create')),
	array('label'=>'Manage Roombands', 'url'=>array('admin')),
);
?>

<h1>Roombands</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
