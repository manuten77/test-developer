<?php
/* @var $this GuestsController */
/* @var $data Guests */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('G_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->G_Id), array('view', 'id'=>$data->G_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('G_Title')); ?>:</b>
	<?php echo CHtml::encode($data->G_Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('G_Name')); ?>:</b>
	<?php echo CHtml::encode($data->G_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('G_Surname')); ?>:</b>
	<?php echo CHtml::encode($data->G_Surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('G_DateofBirthday')); ?>:</b>
	<?php echo CHtml::encode($data->G_DateofBirthday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('G_Address')); ?>:</b>
	<?php echo CHtml::encode($data->G_Address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('G_Town')); ?>:</b>
	<?php echo CHtml::encode($data->G_Town); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('G_Country')); ?>:</b>
	<?php echo CHtml::encode($data->G_Country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('G_PostalCode')); ?>:</b>
	<?php echo CHtml::encode($data->G_PostalCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('G_ContactPhone')); ?>:</b>
	<?php echo CHtml::encode($data->G_ContactPhone); ?>
	<br />

	*/ ?>

</div>