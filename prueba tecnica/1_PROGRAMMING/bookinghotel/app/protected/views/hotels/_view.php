<?php
/* @var $this HotelsController */
/* @var $data Hotels */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->H_Id), array('view', 'id'=>$data->H_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Name')); ?>:</b>
	<?php echo CHtml::encode($data->H_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Address')); ?>:</b>
	<?php echo CHtml::encode($data->H_Address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Town')); ?>:</b>
	<?php echo CHtml::encode($data->H_Town); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Country')); ?>:</b>
	<?php echo CHtml::encode($data->H_Country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_PostalCode')); ?>:</b>
	<?php echo CHtml::encode($data->H_PostalCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Phone')); ?>:</b>
	<?php echo CHtml::encode($data->H_Phone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Email')); ?>:</b>
	<?php echo CHtml::encode($data->H_Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Number_Rooms')); ?>:</b>
	<?php echo CHtml::encode($data->H_Number_Rooms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Services')); ?>:</b>
	<?php echo CHtml::encode($data->H_Services); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('H_Star_Level')); ?>:</b>
	<?php echo CHtml::encode($data->H_Star_Level); ?>
	<br />

	*/ ?>

</div>