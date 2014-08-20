<?php
/* @var $this FacilitieslistController */
/* @var $data Facilitieslist */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('F_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->F_Id), array('view', 'id'=>$data->F_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('F_Description')); ?>:</b>
	<?php echo CHtml::encode($data->F_Description); ?>
	<br />


</div>