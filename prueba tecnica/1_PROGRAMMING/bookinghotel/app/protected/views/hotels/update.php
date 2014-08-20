<?php
/* @var $this HotelsController */
/* @var $model Hotels */

$this->breadcrumbs=array(
	'Hotels'=>array('index'),
	$model->H_Id=>array('view','id'=>$model->H_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hotels', 'url'=>array('index')),
	array('label'=>'Create Hotels', 'url'=>array('create')),
	array('label'=>'View Hotels', 'url'=>array('view', 'id'=>$model->H_Id)),
	array('label'=>'Manage Hotels', 'url'=>array('admin')),
);
?>

<h1>Update Hotels <?php echo $model->H_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>