<?php
/* @var $this GuestsController */
/* @var $model Guests */

$this->breadcrumbs=array(
	'Guests'=>array('index'),
	$model->G_Id=>array('view','id'=>$model->G_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Guests', 'url'=>array('index')),
	array('label'=>'Create Guests', 'url'=>array('create')),
	array('label'=>'View Guests', 'url'=>array('view', 'id'=>$model->G_Id)),
	array('label'=>'Manage Guests', 'url'=>array('admin')),
);
?>

<h1>Update Guests <?php echo $model->G_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>