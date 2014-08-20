<?php
/* @var $this RoomtypesController */
/* @var $data Roomtypes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Type_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->R_Type_Id), array('view', 'id'=>$data->R_Type_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Type')); ?>:</b>
	<?php echo CHtml::encode($data->R_Type); ?>
	<br />


</div>