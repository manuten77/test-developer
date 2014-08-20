<?php
/* @var $this RoompricesController */
/* @var $model Roomprices */

$this->breadcrumbs=array(
	'Roomprices'=>array('index'),
	$model->R_Price_Id=>array('view','id'=>$model->R_Price_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Roomprices', 'url'=>array('index')),
	array('label'=>'Create Roomprices', 'url'=>array('create')),
	array('label'=>'View Roomprices', 'url'=>array('view', 'id'=>$model->R_Price_Id)),
	array('label'=>'Manage Roomprices', 'url'=>array('admin')),
);
?>

<h1>Update Roomprices <?php echo $model->R_Price_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>