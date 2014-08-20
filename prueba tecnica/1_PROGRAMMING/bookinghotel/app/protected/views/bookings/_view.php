<?php
/* @var $this BookingsController */
/* @var $data Bookings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('B_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->B_Id), array('view', 'id'=>$data->B_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('B_DateMade')); ?>:</b>
	<?php echo CHtml::encode($data->B_DateMade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('B_TimeMade')); ?>:</b>
	<?php echo CHtml::encode($data->B_TimeMade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('B_StartDate')); ?>:</b>
	<?php echo CHtml::encode($data->B_StartDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('B_EndDate')); ?>:</b>
	<?php echo CHtml::encode($data->B_EndDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tot_Pay_Due_Date')); ?>:</b>
	<?php echo CHtml::encode($data->Tot_Pay_Due_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tot_Pay_Due_Amount')); ?>:</b>
	<?php echo CHtml::encode($data->Tot_Pay_Due_Amount); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Tot_Pay_Made_On')); ?>:</b>
	<?php echo CHtml::encode($data->Tot_Pay_Made_On); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('B_Notes_Comments')); ?>:</b>
	<?php echo CHtml::encode($data->B_Notes_Comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Id')); ?>:</b>
	<?php echo CHtml::encode($data->H_Id); ?>
	<br />

	*/ ?>

</div>