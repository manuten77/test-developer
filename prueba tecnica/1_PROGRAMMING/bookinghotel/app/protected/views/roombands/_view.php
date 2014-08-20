<?php
/* @var $this RoombandsController */
/* @var $data Roombands */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Band_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->R_Band_Id), array('view', 'id'=>$data->R_Band_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Band_Description')); ?>:</b>
	<?php echo CHtml::encode($data->R_Band_Description); ?>
	<br />


</div>