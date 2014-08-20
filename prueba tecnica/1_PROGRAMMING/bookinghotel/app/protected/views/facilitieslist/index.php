<?php
/* @var $this FacilitieslistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facilitieslists',
);

$this->menu=array(
	array('label'=>'Create Facilitieslist', 'url'=>array('create')),
	array('label'=>'Manage Facilitieslist', 'url'=>array('admin')),
);
?>

<h1>Facilitieslists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
