<?php
/* @var $this RoomsController */
/* @var $data Rooms */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->R_Id), array('view', 'id'=>$data->R_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Type_Id')); ?>:</b>
	<?php echo CHtml::encode($data->R_Type_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Band_Id')); ?>:</b>
	<?php echo CHtml::encode($data->R_Band_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Price_Id')); ?>:</b>
	<?php echo CHtml::encode($data->R_Price_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Floor')); ?>:</b>
	<?php echo CHtml::encode($data->R_Floor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_AdditionalNotes')); ?>:</b>
	<?php echo CHtml::encode($data->R_AdditionalNotes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Id')); ?>:</b>
	<?php echo CHtml::encode($data->H_Id); ?>
	<br />


</div>