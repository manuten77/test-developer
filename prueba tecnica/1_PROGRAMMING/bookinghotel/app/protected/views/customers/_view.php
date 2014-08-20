<?php
/* @var $this CustomersController */
/* @var $data Customers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->C_Id), array('view', 'id'=>$data->C_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_Title')); ?>:</b>
	<?php echo CHtml::encode($data->C_Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_Name')); ?>:</b>
	<?php echo CHtml::encode($data->C_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_Surname')); ?>:</b>
	<?php echo CHtml::encode($data->C_Surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_DateofBirthday')); ?>:</b>
	<?php echo CHtml::encode($data->C_DateofBirthday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_Address')); ?>:</b>
	<?php echo CHtml::encode($data->C_Address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_Town')); ?>:</b>
	<?php echo CHtml::encode($data->C_Town); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('C_Country')); ?>:</b>
	<?php echo CHtml::encode($data->C_Country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_PostalCode')); ?>:</b>
	<?php echo CHtml::encode($data->C_PostalCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_HomePhone')); ?>:</b>
	<?php echo CHtml::encode($data->C_HomePhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_MobilePhone')); ?>:</b>
	<?php echo CHtml::encode($data->C_MobilePhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_Email')); ?>:</b>
	<?php echo CHtml::encode($data->C_Email); ?>
	<br />

	*/ ?>

</div>